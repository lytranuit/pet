<!-- Modal -->
<div class="modal fade" id="cartModel" tabindex="-1" aria-labelledby="cartModelLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cartModelLabel"><?= lang("Custom.cart_title") ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-none d-lg-block">
                    <div class="row no-gutters">
                        <div class="col-lg-2">
                            <span><?= lang("Custom.product_name") ?></span>
                        </div>
                        <div class="col-lg-10 col-9">
                            <div class="row no-gutters">
                                <div class="col-lg-6">

                                </div>
                                <div class="col-lg-2 text-center">
                                    <span><?= lang("Custom.dvt") ?></span>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <span><?= lang("Custom.quantity") ?></span>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <span><?= lang("Custom.amount") ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="cart_products">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm" data-bs-dismiss="modal">Mua tiếp</button>
                <a href="<?= base_url("cart/") ?>" type="button" class="btn btn-sm">Giỏ hàng</a>
                <a href="<?= base_url("cart/checkout") ?>" type="button" class="btn btn-sm">Thanh toán</a>
            </div>
        </div>
    </div>
</div>