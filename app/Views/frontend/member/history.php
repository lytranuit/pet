<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>
<div class="container wrap ">

    <div class="account row">


        <div class="acc_left col-md-3">

            <div class="acc_info txt_pink hr">
                <img class="fl" src="<?= base_url("assets/images/default-avatar.jpg") ?>">
                <p><?= $user->username ?></p>
                <div class="clear"></div>
            </div>

            <ul class="ul txt_b">
                <li><a href="<?= base_url("member") ?>"><?= lang("Custom.Custom.info") ?></a></li>
                <li><a href="<?= base_url("member/history") ?>"><?= lang("Custom.Custom.history_order") ?></a></li>
                <li><a href="<?= route_to("logout") ?>"><?= lang("Custom.Custom.logout") ?></a></li>
            </ul>

        </div>

        <div class="acc_right col-md-9">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <?= lang("Custom.code_order") ?>
                        </th>
                        <th>
                            <?= lang("Custom.date_order") ?>
                        </th>
                        <th>
                            <?= lang("Custom.amount_order") ?>
                        </th>
                        <th>
                            <?= lang("Custom.status_order") ?>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($data)) : ?>
                        <?php foreach ($data as $row) : ?>
                            <tr>
                                <td>
                                    <a href="<?= base_url("member/order_detail/$row->code") ?>"><?= $row->code ?></a>
                                </td>
                                <td>
                                    <?= date("d/m/Y", strtotime($row->order_date)) ?>
                                </td>
                                <td>
                                    <?= number_format($row->total_amount, 0, ",", ".") ?> đ
                                </td>
                                <td>
                                    <?= lang("Custom.status_" . $row->status) ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php endif ?>
                </tbody>
            </table>

        </div>
    </div>

    <script>
        $(document).ready(function() {
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
        });
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