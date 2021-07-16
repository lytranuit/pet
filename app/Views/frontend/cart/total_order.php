<table class="total-line-table table table-borderless">
    <tbody class="border-bottom">
        <tr class="total-line total-line--subtotal">
            <th class="total-line__name" scope="row"><?= lang("Custom.total") ?></th>
            <td class="text-right">
                <span class="fw-bold" data-amount="<?= $cart['amount_product'] ?>">
                    <?= number_format($cart['amount_product'], 0, ",", ".") ?>đ
                </span>
            </td>
        </tr>


        <tr class="total-line total-line--shipping">
            <th class="total-line__name" scope="row"><?= lang("Custom.service_fee") ?></th>
            <td class="text-right">
                <span class="">
                    <?php if ($cart['service_fee'] == -1) : ?>
                        <?= lang("Custom.price_zero") ?>
                    <?php else : ?>
                        <?= number_format($cart['service_fee'], 0, ",", ".") ?>đ
                    <?php endif ?>
                </span>
            </td>
        </tr>
    </tbody>
    <tfoot class="total-line-table__footer">
        <tr class="total-line">
            <th class="total-line__name payment-due-label" scope="row">
                <span class="payment-due-label__total"><?= lang("Custom.amount") ?></span>
            </th>
            <td class="text-right">
                <span class="fw-bold" style="font-size:20px;">
                    <?= number_format($cart['paid_amount'], 0, ",", ".") ?>đ
                </span>

                <div><?= NumberToText($cart['paid_amount']) ?></div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="border-0 text-center">
                <button class="btn bg-red text-25" style="    width: 100%;
    padding: 10px 0;
    font-size: 22px;
    color: #fff;">
                    <span><?= lang("Custom.cart_finish") ?></span>
                </button>
            </td>
        </tr>
    </tfoot>
</table>