<div class="d-none d-lg-block">
    <div id="top">
        <div id="new-menu-top">
            <div class="container">
                <div class="left">
                    <div class="location"><i class="fa fa-map-marker text-red text-20"></i>
                        <a href="">
                            <b id="cLoc">
                                <?php if (area_current() == "B") : ?>
                                    <?= lang("Custom.area_B") ?>
                                <?php elseif (area_current() == "T") : ?>
                                    <?= lang("Custom.area_T") ?>
                                <?php else : ?>
                                    <?= lang("Custom.area_N") ?>
                                <?php endif ?>
                            </b>
                            <i class="icon-drop"></i>
                        </a>
                        <ul>
                            <li><a href="<?= base_url("home/set_area/N") ?>"><?= lang("Custom.area_N") ?></a></li>
                            <li><a href="<?= base_url("home/set_area/T") ?>"><?= lang("Custom.area_T") ?></a></li>
                            <li><a href="<?= base_url("home/set_area/B") ?>"><?= lang("Custom.area_B") ?></a></li>
                        </ul>
                    </div>
                </div>

                <div id="login-top" class="txt_b">
                    <i class="fa fa-user text-18"></i>
                    <?php if (logged_in()) : ?>
                        <div class="dropdown d-inline-block">
                            <a class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><?= user()->username ?></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item text-dark" href="<?= route_to("info") ?>"><?= lang("Custom.info") ?></a>
                                <a class="dropdown-item text-dark" href="<?= route_to("history") ?>"><?= lang("Custom.history_order") ?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item logout text-dark" href="<?= route_to("logout") ?>"><?= lang("Custom.logout") ?></a>
                            </div>
                        </div>
                    <?php else : ?>
                        <a href="<?= base_url("dang-nhap.html") ?>" rel="nofollow" href=""><?= lang("Custom.login") ?></a>
                    <?php endif ?>
                </div>
                <div id="language">
                    <a href="<?= base_url("lang/vi") ?>">VN <i class="icon-deli icon-vn"></i></a>
                    <a href="<?= base_url("lang/en") ?>">EN <i class="icon-deli icon-en"></i></a>
                    <a href="<?= base_url("lang/jp") ?>">JP <i class="icon-deli icon-jp"></i></a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="row">
                <a href="/" id="logo" class="col-3">
                    <h1 class="format inline-block"><img src="<?= base_url("assets/images/logo.png") ?>" alt=""></h1>
                </a>
                <div id="search" class="col-5">
                    <form method="get" name="searchForm" action="/tim" enctype="multipart/form-data">
                        <input type="text" class="text-search" name="q" id="text_search" autocomplete="off" placeholder="<?= lang("Custom.search_text") ?>">
                        <button id="submit-search"><i class="fa fa-search"></i></button>
                    </form>
                    <div id="suggestions" class="autocomplete-suggestions"></div>
                </div>
                <div class="new-user-box col-2">
                    <a class="box-icon" href="<?= route_to("history") ?>">
                        <img src="<?= base_url("assets/images/icon-new-user-petcity.png") ?>" alt="Icon kiem tra don hang">
                        <span><?= lang("Custom.history_order") ?></span>
                    </a>
                </div>
                <div class="cart-box col-1">
                    <a id="cart-header" href="<?= route_to("cart") ?>" class="newicon iconnew-cart" rel="nofollow">
                        <b id="count_shopping_cart_store">0</b>
                    </a>
                </div>
                <div class="icon_hotline col-1">
                    <a href="tel:028 7770 4567"><img src="<?= base_url("assets/images/hotline.png") ?>" alt="hotline" class="img"></a>
                </div>
            </div>

        </div>
    </header>
    <nav id="nav-hori" class="transition default ">
        <div class="container">

            <div class="navone">

                <p class="lbl"><?= lang("Custom.danh_muc") ?> <i class="fa fa-caret-down text-18"></i></p>
                <ul class="ul primary">
                    <?php foreach ($list_menu as $row) : ?>
                        <li class="is-pro">
                            <?php if ($row->type == 1) : ?>
                                <a href="<?= $row->link ?>"><span class="span-root"><?= $row->{pick_language($row, 'name_')}  ?><?= (!empty($row->child)) ? '<i class="fa fa-angle-down"></i>' : '' ?></span></a>
                            <?php elseif ($row->type == 6) : ?>
                                <a href="<?= base_url() ?>index/khuyen_mai"><span class="span-root"><?= $row->{pick_language($row, 'name_')}  ?> <i class="fa fa-star text-red" style="color:#f4b514;"></i><?= (!empty($row->child)) ? '<i class="fa fa-angle-down"></i>' : '' ?></span></a>
                            <?php endif ?>
                            <?php if (!empty($row->child)) : ?>
                                <div class="level2">
                                    <?php foreach ($row->child as $row2) : ?>
                                        <div class="box-sub-nav">
                                            <?php if ($row2->type == 1) : ?>
                                                <a class='cat1' href="<?= $row->link ?>"><?= $row2->{pick_language($row2, 'name_')}  ?></a>
                                            <?php elseif ($row2->type == 6) : ?>
                                                <a class='cat1' href="<?= base_url() ?>index/khuyen_mai"><?= $row->{pick_language($row, 'name_')}  ?> <i class="fa fa-star text-red" style="color:#f4b514;"></i></a>
                                            <?php endif ?>
                                            <?php if (!empty($row2->child)) : ?>
                                                <?php foreach ($row2->child as $row3) : ?>
                                                    <?php if ($row3->type == 1) : ?>
                                                        <a class='cat2' href="<?= $row->link ?>"><?= $row3->{pick_language($row3, 'name_')}  ?></a>
                                                    <?php elseif ($row3->type == 6) : ?>
                                                        <a class='cat2' href="<?= base_url() ?>index/khuyen_mai"><?= $row->{pick_language($row, 'name_')}  ?> <i class="fa fa-star text-red" style="color:#f4b514;"></i></a>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            <?php endif ?>

                                        </div>
                                    <?php endforeach ?>
                                </div>
                            <?php endif ?>
                        </li>
                    <?php endforeach   ?>

                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </nav>


