<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>

<div class="container mt-2">
    <div class="row">

        <div class="col-md-8">
            <div class="">
                <div class="slider sLeft" id="slider-news-list" style="width:100%;height:auto">
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
                            <span itemprop="title"><?= $tag->{pick_language($tag)} ?></span>
                        </a> <i class="fa fa-caret-down"></i>


                    </div>
                </div>
                <!--danh muc cap 2-->
                <div class="plView">

                    <div class="type-3">

                    </div>

                    <div class="lsort">



                    </div>
                </div>
                <!--//-->
                <div class="h-list-news">
                    <ul class="ul">
                        <?php foreach ($news as $row) : ?>
                            <li>
                                <a href="<?= url_news($row) ?>" class="img">
                                    <img src="<?= base_url($row->image_url) ?>" alt="<?= $row->{pick_language($row, "title_")} ?>">
                                </a>
                                <div class="right-side">
                                    <a href="/cach-lam-thuc-an-cho-meo-don-gian-du-dinh-duong-tai-nha.html" class="name"><?= $row->{pick_language($row, "title_")} ?></a>
                                    <span class="time"> <?= date("Y-m-d H:i:s", strtotime($row->date)) ?></span>
                                    <span class="summary"><?= split_string($row->{pick_language($row, "content_")}, 500) ?></span>
                                </div>
                            </li>

                        <?php endforeach ?>

                    </ul>
                    <div class="clear"></div>
                </div>


                <!--kiem tra cap danh muc-->
                <div class="clear"></div>

                <div class="paging text-center">
                    <?php $pager = \Config\Services::pager(); ?>
                    <?php if ($pager) : ?>
                        <?php $pagi_path = str_replace(base_url(), "", url_tag($tag)) ?>
                        <?php $pager->setPath($pagi_path); ?>
                        <?= $pager->links(); ?>
                    <?php endif; ?>
                </div>
                <!--paging-->

                <div class="clear"></div>


            </div>
        </div>
        <div class="col-md-4">
            <?= view_cell("\App\Libraries\SideBarWidget::product") ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section("style") ?>

<link rel="stylesheet" href="<?= base_url("assets/css/news_style.css") ?>" />
<?= $this->endSection() ?>
<?= $this->section("script") ?>
<?= $this->endSection() ?>