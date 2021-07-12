<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>
<div class="container my-5">
    <div class="row justify-content-md-center">
        <div class="col-lg-6">
            <div class="register login">
                <div class="regRight fl">
                    <form action="<?= route_to('login') ?>" method="post" name="loginForm">

                        <h3 class="format txt_18 txt_center"><?= lang('Custom.login') ?></h3>
                        <p class="txt_center"><?= lang("Custom.title_login") ?> <a href="<?= base_url("dang-ky.hml") ?>"><?= lang("Custom.sign_up") ?></a></p>

                        <div class="clear space10px"></div>

                        <div class="txt">
                            <i class="fa fa-envelope"></i>
                            <input type="text" name="login" id="email" class="boxInput" size="40" value="" placeholder="<?= lang('Custom.login_identity_label') ?>">
                        </div>

                        <div class="txt">
                            <i class="fa fa-lock"></i>
                            <input type="password" name="password" id="password" class="boxInput" size="40" value="" placeholder="<?= lang('Custom.login_password_label') ?>">
                        </div>

                        <a href="<?= base_url("/quen-mat-khau.html") ?>" class="txt_pink" style="padding-right:50px;"><?= lang("Custom.login_forgot_password") ?></a>

                        <input type="submit" value="<?= lang('Custom.login') ?>" class="bg_pink btn">


                    </form>
                </div>
            </div>


        </div>
    </div>
</div>

<?= $this->endSection() ?>