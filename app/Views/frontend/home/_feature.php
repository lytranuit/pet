<div class="feature_sections py-2 py-md-5">
    <div class="container">
        <div class="row text-center an_box">
            <div class="col-md-3">
                <div class="new_box">
                    <div class="category_spot homepage">
                        <a href="<?= url_tag($dinh_duong) ?>" aria-label="Shopping " title="Shopping">
                            <div class="icon icon_diet"><span class="aria-only"></span></div>
                        </a>
                    </div>
                    <h2><?= $dinh_duong->{pick_language($dinh_duong)} ?></h2>
                    <p><?= $dinh_duong->{pick_language($dinh_duong, 'description_')} ?></p>
                    <a class="red_button wide" href="<?= url_tag($dinh_duong) ?>"><span class="text-white">Mời đọc</span></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="new_box">
                    <div class="category_spot homepage">
                        <a href="<?= url_tag($huan_luyen) ?>" aria-label="Training " title="">
                            <div class="icon icon_training"><span class="aria-only"></span></div>
                        </a>
                    </div>
                    <h2><?= $huan_luyen->{pick_language($huan_luyen)} ?></h2>
                    <p><?= $huan_luyen->{pick_language($huan_luyen, 'description_')} ?></p>
                    <a class="red_button wide" href="<?= url_tag($huan_luyen) ?>"><span class="text-white">Mời đọc</span></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="new_box">
                    <div class="category_spot homepage">
                        <a href="<?= url_tag($doi_song) ?>" aria-label="Living  " title="">
                            <div class="icon icon_grooming"><span class="aria-only"></span></div>
                        </a>
                    </div>
                    <h2><?= $doi_song->{pick_language($doi_song)} ?></h2>
                    <p><?= $doi_song->{pick_language($doi_song, 'description_')} ?></p>
                    <a class="red_button wide" href="<?= url_tag($doi_song) ?>"><span class="text-white">Mời đọc</span></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="new_box">
                    <div class="category_spot homepage">
                        <a href="<?= url_tag($hoi_dap) ?>" aria-label="FAQ" title="FAQ">
                            <div class="icon icon_ask"><span class="aria-only"></span></div>
                        </a>
                    </div>
                    <h2><?= $hoi_dap->{pick_language($hoi_dap)} ?></h2>
                    <p><?= $hoi_dap->{pick_language($hoi_dap, 'description_')} ?></p>
                    <a class="red_button wide" href="<?= url_tag($hoi_dap) ?>"><span class="text-white">Mời đọc</span></a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.an_box').slick({
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
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    <style type="text/css">
        .feature_sections {
            position: relative;
            z-index: 1;
        }

        .feature_sections p {
            font-family: roboto;
            font-size: 14px;
            font-weight: 500;
        }

        .category_spot.homepage {
            position: absolute;
            top: -75px;
            left: -11px;
        }

        .category_spot a {
            float: left;
            width: 260px;
        }



        .category_spot .icon.icon_diet {
            background-position: 0 -273px;
        }

        .category_spot .icon.icon_training {
            background-position: 0 -110px;
        }

        .category_spot .icon.icon_grooming {
            background-position: -163px -110px;
        }

        .category_spot .icon.icon_ask {
            background-position: -326px -110px;
        }

        .category_spot .icon {
            width: 164px;
            height: 164px;
            margin: 0 auto;
            background: url(<?= base_url("assets/images/matrix.png") ?>);
            -webkit-transition: margin 0.5s ease-out;
            -moz-transition: margin 0.5s ease-out;
            -o-transition: margin 0.5s ease-out;
        }

        .category_spot .icon:hover {
            margin-top: -10px;
        }

        .red_button {

            background: linear-gradient(to bottom, #e51f28 0%, #e51f28 100%);
            border: 1px solid #e51f28;
            border-bottom: 1px solid #e51f28;
            border-radius: 2px;
            color: #ffffff;
            display: inline-block;
            padding: 5px 50px 5px;
            text-decoration: none;
            border-radius: 30px;
        }


        .feature_sections .new_box {
            display: inline-block;
            width: 236px;
            height: 280px;
            background: url(/media/lib/bg-parchment.png) repeat #f4e9d6;
            border-bottom: 2px solid #e51f28;
            position: relative;
            border-top: 1px solid #e8e8e8;
            border-left: 1px solid #e8e8e8;
            border-right: 1px solid #e8e8e8;
            margin-bottom: 0px;
            border-radius: 10px;
            margin-top: 80px;
            list-style: none;
        }

        .feature_sections h2 {
            font-family: Roboto;
            font-weight: normal;
            color: #25221f;
            font-size: 20px;
            margin-top: 130px;
            margin-left: 0px;
            text-transform: uppercase;
            letter-spacing: 0px;
            text-align: center;
            margin-bottom: 0px;
        }
    </style>
    <!--default-->
    <div class="clear"></div>
</div>