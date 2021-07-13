<section id="banner">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-9">
                <div class="slide-box">
                    <?php foreach ($sliders as $row) : ?>
                        <div class="banner-item ">
                            <a target="_blank" href="<?= $row->url ?>" title="<?= $row->text ?>">
                                <img alt="<?= $row->text ?>" src="<?= base_url($row->image_url) ?>" class="img-responsive w-100">
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row g-1">
                    <div class="col-md-12 col-6">
                        <a target="_blank" href="<?= $banners[0]->url ?>" title="<?= $banners[0]->text ?>">
                            <img alt="<?= $banners[0]->text ?>" src="<?= base_url($banners[0]->image_url) ?>" class="img-responsive w-100">
                        </a>
                    </div>
                    <div class="col-md-12 col-6">
                        <a target="_blank" href="<?= $banners[1]->url ?>" title="<?= $banners[1]->text ?>">
                            <img alt="<?= $banners[1]->text ?>" src="<?= base_url($banners[1]->image_url) ?>" class="img-responsive w-100">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.slide-box').slick({
            dots: false,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            adaptiveHeight: true
        });
    </script>
</section>



<section class="mt-1">
    <div class="container">
        <div class="row g-1">
            <div class="category-box">
                <?php for ($i = 2; $i < count($banners); $i++) : ?>
                    <div class="col-3">
                        <a target="_blank" href="<?= $banners[$i]->url ?>" title="<?= $banners[$i]->text ?>">
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