<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>
<div class="container my-5">
    <div class="row justify-content-md-center">
        <div class="col-lg-6">
            <div class="register">
                <div class="regRight fr">

                    <?= view('Myth\Auth\Views\_message_block') ?>
                    <form action="<?= route_to('register') ?>" method="post">
                        <?= csrf_field() ?>
                        <h3 class="format txt_pink txt_18 txt_left fw-bold"><?= lang("Custom.sign_up") ?></h3>
                        <p class="txt_left"><?= lang("Custom.title_login") ?></p>

                        <div class="clear space10px"></div>

                        <div class="txt">
                            <i class="fa fa-user"></i>
                            <input type="text" name="username" id="full_name" class="boxInput" size="40" value="" placeholder="*<?= lang('Custom.login_identity_label') ?>">
                        </div>
                        <div class="txt">
                            <div class="fl" style="width:48%;">
                                <i class="fa fa-lock"></i>
                                <input type="password" name="password" id="newpassword" class="boxInput" size="40" value="" placeholder="*<?= lang('Custom.login_password_label') ?>">
                            </div>

                            <div class="fr" style="width:48%;position:relative">
                                <i class="fa fa-lock"></i>
                                <input type="password" name="pass_confirm" id="confirmpassword" class="boxInput" size="40" value="" placeholder="*<?= lang('Custom.login_confirm_password_label') ?>">
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="txt">
                            <i class="fa fa-user"></i>
                            <input type="text" name="name" id="name" class="boxInput" size="50" value="" placeholder="*<?= lang('Custom.login_name_label') ?>">
                        </div>

                        <div class="txt">
                            <i class="fa fa-envelope"></i>
                            <input type="email" name="email" id="email" class="boxInput" size="40" value="" placeholder="*<?= lang('Custom.login_email_label') ?>">
                        </div>
                        <div class="txt">
                            <i class="fa fa-home"></i>
                            <input type="text" name="address" id="address" class="boxInput" size="40" value="" placeholder="<?= lang('Custom.login_address_label') ?>">
                        </div>
                        <div class="txt">
                            <i class="fa fa-phone"></i>
                            <input type="tel" name="phone" id="phone" class="boxInput" size="40" value="" placeholder="<?= lang('Custom.login_phone_label') ?>">
                        </div>
                        <?= reCaptcha3('reCaptcha3', ['id' => 'recaptcha_v3']); ?>
                        <p><input type="submit" value="Đăng ký" class="bg_pink btn fw-bold" id="btn_reg" style="border:2px solid #ddd;padding:8px 50px;margin-right:5px;">
                            <a class="txt_pink" href="<?= base_url("dang-nhap.html") ?>"><?= lang("Custom.login") ?></a>
                        </p>


                    </form>


                </div>
            </div>


        </div>
    </div>
</div>
<style>
    li {
        list-style: none;
    }
</style>

<script>
    $("#form-dang-ky").validate({
        highlight: function(input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function(input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function(error, element) {
            $(element).parents('.form-group').append(error);
        },
        submitHandler: function(form) {
            // var username = $("input[name=username]").val();
            $.ajax({
                url: path + "home/checkregister",
                data: $(form).serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.success == 1) {
                        form.submit();
                        return false;
                    } else {
                        alert(data.msg);
                    }
                }
            });

            return false;
        }
    });
</script>
<?= $this->endSection() ?>