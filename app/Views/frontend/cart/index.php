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
                        <div class="col-lg-1 col-3 text-center">
                            <img class="img-responsive" src="http://simbaeshop.com<?= $row->image_url ?>" style="max-height: 100px;" />
                        </div>
                        <div class="col-lg-11 col-9">
                            <div class="row no-gutters">
                                <div class="col-lg-4">
                                    <a href="<?= url_product($row) ?>" class="text-dark fw-bold"><?= $row->{pick_language($row, 'name_')}  ?></a>
                                    <div><?= lang("Custom.code") ?>: <span class="fw-bold"><?= $row->code ?></span></div>
                                    <div><?= lang("Custom.qui_cach") ?>: <span class="fw-bold"><?= $row->{pick_language($row, 'volume_')}  ?></span></div>
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
                                        <a class="btn btn-red txt_center txt_u addCart" href="<?= base_url() ?>">
                                            <span class="text-white">Mua tiếp</span>
                                        </a>
                                        <a class="btn btn-red txt_center txt_u addCart" href="<?= base_url("cart/checkout") ?>">
                                            <span class="text-white"><?= lang("Custom.order_btn") ?></span>
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

</style>
<?= $this->endSection() ?>


<?= $this->section("script") ?>
<?= $this->endSection() ?>