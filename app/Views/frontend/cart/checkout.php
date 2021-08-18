<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>

<section class="py-5 cart bg-gray-lighter">

    <form id="contactForm" name="fast_checkout_form" action="<?= base_url("cart/complete") ?>" method="post" class="cm-processed-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="checkout-steps cm-save-fields clearfix" id="checkout_steps">
                        <div class="ty-step__container-active ty-step-one fast-checkout">
                            <div id="fast_checkout_body" class="ty-step__body-active babi-ty-step--body-active">
                                <div class="card">
                                    <div class="card-header">
                                        <?= lang("Custom.cart_info_title") ?>
                                    </div>
                                    <div class="card-body">
                                        <?php if (!logged_in()) : ?>
                                            <p class="layout-flex__item">
                                                <span aria-hidden="true"><?= lang("Custom.cart_anwser") ?> </span>
                                                <a href="<?= base_url("dang-nhap.html?next=" . current_url()) ?>" class="link">
                                                    <?= lang("Custom.login") ?>
                                                </a>
                                            </p>

                                            <div class="form-group">
                                                <b class="small fw-bold"><?= lang('Custom.cart_info_name') ?> :</b>
                                                <input type="text" name="name" value="<?= isset($user) ? $user->name : ''  ?>" required="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <b class="small fw-bold"><?= lang('Custom.login_email_label') ?> :</b>
                                                <input type="email" name="email" required="" value="<?= isset($user) ? $user->email : '' ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <b class="small fw-bold"><?= lang('Custom.login_phone_label') ?> :</b>
                                                <input type="text" name="phone" value="<?= isset($user) ? $user->phone : '' ?>" required="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <b class="small fw-bold"><?= lang('Custom.login_address_label') ?> :</b>
                                                <input type="text" name="address" value="<?= isset($user) ? $user->address : '' ?>" required="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <b class="small fw-bold"><?= lang('Custom.login_area_label') ?> :</b>
                                                <select class="" name="area_id">
                                                    <option value="0"><?= lang("Custom.other_area") ?> </option>
                                                    <?php foreach ($group_area as $row) : ?>
                                                        <option value="<?= $row['id'] ?> "><?= $row['name'] ?> </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        <?php else : ?>
                                            <?php if (!empty($address)) : ?>
                                                <div class="row">
                                                    <input type="hidden" name="address_id" value="" />
                                                    <?php foreach ($address as $key => $row) : ?>
                                                        <div class="col-12 mb-3">
                                                            <div class="border rounded p-3">
                                                                <p class="fw-bold"><?= $row->name ?> </p>
                                                                <table>
                                                                    <tr>
                                                                        <td class="pr-3"><?= lang('Custom.login_email_label') ?> :</td>
                                                                        <td><?= $row->email ?> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="pr-3"><?= lang('Custom.login_phone_label') ?> :</td>
                                                                        <td><?= $row->phone ?> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="pr-3"><?= lang('Custom.login_address_label') ?> :</td>
                                                                        <td><?= $row->address ?> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="pr-3"><?= lang('Custom.login_area_label') ?> :</td>
                                                                        <td><?= $row->area->name ?? lang('Custom.other_area') ?> </td>
                                                                    </tr>
                                                                </table>
                                                                <div>
                                                                    <a class="btn btn-danger text-white address txt_14" data-area="<?= $row->area_id ?> " data-id="<?= $row->id ?> " data-name="<?= $row->name ?> " data-phone="<?= $row->phone ?> " data-address="<?= $row->address ?> " data-email="<?= $row->email ?> ">
                                                                        <?= lang("Custom.no_selected") ?>
                                                                    </a>
                                                                    <a class="btn btn-light txt_14" href="<?= base_url() ?> index/remove_address/<?= $row->id ?> ">
                                                                        <?= lang("Custom.remove") ?>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach ?>
                                                </div>
                                            <?php endif ?>
                                            <p class="text-primary">
                                                <u style="cursor: pointer;" class="new_address"><?= lang("Custom.new_address") ?> </u>
                                            </p>
                                            <div class="<?= (!empty($address)) ? 'd-none' : '' ?> box_address mb-2">
                                                <div class="form-group">
                                                    <b class="small fw-bold"><?= lang('Custom.cart_info_name') ?> :</b>
                                                    <input type="text" name="name" value="<?= isset($user) ? $user->name : '' ?>" required="" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <b class="small fw-bold"><?= lang('Custom.login_email_label') ?> :</b>
                                                    <input type="email" name="email" required="" value="<?= isset($user) ? $user->email : '' ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <b class="small fw-bold"><?= lang('Custom.login_phone_label') ?> :</b>
                                                    <input type="text" name="phone" value="<?= isset($user) ? $user->phone : '' ?>" required="" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <b class="small fw-bold"><?= lang('Custom.login_address_label') ?> :</b>
                                                    <input type="text" name="address" value="<?= isset($user) ? $user->address : '' ?>" required="" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <b class="small fw-bold"><?= lang('Custom.login_area_label') ?> :</b>
                                                    <select class="" name="area_id">
                                                        <option value="0"><?= lang("Custom.other_area") ?> </option>
                                                        <?php foreach ($group_area as $row) : ?>
                                                            <option value="<?= $row['id'] ?> "><?= $row['name'] ?> </option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                        <?php endif ?>
                                        <hr>
                                        <div class="form-group">
                                            <b class="small fw-bold"><?= lang('Custom.cart_info_delivery') ?> :</b>
                                            <input type="date" name="delivery_date" value="<?= date('Y-m-d') ?>" min="<?= date('Y-m-d') ?>" class="form-control" require>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="flag_inv" class="" id="inv" value="1">
                                            <label class="form-check-label" for="inv"> <?= lang("Custom.inv_text") ?> </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="card my-3 box_inv d-none">
                                    <div class="card-header">
                                        <?= lang("Custom.inv_header") ?>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <b class="small fw-bold"><?= lang('Custom.inv_name') ?> :</b>
                                            <input type="text" name="inv_name" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <b class="small fw-bold"><?= lang('Custom.inv_tax_code') ?> :</b>
                                            <input type="text" name="inv_tax_code" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <b class="small fw-bold"><?= lang('Custom.inv_address') ?> :</b>
                                            <input type="text" name="inv_address" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="card my-3">
                                    <div class="card-header">
                                        <?= lang("Custom.cart_info_note") ?>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <textarea id="fast-checkout-notes" name="notes" class="form-control" rows="4" cols="72" placeholder="<?= lang('Custom.cart_info_note') ?> " title="<?= lang('Custom.cart_info_note') ?> "></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--checkout_steps-->
                    </div>
                    <!-- Inline script moved to the bottom of the page -->
                </div>
                <div class="col-md-6">
                    <div class="card bg-light">
                        <div class="card-header text-right"><a class="btn bg-red text-white btn-sm" href="<?= base_url("cart") ?>">Quay lại giỏ hàng</a></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <table class="product-table table table-borderless border-bottom">
                                        <?php foreach ($cart['details'] as $row) : ?>
                                            <tr class="product" data-id="<?= $row->id ?> ">
                                                <td class="product__image">
                                                    <div class="product-thumbnail">
                                                        <div class="product-thumbnail__wrapper">
                                                            <img class="img-responsive" src="http://simbaeshop.com<?= $row->image_url ?> " />
                                                        </div>
                                                        <span class="product-thumbnail__quantity" aria-hidden="true"><?= $row->qty ?> </span>
                                                    </div>

                                                </td>
                                                <td class="product__description">
                                                    <a href='<?= url_product($row) ?>' class="fw-bold text-dark"><?= $row->{pick_language($row, 'name_')}  ?> </a>
                                                    <div><?= lang("Custom.code") ?> : <span class="fw-bold"><?= $row->code ?> </span> </div>
                                                    <div><?= lang('Custom.qui_cach') ?> : <span class="fw-bold"><?= $row->{pick_language($row, 'volume_')}  ?> </span></div>
                                                </td>
                                                <td class="product__price">
                                                    <span class="order-summary__emphasis"><?= number_format($row->amount, 0, ",", ".") ?> đ</span>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </table>
                                </div>
                                <div class="col-12" id="ajax_total">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</section>
