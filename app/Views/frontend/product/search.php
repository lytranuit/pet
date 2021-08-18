<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>
<div class="container" wfd-id="74">
    <div class="row" wfd-id="75">
        <div class="bg_collection collection_2" wfd-id="76">

            <div class="main_container col-lg-12 padding-col-left-0" wfd-id="77">
                <div class="box-heading relative heading" wfd-id="243">
                    <h2 style="font-size:33px;" class="text-center txt_violet space10px hr">Tìm kiếm : <b><?= $search ?></b></h2>
                </div>
                <div class="collection product-list">
                    <div class="row g-0">
                        <?php foreach ($products as $product) : ?>
                            <div class="col-md-2 col-6 border-product">
                                <div class="p_container product text-center" data-id="<?= $product->id ?>">
                                    <a href="<?= url_product($product) ?>" class="newp-img">
                                        <img src="https://simbaeshop.com<?= $product->image_url ?>" alt="<?= $product->{pick_language($product)} ?>">
                                    </a>

                                    <a href="<?= url_product($product) ?>" class="p-code text-dark fw-bold"><?= $product->code ?> </a>
                                    <a href="<?= url_product($product) ?>" class="p-name"><?= $product->{pick_language($product)} ?> </a>
                                    <div class="d-inline-block" style="min-width: 130px;">
                                        <table class="m-2">
                                            <tr>
                                                <?php if (!empty($product->units)) : ?>
                                                    <td style="vertical-align: middle;">
                                                        <div class="p-price"><?= number_format($product->units[0]->price, 0, ",", ".") ?>đ</div>
                                                        <div class="price-prev">
                                                            <?php if (isset($product->units[0]->prev_price) && $product->units[0]->prev_price > 0) : ?>
                                                                <?= number_format($product->units[0]->prev_price, 0, ",", ".") ?>đ
                                                            <?php endif ?>
                                                        </div>
                                                        <input type="hidden" value="1" class="number" />
                                                    </td>

                                                    <td class="dropdown" style="vertical-align: middle;">
                                                        /
                                                        <span class="dropdown-toggle dvt" id="dropdownMenuButtonsb<?= $product->id ?>" data-bs-toggle="dropdown">
                                                            <?= $product->units[0]->{pick_language($product->units[0])} ?>
                                                        </span>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonsb<?= $product->id ?>">
                                                            <?php foreach ($product->units as $key => $unit) : ?>
                                                                <a class="dropdown-item unit_product <?= $key == 0 ? "active" : "" ?>" data-id="<?= $unit->id ?>" data-price="<?= $unit->price ?>" data-prev_price="<?= isset($unit->prev_price) && $unit->prev_price > 0 ? $unit->prev_price : '' ?>"><?= $unit->{pick_language($unit)} ?></a>
                                                            <?php endforeach ?>
                                                        </div>
                                                    </td>

                                                <?php else : ?>
                                                    <span class="p-price"><?= number_format($product->price, 0, ",", ".") ?>đ</span>
                                                <?php endif ?>
                                            </tr>
                                        </table>
                                    </div>
                                    <a href="javascript:;" class="btn-violet add home add-cart"><?= lang("Custom.add_to_cart") ?></a>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="paging text-center" wfd-id="80">
                    <?= $pager->links() ?>
                </div>

                </section>

            </div>
        </div>

    </div>
</div>
</div>
<?= $this->endSection() ?>

<?= $this->section("style") ?>

<link rel="stylesheet" href="<?= base_url("assets/css/news_style.css") ?>" />
<?= $this->endSection() ?>
<?= $this->section("script") ?>
<?= $this->endSection() ?>