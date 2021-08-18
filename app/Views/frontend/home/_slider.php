<section id="banner">
    <div class="container">
        <div class="row">
            <div class="">
                <div class="slide-box">
                    <?php foreach ($sliders as $row) : ?>
                        <div class="banner-item m-2">
                            <a target="_blank" href="<?= $row->url ?>" title="<?= $row->text ?>">
                                <img alt="<?= $row->text ?>" src="<?= base_url($row->image_url) ?>" class="img-responsive w-100">
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.slide-box').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            autoplay: false,
            adaptiveHeight: true,
            prevArrow: '<div class="slick-prev-1"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
            nextArrow: '<div class="slick-next-1"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',

        });
    </script>
</section>



<section class="mt-1">
    <div class="container">
        <div class="row">
            <div class="category-box">
                <?php for ($i = 0; $i < count($banners); $i++) : ?>
                    <div class="col-3 m-2">
                        <a class="d-inline-block w-100" target="_blank" href="<?= $banners[$i]->url ?>" title="<?= $banners[$i]->text ?>">
                            <img alt="<?= $banners[$i]->text ?>" src="<?= base_url($banners[$i]->image_url) ?>" class="img-responsive w-100">
                        </a>
                    </div>
                <?php endfor ?>

            </div>
        </div>
    </div>
    <script>
        $('.category-box').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
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
</section>