<style>
    .product-thumbnail {
        width: 4.6em;
        height: 4.6em;
        border-radius: 8px;
        background: #fff;
        position: relative
    }

    .product-thumbnail::after {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        border-radius: 8px;
        border: 1px rgba(0, 0, 0, 0.1) solid;
        z-index: 2
    }

    .product-thumbnail__wrapper {
        width: 100%;
        height: 100%;
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        z-index: 1
    }

    .product-thumbnail__image {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        max-width: 100%;
        max-height: 100%;
        margin: auto
    }

    .product-thumbnail__quantity {
        font-size: 0.85714em;
        font-weight: 500;
        line-height: 1.75em;
        white-space: nowrap;
        text-align: center;
        border-radius: 1.75em;
        background-color: rgba(114, 114, 114, 0.9);
        color: #fff;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        min-width: 1.75em;
        height: 1.75em;
        padding: 0 0.58333em;
        position: absolute;
        right: -0.75em;
        top: -0.75em;
        z-index: 3
    }

    .table-borderless td,
    .table-borderless th {
        border: none;
    }

    .form-control {
        display: block;
        width: 100%;
        padding: .375rem .75rem;
        font-size: 12px;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .product_remove {
        font-size: 10px;
        white-space: nowrap;
        text-align: center;
        border-radius: 1.75em;
        background-color: red;
        color: #fff;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        min-width: 1.75em;
        height: 1.75em;
        padding: 0 0.58333em;
        position: absolute;
        left: -0.75em;
        top: -0.75em;
        z-index: 3;
        cursor: pointer;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("script") ?>
<script>
    $(document).ready(function() {
        $("#inv").change(function() {
            $(".box_inv").toggleClass("d-none");
        })
        $(".new_address").click(function() {
            $(".box_address").removeClass("d-none");
            $(".address").addClass("btn-danger").removeClass("btn-success").text(no_selected);
            $("[name=address_id]").val(0);
        });
        $("[name=area_id]").change(async function() {
            let area_id = $(this).val();

            $.cookies.set('AREA_ID', area_id);
            $(".loading-modal").addClass("show");
            $("#cboxOverlay").show();
            let html = await $.ajax({
                url: path + "cart/total_order",
                dataType: "HTML"
            });
            $("#ajax_total").html(html);

            $(".loading-modal").removeClass("show");
            $("#cboxOverlay").hide();
        })
        $(".address").click(function() {
            $(".address").addClass("btn-danger").removeClass("btn-success").text(no_selected);
            $(this).addClass("btn-success").removeClass("btn-danger").text(selected);
            $(".box_address").addClass("d-none");
            let id = $(this).data("id");
            let name = $(this).data("name");
            let email = $(this).data("email");
            let phone = $(this).data("phone");
            let address = $(this).data("address");
            let area = $(this).data("area");
            $("[name=address_id]").val(id);
            $("[name=phone]").val(phone);
            $("[name=address]").val(address);
            $("[name=email]").val(email);
            $("[name=name]").val(name);
            $("[name=area_id]").val(area).trigger("change");
        });
        ///TRigger Click
        if ($(".address").length)
            $(".address").first().trigger("click");
        else
            $("[name=area_id]").trigger("change");

    })
</script>
<?= $this->endSection() ?>