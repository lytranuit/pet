<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>
<div class="container">


    <!--breadcrumb-->
    <div class="row">
        <div id="breadcrumb" class="col-md-12">
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="/" itemprop="url" class="nopad-l">
                    <span itemprop="title"><?= lang("Custom.home") ?></span>
                </a> /
            </div>

            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="#" itemprop="url">
                    <span itemprop="title"><?= $info->{pick_language($info)} ?></span>
                </a> <i class="fa fa-caret-down"></i>


            </div>
        </div>
        <div class="col-md-6">

            <section id="content" class="">
                <div id="img-detail" class="row">
                    <ul id="img-thumbs" class="slider-nav-view ul productThumb col-md-2">
                        <li>
                            <a class="img_thumb mz-thumb" title="<?= $info->{pick_language($info)} ?>">
                                <img src="https://simbaeshop.com/<?= $info->image_url ?>" alt="<?= $info->{pick_language($info)} ?>">
                            </a>
                        </li>
                        <?php if (!empty($info->image_other)) : ?>
                            <?php foreach ($info->image_other as $row) : ?>
                                <li>
                                    <a class="img_thumb mz-thumb" title="<?= $info->{pick_language($info)} ?>" rel="zoom-id:Zoomer;">
                                        <img src="<?= base_url($row->image_url) ?>" alt="<?= $info->{pick_language($info)} ?>">
                                    </a>
                                </li>
                            <?php endforeach ?>
                        <?php endif ?>
                    </ul>

                    <div id="img-large" class="slider-for-view col-md-10">
                        <a class="fancybox" data-fancybox="group2" id="Zoomer" href="https://simbaeshop.com/<?= $info->image_url ?>">
                            <figure class="mz-figure mz-hover-zoom mz-ready">
                                <img style="max-height:500px;" src="https://simbaeshop.com/<?= $info->image_url ?>" title="<?= $info->{pick_language($info)} ?>" alt="<?= $info->{pick_language($info)} ?>">
                            </figure>
                        </a>
                        <?php if (!empty($info->image_other)) : ?>
                            <?php foreach ($info->image_other as $row) : ?>
                                <a class="fancybox" data-fancybox="group2" id="Zoomer" href="<?= base_url($row->image_url) ?>">
                                    <figure class="mz-figure mz-hover-zoom mz-ready">
                                        <img style="max-height:500px;" src="<?= base_url($row->image_url) ?>" title="<?= $info->{pick_language($info)} ?>" alt="<?= $info->{pick_language($info)} ?>">
                                    </figure>
                                </a>
                            <?php endforeach ?>
                        <?php endif ?>
                    </div>
                </div>
                <!--img-detail-->
            </section>

            <div class="clear space10px"></div>
        </div>
        <!--pDetail-->
        <div class="col-md-6" style="">
            <div id="overview" class="product" data-id="<?= $info->id ?>">
                <h1 id="detail-name" class="txt_20 fw-bold"><?= $info->{pick_language($info)} ?></h1>

                <div class="row">

                    <div class="col-md-6 pull-left">
                        <p> <?= lang("Custom.code") ?>: <span class=""><?= $info->code ?></span></p>
                    </div>
                </div>
                <!--//-->
                <div class="clear hr my-3"></div>
                <div>
                    <?php if (!empty($info->units)) : ?>
                        <div>
                            <span class="txt_red txt_30  p-price" id="price_config"><?= number_format($info->units[0]->price, 0, ",", ".") ?>đ</span>
                            <span class="price-prev txt_20">
                                <?php if (isset($info->units[0]->prev_price) && $info->units[0]->prev_price > 0) : ?>
                                    <?= number_format($info->units[0]->prev_price, 0, ",", ".") ?>đ
                                <?php endif ?>
                            </span>
                        </div>
                        <div class="">
                            <span class="text-uppercase"><?= lang("Custom.dvt") ?>:</span>
                            <div class="unit_list">
                                <?php foreach ($info->units as $key => $unit) : ?>
                                    <button class="mr-2 btn-sm btn unit_product <?= $key == 0 ? "btn-primary active" : "" ?>" data-id="<?= $unit->id ?>" data-price="<?= $unit->price ?>" data-prev_price="<?= isset($unit->prev_price) && $unit->prev_price > 0 ? $unit->prev_price : '' ?>">
                                        <?= $unit->{pick_language($unit)} ?>
                                    </button>
                                <?php endforeach ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <span class="txt_red txt_30  p-price" id="price_config"><?= number_format($info->price, 0, ",", ".") ?>đ</span>
                    <?php endif ?>
                </div>
                <div class="mt-3">
                    <div class="stepper-type-1 d-inline-block me-3">
                        <div class="stepper number-widget">
                            <input class="form-control form-control-sm stepper-input number text-center" type="text" data-zeros="true" value="1" min="1" max="20" readonly="">
                            <span class="stepper-arrow up">
                            </span>
                            <span class="stepper-arrow down">
                            </span>
                        </div>
                    </div>
                    <a href="#" class="btn-violet mr-2 add-cart add home">
                        <?= lang("Custom.add_to_cart") ?>
                    </a>
                </div>
            </div>
            <!--//-->
            <div class="clear space10px"></div>

            <div class="mt-3">
                <?php if ($info->{pick_language($info, "volume_")} != "") : ?>
                    <div>
                        - <?= lang('Custom.qui_cach') ?>: <?= $info->{pick_language($info, 'volume_')}  ?>
                    </div>
                <?php endif ?>
                <?php if (isset($info->origin) && !empty($info->origin)) : ?>
                    <div>
                        - <?= lang('Custom.xuat_xu') ?>: <?= $info->origin->{pick_language($info->origin, 'name_')}  ?>
                    </div>
                <?php endif ?>
                <?php if (isset($info->preservation) && !empty($info->preservation)) : ?>
                    <div>
                        - <?= lang('Custom.bao_quan') ?>: <?= $info->preservation->{pick_language($info->preservation, 'name_')}  ?>
                    </div>
                <?php endif ?>
            </div>

            <!--//-->
            <div class="clear space10px"></div>
        </div>

        <div class="col-md-8">
            <div id="tab-pro-info">
                <div class="title-tab-pro tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><?= lang("Custom.details_mo_ta") ?></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><?= lang("Custom.details_huong_dan") ?></button>
                        </li>
                    </ul>

                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane py-2 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><?= $info->{pick_language($info, 'detail_')} ?></div>
                    <div class="tab-pane py-2 fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> <?= $info->{pick_language($info, 'guide_')} ?></div>
                </div>
            </div>

            <div class="clear space10px"></div>
        </div>

        <div class="col-md-4 detail-right">

            <div class="clear"></div>
            <div class="bestView">
                <p class="txt_blue new-title title-product-list"><?= lang("Custom.details_sp_lien_quan") ?></p>
                <div class="row border-start g-0">
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
                <!--product-list-->

            </div>
            <!--bestView-->
            <div class="clear"></div>

        </div>
    </div>
    <!--overview-->


    <div class="clear space10px"></div>

</div>
<?= $this->endSection() ?>




<?= $this->section("style") ?>

<?= $this->endSection() ?>
<?= $this->section("script") ?>
<script>
    $('.slider-for-view').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        swipe: false,
        fade: true,
        adaptiveHeight: true,
        asNavFor: '.slider-nav-view'
    });
    $('.slider-nav-view').slick({
        infinite: true,
        slidesToShow: 3,
        arrows: false,
        slidesToScroll: 1,
        swipe: false,
        asNavFor: '.slider-for-view',
        dots: false,
        focusOnSelect: true,
        vertical: true,
        responsive: [{
                breakpoint: 600,
                settings: {
                    vertical: false
                }
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>
<?= $this->endSection() ?>