<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>
<div class="container wrap mt-2">
    <div class="row clearfix">
        <div class="col-12">
            <div class="card card-fluid">
                <div class="card-header drag-handle">
                    <?= lang("Custom.details_order") ?> # <?= $data->code ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card mt-3">
                <div class="card-header drag-handle">
                    <?= lang("Custom.cart_info_title") ?>
                </div>
                <div class="card-body">
                    <p class="fw-bold"><?= $data->receiver_name ?></p>
                    <div><?= lang('Custom.login_email_label') ?>: <?= $data->receiver_email ?></div>
                    <div><?= lang('Custom.login_phone_label') ?>: <?= $data->receiver_phone ?></div>
                    <div><?= lang('Custom.login_address_label') ?>: <?= $data->receiver_address ?></div>
                    <div><?= lang('Custom.login_area_label') ?>: <?= $data->receiver_area ?></div>
                </div>
            </div>
        </div>
        <?php if ($data->inv_tax_code != "") : ?>
            <div class="col-12 col-lg-6">
                <div class="card mt-3">
                    <div class="card-header drag-handle">
                        <?= lang("Custom.inv_header") ?>
                    </div>
                    <div class="card-body">
                        <div><?= lang('Custom.inv_name') ?>: <?= $data->inv_name ?></div>
                        <div><?= lang('Custom.inv_address') ?>: <?= $data->inv_address ?></div>
                        <div><?= lang('Custom.inv_tax_code') ?>: <?= $data->inv_tax_code ?></div>
                    </div>
                </div>
            </div>
        <?php endif ?>
        <div class="col-12">
            <div class="card mt-3">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <?= lang("Custom.product_name") ?>
                                </th>
                                <th>
                                    <?= lang("Custom.price_order") ?>
                                </th>
                                <th>
                                    <?= lang("Custom.quantity") ?>
                                </th>
                                <th>
                                    <?= lang("Custom.amount") ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data->details as $row) : ?>
                                <tr>
                                    <td>
                                        <div class="d-inline-block">
                                            <img class="img-responsive" src="http://simbaeshop.com<?= $row->image_url ?>" width="70" />
                                        </div>
                                        <div class="d-inline-block" style="vertical-align: top;">
                                            <a href="<?= base_url() ?>index/details/<?= $row->product_id ?>" class="text-dark fw-bold"><?= $row->product->{pick_language($row->product, 'name_')}  ?></a>
                                            <div><?= lang("Custom.code") ?>: <span class="fw-bold"><?= $row->code ?></span></div>
                                            <?php if (language_current() == "vi") : ?>
                                                <div><?= lang("Custom.dvt") ?>: <span class="fw-bold"><?= $row->volume_order ?></span></div>
                                            <?php else : ?>
                                                <div><?= lang("Custom.dvt") ?>: <span class="fw-bold"><?= $row->{pick_language($row, 'volume_order_')}  ?></span></div>
                                            <?php endif ?>
                                        </div>
                                    </td>
                                    <td>
                                        <?= number_format($row->unit_price * $row->special_unit, 0, ",", ".") ?>đ
                                    </td>
                                    <td>
                                        <?= number_format($row->quantity, 0, ",", ".") ?>
                                    </td>
                                    <td>
                                        <?= number_format($row->subtotal, 0, ",", ".") ?>đ
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3"><span><?= lang("Custom.total") ?></span></td>
                                <td><?= number_format($data->amount, 0, ",", ".") ?> ₫</td>
                            </tr>
                            <tr>
                                <td colspan="3"><span><?= lang("Custom.service_fee") ?></span></td>
                                <td><?= number_format($data->service_fee, 0, ",", ".") ?> ₫</td>
                            </tr>
                            <tr>
                                <td colspan="3"><span><?= lang("Custom.amount") ?></span></td>
                                <td><b class="big"><?= number_format($data->total_amount, 0, ",", ".") ?> ₫</b></td>
                            </tr>
                        </tfoot>
                    </table>
                    <?php if ($data->status == 1) : ?>
                        <div class="float-right">
                            <a href="<?= base_url("member/huy_don/$data->code") ?>" data-type='confirm' title='Bạn có muốn hủy đơn hàng này?' class="text-white btn btn-danger">
                                <?= lang("Custom.cancle_order") ?>
                            </a>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("button[name='edit_password']").click(function(e) {
                e.preventDefault();
                $.ajax({
                    url: path + "member/changepass",
                    data: $("#form-password").serialize(),
                    dataType: "JSON",
                    type: "POST",
                    success: function(data) {
                        alert(data.msg);
                        if (data.code == 400) {
                            location.reload();
                        }
                    }
                });
                return false;
            });
            $(document).off("click", "[data-type='confirm']").on("click", "[data-type='confirm']", function(e) {
                e.preventDefault();
                var title = $(this).attr("title");
                var href = $(this).attr("href");
                if (confirm(title) == true) {
                    if (href)
                        location.href = href;
                }
                return false;
            })
        })

        function activeMenu() {
            $(".acc_left ul").find("a").each(function(i) {
                var url = location.href.toLowerCase();
                if (this.href.toLowerCase() == url) {
                    $(this).removeClass("active");
                    $(this).addClass("active");
                }
            });
        }
        activeMenu();
    </script>


    <div class="clear"></div>
</div>
<style>
    .account {
        position: relative;
        padding: 10px 0;
    }

    .acc_left {}

    .acc_left img {
        float: left;
        width: 60px;
        border-radius: 300px;
        margin: -10px 10px 0 0;
    }

    .acc_left p {
        margin: 0;
        padding: 0;
    }

    .acc_info {
        font-size: 20px;
        padding: 10px 0;
    }

    .acc_left ul {
        padding: 15px 0;
        line-height: 28px;
    }

    .acc_left a {
        color: #222;
        display: block;
    }

    .acc_left a:hover,
    .acc_left a.active {
        color: #8c2b8d;
    }

    .acc_right {}

    .acc_top {
        padding: 20px 0 18px;
    }

    .acc_cnt {
        border: 2px solid #ddd;
        border-radius: 5px;
        padding: 10px 20px 30px;
    }

    .acc_cnt h3 {
        color: #ff0099;
        font-size: 20px;
        text-align: center;
        font-size: 22px;
        text-transform: uppercase;
        font-weight: 400;
    }

    .acc_cnt table {
        border: none;
    }

    .acc_cnt td {
        border: none;
        border-bottom: 1px solid #ddd;
        padding: 10px;
    }

    .acc_cnt tr.first td {
        background: #ddd;
    }

    .acc_cnt .txt_order_list {
        position: relative;
        margin: 0 0 20px;
    }

    .acc_cnt .txt_order_list div {
        width: 200px;
        margin-right: 10px;
    }

    .acc_cnt .txt_order_list input,
    .acc_cnt .txt_order_list select {
        width: 100%;
        border-radius: 5px;
        border: 1px solid #ddd;
        padding: 8px 10px 9px 30px;
        box-sizing: border-box;
    }

    .acc_cnt .txt_order_list i {
        position: absolute;
        left: 10px;
        top: 11px;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("script") ?>
<?= $this->endSection() ?>