</div>

<div class="d-lg-none">
    <div class="header">
        <div class="wrap">

            <nav id="nav-hori" class="">

                <div class="navone">

                    <a onclick="$('#mnuTop').toggle()" class="lbl fl"><i class="fa fa-bars"></i> <span class="hide"> <i class="fa fa-caret-right"></i></span></a>

                    <div class="header-two text-center">



                        <a href="/" id="logo"><img src="<?= base_url("assets/images/logo.png") ?>" alt=""></a>
                        <a id="cart-header" href="/gio-hang" class="">
                            <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 24px;color: #e51f28;"></i>

                            <b id="count_shopping_cart_store">0</b>
                        </a>
                    </div>

                    <ul class="ul primary slideInLeft" id="mnuTop" style="max-height: 733px;">

                        <?php if (logged_in()) : ?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="icon fa fa-user"></i>
                                    <?= user()->username ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item text-dark" href="<?= route_to("info") ?>"><?= lang("Custom.info") ?></a>
                                    <a class="dropdown-item text-dark" href="<?= route_to("history") ?>"><?= lang("Custom.history_order") ?></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item logout text-dark" href="<?= route_to("logout") ?>"><?= lang("Custom.logout") ?></a>
                                </div>
                                <i class="fa fa-chevron-circle-left" onclick="$('#mnuTop').toggle()"></i>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="<?= base_url("dang-nhap.html") ?>" class=""><i class="icon fa fa-user"></i><?= lang("Custom.login") ?> / <?= lang("Custom.sign_up") ?></a>
                                <i class="fa fa-chevron-circle-left" onclick="$('#mnuTop').toggle()"></i>
                            </li>
                        <?php endif ?>
                        <li class="divider"></li>

                        <?php foreach ($list_menu as $row) : ?>
                            <li class="is-bullet">
                                <?php if ($row->type == 1) : ?>
                                    <a href="<?= $row->link ?>"><?= $row->{pick_language($row, 'name_')}  ?>
                                    </a>
                                    <span>
                                        <?= (!empty($row->child)) ? '<i class="fa fa-angle-right" data-id="#mnu' . $row->id . '"></i>' : '' ?>
                                    </span>
                                <?php elseif ($row->type == 6) : ?>
                                    <a href="<?= base_url() ?>index/khuyen_mai"><span class="span-root"><?= $row->{pick_language($row, 'name_')}  ?> <i class="fa fa-star text-red" style="color:#f4b514;"></i>
                                    </a>
                                    <span>
                                        <?= (!empty($row->child)) ? '<i class="fa fa-angle-right" data-id="#mnu' . $row->id . '"></i>' : '' ?>
                                    </span>
                                <?php endif ?>
                                <?php if (!empty($row->child)) : ?>
                                    <ul id="mnu<?= $row->id ?>" class="level2">
                                        <?php foreach ($row->child as $row2) : ?>
                                            <li>
                                                <?php if ($row2->type == 1) : ?>
                                                    <a href="<?= $row->link ?>"><?= $row2->{pick_language($row2, 'name_')}  ?></a>
                                                <?php elseif ($row2->type == 6) : ?>
                                                    <a href="<?= base_url() ?>index/khuyen_mai"><?= $row->{pick_language($row, 'name_')}  ?> <i class="fa fa-star text-red" style="color:#f4b514;"></i></a>
                                                <?php endif ?>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                <?php endif ?>
                            </li>
                        <?php endforeach   ?>
                        <li class="tel"><i class="fa fa-phone"></i> <a href="tel:028 7770 4567">028 7770 4567</a></li>

                        <li onclick="$('#mnuTop').toggle()" class="primary_bg"></li>

                    </ul>

                </div>


            </nav>
            <div class="header3">
                <ul class="mb-location">
                    <li class="is-location" onclick="$('#ul-location').slideToggle();">
                        <a href="javascript:;"><i class="fa fa-map-marker text-violet text-20 icon"></i>
                            <span id="cLoc" class="txt_violet">
                                <?php if (area_current() == "B") : ?>
                                    <?= lang("Custom.area_B") ?>
                                <?php elseif (area_current() == "T") : ?>
                                    <?= lang("Custom.area_T") ?>
                                <?php else : ?>
                                    <?= lang("Custom.area_N") ?>
                                <?php endif ?>
                            </span> <i class="fa fa-caret-down"></i></a>
                        <ul id="ul-location" class="ul level2">
                            <li><a href="<?= base_url("home/set_area/N") ?>"><?= lang("Custom.area_N") ?></a></li>
                            <li><a href="<?= base_url("home/set_area/T") ?>"><?= lang("Custom.area_T") ?></a></li>
                            <li><a href="<?= base_url("home/set_area/B") ?>"><?= lang("Custom.area_B") ?></a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="mb-lan">
                    <a href="<?= base_url("lang/vi") ?>">VN <i class="icon-deli icon-vn"></i></a>
                    <a href="<?= base_url("lang/en") ?>">EN <i class="icon-deli icon-en"></i></a>
                    <a href="<?= base_url("lang/jp") ?>">JP <i class="icon-deli icon-jp"></i></a>
                </ul>
            </div>
            <div class="header-four-container transition">
                <div class="header-four">

                    <a class="mnu-bar hide"><i class="fa fa-bars"></i></a>

                    <div id="search">
                        <form method="get" name="searchForm" action="/tim" enctype="multipart/form-data">
                            <input type="text" class="text-search" id="text_search" name="q" autocomplete="off" placeholder="Bạn muốn tìm gì hôm nay?">
                            <button id="submit-search"><i class="fa fa-search"></i></button>
                        </form>

                    </div>
                </div>
                <div id="suggestions" class="autocomplete-suggestions"></div>
            </div>
        </div>
    </div>
