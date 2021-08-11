<?php foreach ($cart['details'] as $row) : ?>
    <div class="mt-2 product mt-2 product border p-2" data-id="<?= $row->id ?>">
        <div class="row no-gutters">
            <div class="col-lg-2 col-3 text-center">
                <img class="img-responsive" src="http://simbaeshop.com<?= $row->image_url ?>" style="max-height: 100px;" />
            </div>
            <div class="col-lg-10 col-9">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <a href="<?= base_url() ?>index/details/<?= $row->id ?>" class="text-dark fw-bold"><?= $row->{pick_language($row, 'name_')}  ?></a>
                        <div><?= lang("Custom.code") ?>: <span class="fw-bold"><?= $row->code ?></span></div>
                        <div><?= lang("Custom.qui_cach") ?>: <span class="fw-bold"><?= $row->{pick_language($row, 'volume_')}  ?></span></div>
                    </div>
                    <div class="col-lg-2 text-lg-center mt-3">

                        <?php if (!empty($row->units)) : ?>
                            <?php foreach ($row->units as $unit) : ?>
                                <?= ($unit->id == $row->unit_id) ? $unit->{pick_language($unit, 'name_')} : '' ?>
                            <?php endforeach ?>
                        <?php endif ?>
                    </div>
                    <div class="col-lg-2 text-lg-center mt-3">
                        <?= $row->qty ?>
                    </div>
                    <div class="col-lg-2 col-6 text-lg-center mt-3">
                        <b><?= number_format($row->amount, 0, ",", ".") ?>đ</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
<div class="col-12 border p-2 mt-2 text-right">
    <span class="me-2"><?= lang("Custom.amount") ?></span><b class="h5 text-danger"><?= number_format($cart['amount_product'], 0, ",", ".") ?>đ</b>
</div>