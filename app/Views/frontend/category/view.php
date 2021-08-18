<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>

<div class="container mt-2">
    <div class="row">

        <div class="col-md-9">
            <div class="prouductView">
                <div class="slider sLeft" id="slider-product-list" style="width:100%;height:auto">
                    <div class="bx-wrapper" style="max-width: 100%;">
                        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative;">
                            <ul class="ul bxslider" style="width: 215%; position: relative;">

                            </ul>
                        </div>
                        <div class="bx-controls bx-has-pager">
                            <div class="bx-pager"></div>
                        </div>
                    </div>
                </div>

                <div id="breadcrumb">
                    <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="/" itemprop="url" class="nopad-l">
                            <span itemprop="title"><?= lang("Custom.home") ?></span>
                        </a> /
                    </div>

                    <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="#" itemprop="url">
                            <span itemprop="title"><?= $category->{pick_language($category)} ?></span>
                        </a> <i class="fa fa-caret-down"></i>


                    </div>
                </div>
                <!--danh muc cap 2-->
                <div class="plView">

                    <div class="type-3">

                    </div>

                    <div class="lsort">

                        <select onchange="window.location='?sort='+this.value">
                            <option value="" <?= $sort == "" ? 'selected' : '' ?>>Sắp xếp theo</option>
                            <option value="price-asc" <?= $sort == "price-asc" ? 'selected' : '' ?>>Giá tăng dần</option>
                            <option value="price-desc" <?= $sort == "price-desc" ? 'selected' : '' ?>>Giá giảm dần</option>
                        </select>

                    </div>
                </div>
                <!--//-->

                <div class="product-list row g-0">
                    <?php foreach ($products as $product) : ?>
                        <div class="col-md-3 col-6 border-product">
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
                                                        <input type="hidden" value="1" class="number" />
                                                    </div>
                                                </td>

                                                <td class="dropdown" style="vertical-align: middle;">
                                                    /
                                                    <span class="dropdown-toggle dvt" id="dropdownMenuButton<?= $category->id . $product->id ?>" data-bs-toggle="dropdown">
                                                        <?= $product->units[0]->{pick_language($product->units[0])} ?>
                                                    </span>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton<?= $category->id . $product->id ?>">
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
                <!--//-->



                <!--kiem tra cap danh muc-->
                <div class="clear"></div>

                <div class="paging text-center">
                    <?php $pager = \Config\Services::pager(); ?>
                    <?php if ($pager) : ?>
                        <?php $pagi_path = str_replace(base_url(), "", url_category($category)) ?>
                        <?php $pager->setPath($pagi_path); ?>
                        <?= $pager->links(); ?>
                    <?php endif; ?>
                </div>
                <!--paging-->

                <div class="clear"></div>


            </div>
        </div>
        <div class="col-md-3">
            <?php if (!empty($child)) : ?>
                <div class="box-filter-left">
                    <div class="cat-left">
                        <div class="title-cat-left txt_violet"><?= $category->{pick_language($category)} ?><i class="fa fa-caret-down txt_000"></i></div>
                        <div class="sub-cat-left">
                            <?php foreach ($child as $row) : ?>
                                <a href="<?= $url_category($row) ?>"><?= $row->{pick_language($row)} ?></a>
                            <?php endforeach ?>
                        </div>

                    </div>
                    <!--cat-left-->
                </div>
                <!--box-filter-left-->
                <div class="line"></div>
            <?php endif ?>
            <div class="clear"></div>
            <div class="pro_left">

                <?= view_cell("\App\Libraries\SideBarWidget::hot_news") ?>
            </div>

        </div>
        <div class="col-md-12">
            <?= $category->{pick_language($category, "content_")} ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section("script") ?>
<?= $this->endSection() ?>