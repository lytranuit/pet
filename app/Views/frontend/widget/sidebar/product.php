<div class="text-center">
    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FFoodzoneofSimba%2F&tabs=timeline&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=724049858115617" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
</div>

<div class="h-product-list-right">
    <div class="row">
        <?php foreach ($products as $product) : ?>
            <div class="col-6 border-product">
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