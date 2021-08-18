<section>
    <div class="container">
        <div class="row">
            <div class="km-product py-2 py-md-5">
                <div class="tieude_petfood">
                    <a href="<?= route_to("promotion") ?>"><?= lang("Custom.khuyen_mai") ?></a>
                </div>
                <div class="product-list-km">
                    <?php foreach ($info->products as $product) : ?>
                        <div class="p_container product text-center" data-id="<?= $product->id ?>">
                            <a href="<?= url_product($product) ?>" class="newp-img">
                                <img src="https://simbaeshop.com<?= $product->image_url ?>" alt="<?= $product->{pick_language($product)} ?>">
                            </a>

                            <a href="<?= url_product($product) ?>" class="p-code text-dark fw-bold"><?= $product->code ?></a>
                            <a href="<?= url_product($product) ?>" class="p-name"><?= $product->{pick_language($product)} ?></a>
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
                                                <span class="dropdown-toggle dvt" id="dropdownMenuButtonkm<?= $product->id ?>" data-bs-toggle="dropdown">
                                                    <?= $product->units[0]->{pick_language($product->units[0])} ?>
                                                </span>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonkm<?= $product->id ?>">
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
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    <style>


    </style>
    <script>
        $(document).ready(function() {
            $('.product-list-km').slick({
                dots: false,
                infinite: false,
                slidesToShow: 5,
                slidesToScroll: 5,
                adaptiveHeight: true,
                arrows: true,
                prevArrow: '<div class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
                nextArrow: '<div class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

        })
    </script>
</section>