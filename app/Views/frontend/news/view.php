<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>

<div class="breadcrumb_nobackground mt-2">
    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 a-left">
                    <ul id="breadcrumb" class="breadcrumb">
                        <li><a href="<?= base_url() ?>">Trang chủ</a><span class="mr_lr"> > </span></li>
                        <li><a href="<?= url_news_list(0); ?>">Tin tức</a><span class="mr_lr"> > </span></li>
                        <li class="active"><strong><span><?= $info->{pick_language($info, "title_")} ?></span></strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="container">
    <div class="row">
        <section class="right-content col-md-12 col-sm-12 col-xs-12">
            <article class="article-main content_all">
                <div class="row">
                    <div class="col-md-8">
                        <div class="article-details">
                            <h1 class="title-article-detail" style="margin: 0;color: #4c4c4c;font-size: 16px;margin-bottom: 10px;font-weight:bold;"><?= $info->{pick_language($info, "title_")} ?></h1>
                            <div class="date"><i class="fas fa-clock"></i>
                                <div class="info-article-detail">
                                    <?= date("Y-m-d H:i:s", strtotime($info->date)) ?>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <!-- END TIN TỨC KHÁC -->
                            <div class="article-content">
                                <div class="rte">
                                    <?= $info->{pick_language($info, "content_")} ?>
                                </div>
                            </div>
                        </div>
                        <div id="other_news">
                            <div class="title">
                                <h2 class="h-title"><?= lang("Custom.news_lien_quan") ?></h2>
                            </div>
                            <ul class="ul news_lq">
                                <?php foreach ($news as $row) : ?>
                                    <li class="hover-4">
                                        <a href="<?= url_news($row) ?>">
                                            <img src="<?= $row->image_url ?>" alt="<?= $row->{pick_language($row, 'title_')} ?>">
                                            <span><?= $row->{pick_language($row, 'title_')} ?></span>
                                        </a>
                                        <!--0-->
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-4 d-none d-lg-block">

                        <?= view_cell("\App\Libraries\SideBarWidget::product") ?>
                    </div>
                </div>
            </article>

        </section>
    </div>
</div>
<?= $this->endSection() ?>



<?= $this->section("style") ?>

<link rel="stylesheet" href="<?= base_url("assets/css/news_style.css") ?>" />
<?= $this->endSection() ?>
<?= $this->section("script") ?>
<script>
    $('.news_lq').slick({
        dots: false,
        infinite: false,
        speed: 300,
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
</script>

<?= $this->endSection() ?>