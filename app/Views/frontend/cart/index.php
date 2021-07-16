<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>
<section class="py-5 cart bg-gray-lighter">
    <div class="container">
        <div class="card d-none d-lg-block">
            <div class="card-body">
                <div class="row no-gutters">
                    <div class="col-lg-1">
                        <span><?= lang("Custom.product_name") ?></span>
                    </div>
                    <div class="col-lg-11 col-9">
                        <div class="row no-gutters">
                            <div class="col-lg-4">

                            </div>
                            <div class="col-lg-2 text-center">
                                <span><?= lang("Custom.dvt") ?></span>
                            </div>
                            <div class="col-lg-2 text-center">
                                <span><?= lang("Custom.quantity") ?></span>
                            </div>
                            <div class="col-lg-2 text-center">
                                <span><?= lang("Custom.amount") ?></span>
                            </div>
                            <div class="col-lg-2 text-center">
                                <span><?= lang("Custom.action") ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php foreach ($cart['details'] as $row) : ?>
            <div class="card mt-2 product" data-id="<?= $row->id ?>">
                <div class="card-body">
                    <div class="row no-gutters">
                        <div class="col-lg-1 col-3">
                            <img class="img-responsive" src="http://simbaeshop.com<?= $row->image_url ?>" />
                        </div>
                        <div class="col-lg-11 col-9">
                            <div class="row no-gutters">
                                <div class="col-lg-4">
                                    <a href="<?= base_url() ?>index/details/<?= $row->id ?>" class="text-dark font-weight-bold"><?= $row->{pick_language($row, 'name_')}  ?></a>
                                    <div><?= lang("Custom.code") ?>: <span class="font-weight-bold"><?= $row->code ?></span></div>
                                    <div><?= lang("Custom.qui_cach") ?>: <span class="font-weight-bold"><?= $row->{pick_language($row, 'volume_')}  ?></span></div>
                                </div>
                                <div class="col-lg-2 text-lg-center mt-3">

                                    <?php if (!empty($row->units)) : ?>
                                        <select class="unit_select" style="padding: 5px;">
                                            <?php foreach ($row->units as $unit) : ?>
                                                <option value="<?= $unit->id ?>" <?= ($unit->id == $row->unit_id) ? 'selected' : '' ?>>
                                                    <?= $unit->{pick_language($unit, 'name_')}  ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                    <?php endif ?>
                                </div>
                                <div class="col-lg-2 text-lg-center mt-3">
                                    <div style="max-width:100px;display: inline-block;">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-down" type="button">-</button>
                                            </div>
                                            <input type="text" class="form-control-custom text-center quantity" value="<?= $row->qty ?>">
                                            <div class="input-group-append">
                                                <button class="btn btn-up" type="button">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-6 text-lg-center mt-3">
                                    <b><?= number_format($row->amount, 0, ",", ".") ?>đ</b>
                                </div>
                                <div class="col-lg-2 col-6 text-lg-center text-right mt-3">
                                    <a href="#" class="text-danger remove_product"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="card mt-2">
                    <div class="order-cart-policy">
                        <ul class="content-block">
                            <li>
                                <span><i class="fa fa-bus"></i></span>
                                <p><?= lang("Custom.policy_delivery") ?></p>
                            </li>
                            <li>
                                <span><i class="fa fa-archive"></i></span>
                                <p><?= lang("Custom.policy_vat") ?></p>
                            </li>
                            <li>
                                <span><i class="fa fa-credit-card"></i></span>
                                <p><?= lang("Custom.policy_pay") ?></p>
                            </li>
                            <li>
                                <span><i class="fa fa-phone"></i></span>
                                <p><?= lang("Custom.policy_support") ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card cart-page-footer mt-2">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <b><?= lang("Custom.total") ?></b>
                                    </td>
                                    <td class="text-right">
                                        <?= number_format($cart['amount_product'], 0, ",", ".") ?>đ
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b><?= lang("Custom.amount") ?></b>
                                    </td>
                                    <td class="text-right">
                                        <b class="h5 text-danger"><?= number_format($cart['amount_product'], 0, ",", ".") ?>đ</b>
                                        <div><?= NumberToText($cart['amount_product']) ?></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center border-0">
                                        <a class="btn btn-red txt_center txt_u addCart" href="<?= base_url("cart/checkout") ?>">
                                            <span><?= lang("Custom.order_btn") ?></span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .form-control-custom {
        display: block;
        line-height: 14px;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #f4f4f4;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        position: relative;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        width: 1%;
        margin-bottom: 0;
    }

    .input-group-prepend {
        margin-right: -1px;
    }

    .input-group-prepend,
    .input-group-append {
        display: -ms-flexbox;
        display: flex;
        background-color: #80808045;
    }

    .btn-up,
    .btn-down {
        font-size: 20px;
        padding: 0px 10px;
        line-height: 1px;
    }


    .order-cart-policy .content-block {
        text-decoration: none;
        box-sizing: border-box;
        list-style: none;
        display: block;
        padding: 0;
        margin: 0;
    }

    ul.content-block li {
        display: flex;
        align-items: center;
        width: 100%;
        box-sizing: border-box;
        padding: 15px 15px 10px;
        border: 1px solid #dee2e6;
        border-top: none;
    }

    ul.content-block li:first-child {
        border-top: 1px solid #dee2e6;
    }

    ul.content-block li p {
        display: inline-block;
        font-size: 15px;
        font-weight: 600;
        margin-bottom: 0;
        margin-left: 10px;
        flex: 1;
    }

    ul.content-block li p>span.text-highlight {
        color: #e62a2b;
    }

    ul.content-block li>span {
        flex: 0 0 40px;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid #e62a2b;
        background-color: #e62a2b;
        border-radius: 100%;
        color: #fff;
        font-size: 20px;
    }
</style>
<?= $this->endSection() ?>


<?= $this->section("script") ?>
<?= $this->endSection() ?>