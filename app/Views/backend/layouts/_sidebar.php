<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div><img src="<?= base_url("assets/images/logo.png") ?>" width="150" /></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Tổng quan</li>
                <li>
                    <a href="<?= base_url() ?>/admin/" class="">
                        <i class="metismenu-icon far fa-chart-bar"></i>
                        Biểu đồ
                    </a>
                </li>
                <li class="app-sidebar__heading">Slider & banner</li>
                <li>
                    <a href="<?= base_url() ?>/admin/slider/" class="">
                        <i class="metismenu-icon fas fa-images"></i>
                        Quản lý slider
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>/admin/banner/" class="">
                        <i class="metismenu-icon fas fa-images"></i>
                        Quản lý banner
                    </a>
                </li>
                <li class="app-sidebar__heading">Tin tức</li>
                <li>
                    <a href="<?= base_url() ?>/admin/news/" class="">
                        <i class="metismenu-icon fas fa-newspaper"></i>
                        Quản lý tin tức
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>/admin/tag/" class="">
                        <i class="metismenu-icon fas fa-tags"></i>
                        Danh mục tin tức
                    </a>
                </li>
                <li class="app-sidebar__heading">Danh mục</li>
                <li>
                    <a href="<?= base_url() ?>/admin/category/" class="">
                        <i class="metismenu-icon fas fa-cookie-bite"></i>
                        Danh mục
                    </a>
                </li>
                <li class="app-sidebar__heading">Menu</li>
                <li>
                    <a href="<?= base_url() ?>/admin/menu" class="">
                        <i class="metismenu-icon fas fa-wrench"></i>
                        Menu
                    </a>
                </li>

                <li class="app-sidebar__heading">Sản phẩm</li>
                <li>
                    <a href="<?= base_url() ?>/admin/product/" class="">
                        <i class="metismenu-icon fab fa-product-hunt"></i>
                        Sản phẩm
                    </a>
                    <a href="<?= base_url() ?>/admin/product_price/" class="">
                        <i class="metismenu-icon fas fa-ad"></i>
                        Giá khuyến mãi
                    </a>
                </li>
                <li class="app-sidebar__heading">Cài đặt</li>
                <li>
                    <a href="<?= base_url() ?>/admin/admin/settings" class="">
                        <i class="metismenu-icon fas fa-wrench"></i>
                        Cài đặt chung
                    </a>
                </li>

                <li>
                    <a href="<?= base_url() ?>/admin/fee" class="">
                        <i class="metismenu-icon fas fa-truck"></i>
                        Phí giao hàng
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>/admin/admin/settings_email" class="">
                        <i class="metismenu-icon fas fa-envelope"></i>
                        Gửi mail
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>/admin/user/">
                        <i class="metismenu-icon fa fa-lock"></i>
                        Tài khoản
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>/admin/language" class="">
                        <i class="metismenu-icon fas fa-globe"></i>
                        Ngôn ngữ
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>