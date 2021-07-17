<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>
<div class="container wrap ">

    <div class="account row">


        <div class="acc_left col-md-3">

            <div class="acc_info txt_pink hr">
                <img class="fl" src="<?= base_url("assets/images/default-avatar.jpg") ?>">
                <p><?= $user->username ?></p>
                <div class="clear"></div>
            </div>

            <ul class="ul txt_b">
                <li><a href="<?= base_url("member") ?>"><?= lang("Custom.info") ?></a></li>
                <li><a href="<?= base_url("member/history") ?>"><?= lang("Custom.history_order") ?></a></li>
                <li><a href="<?= route_to("logout") ?>"><?= lang("Custom.logout") ?></a></li>
            </ul>

        </div>

        <div class="acc_right col-md-9">
            <div class="acc_cnt">
                <h3><?= lang("Custom.info") ?></h3>

                <form id="myForm" method="post" name="account_form">

                    <div class="row border-bottom py-2">
                        <div class="col-md-4"><?= lang("Custom.login_identity_label") ?></div>
                        <div class="col-md-8"><input type="text" name="username" id="fullname" size="40" value="<?= $user->username ?>" readonly></div>
                    </div>
                    <div class="row border-bottom py-2">
                        <div class="col-md-4"><?= lang("Custom.login_email_label") ?></div>
                        <div class="col-md-8">
                            <input type="email" name="email" id="email" size="40" value="<?= $user->email ?>" readonly>
                        </div>
                    </div>
                    <div class="row border-bottom py-2">
                        <div class="col-md-4"><?= lang("Custom.login_name_label") ?></div>
                        <div class="col-md-8">
                            <input type="text" name="name" id="email" size="40" value="<?= $user->name ?>">
                        </div>
                    </div>
                    <div class="row border-bottom py-2">
                        <div class="col-md-4"><?= lang("Custom.login_address_label") ?></div>
                        <div class="col-md-8"><input type="text" name="address" id="address" value="<?= $user->address ?>" size="50"></div>
                    </div>
                    <div class="row border-bottom py-2">
                        <div class="col-md-4"><?= lang("Custom.login_phone_label") ?></div>
                        <div class="col-md-8"><input type="tel" name="phone" id="mobile" size="40" value="<?= $user->phone ?>"></div>
                    </div>
                    <div style="padding-top:15px; padding-bottom:10px;">
                        <!--<input class="btn bg_pink" type="submit" value="Thay đổi" onclick="return showPopup();" />-->
                        <button id="myfancybox" href="#fancybox" class="btn bg_pink txt_14 mx-2" type="submit" name="edit_user"><?= lang("Custom.change_password_submit_btn") ?></button>

                        <a href="#" data-bs-target="#password-modal" data-bs-toggle="modal"><?= lang("Custom.thay_doi_password") ?></a>
                    </div>
                </form>
                <div class="clear"></div>
            </div>

        </div>
    </div>
    <!-- THAY DOI MAT KHAU Modal-->
    <div aria-hidden="true" aria-labelledby="password-modalLabel" class="modal fade" id="password-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="comment-modalLabel">
                        <?= lang("Custom.thay_doi_password") ?>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="main">
                        <!--<p>Sign up once and watch any of our free demos.</p>-->
                        <form id="form-password">
                            <!-- <div class="form-group">
                                <b class="form-label"><?= lang("Custom.change_password_old_password_label") ?></b>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="password" required="" aria-required="true">
                                </div>
                                <div class="help-info"></div>
                            </div> -->
                            <div class="form-group">
                                <b class="form-label"><?= lang("Custom.change_password_new_password_label") ?></b>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="newpassword" minlength="8" required="" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <b class="form-label"><?= lang("Custom.change_password_new_password_confirm_label") ?></b>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="confirmpassword" minlength="8" required="" aria-required="true">
                                </div>
                            </div>
                            <button class="btn btn-primary waves-effect" type="submit" name="edit_password"><?= lang("Custom.change_password_submit_btn") ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("button[name='edit_password']").click(function(e) {
                e.preventDefault();
                $.ajax({
                    url: path + "member/changepass",
                    data: $("#form-password").serialize(),
                    dataType: "JSON",
                    type: "POST",
                    success: function(data) {
                        alert(data.msg);
                        if (data.code == 400) {
                            location.reload();
                        }
                    }
                });
                return false;
            });
        })

        function activeMenu() {
            $(".acc_left ul").find("a").each(function(i) {
                var url = location.href.toLowerCase();
                if (this.href.toLowerCase() == url) {
                    $(this).removeClass("active");
                    $(this).addClass("active");
                }
            });
        }
        activeMenu();
    </script>


    <div class="clear"></div>
</div>
<style>
    .account {
        position: relative;
        padding: 10px 0;
    }

    .acc_left {}

    .acc_left img {
        float: left;
        width: 60px;
        border-radius: 300px;
        margin: -10px 10px 0 0;
    }

    .acc_left p {
        margin: 0;
        padding: 0;
    }

    .acc_info {
        font-size: 20px;
        padding: 10px 0;
    }

    .acc_left ul {
        padding: 15px 0;
        line-height: 28px;
    }

    .acc_left a {
        color: #222;
        display: block;
    }

    .acc_left a:hover,
    .acc_left a.active {
        color: #8c2b8d;
    }

    .acc_right {}

    .acc_top {
        padding: 20px 0 18px;
    }

    .acc_cnt {
        border: 2px solid #ddd;
        border-radius: 5px;
        padding: 10px 20px 30px;
    }

    .acc_cnt h3 {
        color: #ff0099;
        font-size: 20px;
        text-align: center;
        font-size: 22px;
        text-transform: uppercase;
        font-weight: 400;
    }

    .acc_cnt table {
        border: none;
    }

    .acc_cnt td {
        border: none;
        border-bottom: 1px solid #ddd;
        padding: 10px;
    }

    .acc_cnt tr.first td {
        background: #ddd;
    }

    .acc_cnt .txt_order_list {
        position: relative;
        margin: 0 0 20px;
    }

    .acc_cnt .txt_order_list div {
        width: 200px;
        margin-right: 10px;
    }

    .acc_cnt .txt_order_list input,
    .acc_cnt .txt_order_list select {
        width: 100%;
        border-radius: 5px;
        border: 1px solid #ddd;
        padding: 8px 10px 9px 30px;
        box-sizing: border-box;
    }

    .acc_cnt .txt_order_list i {
        position: absolute;
        left: 10px;
        top: 11px;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("script") ?>
<?= $this->endSection() ?>