</div>


<?php if (get_cookie('area_current') == "") : ?>
    <!-- Modal-->
    <div aria-hidden="true" aria-labelledby="area-modalLabel" class="modal fade" id="area-modal" role="dialog" tabindex="-1" data-bs-keyboard="false" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h4 class="text-center text-uppercase">Chọn khu vực / Choose your region / お住まいの地域を選択してください
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="main text-center">
                        <!-- <p class="text-center"><?= lang("des_area") ?></p> -->
                        <p class="text-center">Hãy chọn khu vực của bạn. Bạn có thể thay đổi khu vực tại đầu trang.</p>
                        <p class="text-center">Please select your region or you can change at the top of website.</p>
                        <p class="text-center">ページ上部のタブより、いつでも変更可能です</p>
                        <div class="form-group">
                            <select class="form-control select_area w-50 d-inline-block" style="appearance:auto;">
                                <option value="N">
                                    Miền Nam / South / 南部
                                </option>
                                <option value="T">
                                    Miền Trung / Central / 中部
                                </option>
                                <option value="B">
                                    Miền Bắc / North / 北部
                                </option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-success text-uppercase yes_area">Đồng ý / Accept / 選択</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".modal").detach().appendTo("body");
            $("#area-modal").modal("show");
            $(".yes_area").click(function() {
                let select_area = $(".select_area").val();
                location.href = path + "home/set_area/" + select_area
            });
        })
    </script>

<?php endif ?>