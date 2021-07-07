<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>
<section id="banner">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-9">
                <div class="slide-box">
                    <?php for ($i = 1; $i < 4; $i++) : ?>
                        <div class="banner-item ">
                            <a target="_blank" href="#" title="">
                                <img src="<?= base_url("assets/images/slider/$i.png") ?>" class="img-responsive w-100">
                            </a>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row g-1">
                    <div class="col-md-12 col-6">
                        <a>
                            <img src="<?= base_url("assets/images/banner/1.png") ?>" class="img-responsive w-100">
                        </a>

                    </div>
                    <div class="col-md-12 col-6">
                        <a>
                            <img src="<?= base_url("assets/images/banner/2.png") ?>" class="img-responsive w-100">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
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
        })
    </script>
</section>

<section class="mt-1">
    <div class="container">
        <div class="row g-1">
            <div class="category-box">
                <?php for ($i = 1; $i < 8; $i++) : ?>
                    <div class="col-3">
                        <a>
                            <img src="<?= base_url("assets/images/category/$i.png") ?>" class="img-responsive w-100">
                        </a>
                    </div>
                <?php endfor ?>

            </div>
        </div>
    </div>
    <style>
        .slick-next {
            width: 30px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
            color: #707070;
            top: 40%;
            transition: .3s;
            outline: none;
            opacity: .9;
            position: absolute;
            padding-left: 7px;
            border-radius: 100px 0 0 100px;
            right: 0;
            cursor: pointer;
        }

        .slick-prev {
            width: 30px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
            color: #707070;
            top: 40%;
            transition: .3s;
            outline: none;
            opacity: .9;
            position: absolute;
            padding-right: 7px;
            border-radius: 0 100px 100px 0;
            left: 0;
            z-index: 1;
            cursor: pointer;
        }
    </style>
    <script>
        $(document).ready(function() {
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
        })
    </script>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="home-product mb-5">
                <div class="tieude_giua">
                    <div><a href="san-pham-khuyen-mai.html"># Khuyến mãi HOT</a></div>
                </div>
                <div class="product-list-home">
                    <?php for ($i = 1; $i < 6; $i++) : ?>
                        <div class="p_container">
                            <a href="/sua-tam-goi-tropiclean-tri-ve-va-bo-chet-592ml-item4739.html" class="newp-img">
                                <img src="<?= base_url("assets/images/product/$i.jpg") ?>" alt=" Royal Canin Indoor 27 (túi 2kg) - Thức ăn cho mèo ">
                            </a>
                            <a href="/royal-canin-indoor-27-2kg.html" class="p-name"> Royal Canin Indoor 27 (túi 2kg) - Thức ăn cho mèo </a>
                            <div class="p-price">
                                425.000đ</div>
                            <a href="javascript:;" onclick="javascript:addToShoppingCart('pro','790',1,'425000')" class="btn-violet add home" data-src="/gio-hang?cmd=ajax" data-fancybox="ajax" data-type="ajax">CHỌN MUA</a>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
            <div class="home-product mb-5">
                <div class="tieude_giua">
                    <div><a href="san-pham-khuyen-mai.html"># Khuyến mãi HOT</a></div>
                </div>
                <div class="product-list-home">
                    <?php for ($i = 1; $i < 6; $i++) : ?>
                        <div class="p_container">
                            <a href="/sua-tam-goi-tropiclean-tri-ve-va-bo-chet-592ml-item4739.html" class="newp-img">
                                <img src="<?= base_url("assets/images/product/$i.jpg") ?>" alt=" Royal Canin Indoor 27 (túi 2kg) - Thức ăn cho mèo ">
                            </a>
                            <a href="/royal-canin-indoor-27-2kg.html" class="p-name"> Royal Canin Indoor 27 (túi 2kg) - Thức ăn cho mèo </a>
                            <div class="p-price">
                                425.000đ</div>
                            <a href="javascript:;" onclick="javascript:addToShoppingCart('pro','790',1,'425000')" class="btn-violet add home" data-src="/gio-hang?cmd=ajax" data-fancybox="ajax" data-type="ajax">CHỌN MUA</a>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
            <div class="home-product mb-5">
                <div class="tieude_giua">
                    <div><a href="san-pham-khuyen-mai.html"># Khuyến mãi HOT</a></div>
                </div>
                <div class="product-list-home">
                    <?php for ($i = 1; $i < 6; $i++) : ?>
                        <div class="p_container">
                            <a href="/sua-tam-goi-tropiclean-tri-ve-va-bo-chet-592ml-item4739.html" class="newp-img">
                                <img src="<?= base_url("assets/images/product/$i.jpg") ?>" alt=" Royal Canin Indoor 27 (túi 2kg) - Thức ăn cho mèo ">
                            </a>
                            <a href="/royal-canin-indoor-27-2kg.html" class="p-name"> Royal Canin Indoor 27 (túi 2kg) - Thức ăn cho mèo </a>
                            <div class="p-price">
                                425.000đ</div>
                            <a href="javascript:;" onclick="javascript:addToShoppingCart('pro','790',1,'425000')" class="btn-violet add home" data-src="/gio-hang?cmd=ajax" data-fancybox="ajax" data-type="ajax">CHỌN MUA</a>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
            <div class="home-product mb-5">
                <div class="tieude_giua">
                    <div><a href="san-pham-khuyen-mai.html"># Khuyến mãi HOT</a></div>
                </div>
                <div class="product-list-home">
                    <?php for ($i = 1; $i < 6; $i++) : ?>
                        <div class="p_container">
                            <a href="/sua-tam-goi-tropiclean-tri-ve-va-bo-chet-592ml-item4739.html" class="newp-img">
                                <img src="<?= base_url("assets/images/product/$i.jpg") ?>" alt=" Royal Canin Indoor 27 (túi 2kg) - Thức ăn cho mèo ">
                            </a>
                            <a href="/royal-canin-indoor-27-2kg.html" class="p-name"> Royal Canin Indoor 27 (túi 2kg) - Thức ăn cho mèo </a>
                            <div class="p-price">
                                425.000đ</div>
                            <a href="javascript:;" onclick="javascript:addToShoppingCart('pro','790',1,'425000')" class="btn-violet add home" data-src="/gio-hang?cmd=ajax" data-fancybox="ajax" data-type="ajax">CHỌN MUA</a>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </div>
    <style>
        div.tieude_giua {
            margin: 15px 0;
            position: relative;
            text-align: center;
        }

        div.tieude_giua div {
            font-size: 16px;
            text-transform: uppercase;
            text-align: center;
            font-family: Roboto-Regular;
            display: inline-block;
            background: #e50101;
            padding: 5px 20px;
            position: relative;
            border-radius: 5px;
        }

        div.tieude_giua div a {
            text-decoration: none;
            color: #fff
        }

        div.tieude_giua div::before {
            content: '';
            width: 52px;
            height: 46px;
            background: url(assets/images/red-tiile.png) top left no-repeat;
            margin: 0 auto;
            position: absolute;
            top: -15px;
            left: -20px;
            z-index: 99;
        }

        div.tieude_giua div::after {
            content: '';
            width: 45px;
            height: 63px;
            background: url(assets/images/icon-cho.png) top right no-repeat;
            margin: 0 auto;
            position: absolute;
            top: -11px;
            right: -25px;
            z-index: 99;
        }

        .tieude_giua ul {
            list-style: none;
            display: inline-block;
            list-style: none;
            display: inline-block;
            max-width: 80%;
            text-align: center;
        }

        div.tieude_giua ul li {
            display: inline-block;
            vertical-align: top;
        }

        div.tieude_giua ul li a {
            text-decoration: none;
            color: #696969;
            padding: 0px 15px;
            font-size: 14px;
            border-left: 1px solid #b3b3b3;
            font-weight: bold;
            position: relative;
        }

        div.tieude_giua ul li a:before {
            background: #fff;
            height: 3px;
            width: 100%;
            position: absolute;
            left: 0;
            bottom: -15px;
        }

        div.tieude_giua ul li a:hover {
            color: red;
        }

        div.tieude_giua ul li a:hover:before {
            content: '';
        }
    </style>
    <script>
        $(document).ready(function() {
            $('.product-list-home').slick({
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
<?= $this->endSection() ?>



<?= $this->section("script") ?>


<?= $this->endSection() ?>