<div class="clear">
    <div class="container">
        <div class="row">
            <?php foreach ($tags as $tag) : ?>

                <?php if ($tag->count > 0) : ?>
                    <div class="">
                        <div class="clear">
                            <h4 class="home-title ocean"><a href="<?= url_tag($tag) ?>"><span class="text-white"><?= $tag->{pick_language($tag)} ?></span></a></h4>
                        </div>
                        <section id="row_ar7" class="ajax-home">
                            <article class="news-box">
                                <?php foreach ($tag->news as $news) : ?>
                                    <div class=" pull-left p-2">
                                        <div class="img hover-2">
                                            <a href="<?= url_news($news) ?>">
                                                <img class="img-responsive" src="<?= $news->image_url ?>" alt="<?= $news->{pick_language($news, 'title_')} ?>">
                                            </a>
                                        </div>
                                        <a href="<?= url_news($news) ?>" class="txt_000 txt_u space10px block">
                                            <?= $news->{pick_language($news, 'title_')} ?>
                                        </a>
                                        <p>
                                            <?= split_string($news->{pick_language($news, 'content_')}, 100) ?>
                                        </p>
                                    </div>
                                <?php endforeach ?>

                            </article>
                        </section>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
    <script>
        $('.news-box').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
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
</div>