<div class="bnn"></div>

<div class="clear"></div>
<div class="art">
    <p class="txt_u txt_pink" style="border:none"><?= $info->{pick_language($info)} ?></p>
    <ul class="ul" id="catA2">

        <?php foreach ($info->news as $row) : ?>
            <li><a href="<?= url_news($row) ?>" title="<?= $row->{pick_language($row, "title_")} ?>">
                    <img alt="<?= $row->{pick_language($row, "title_")} ?>" src="<?= base_url($row->image_url) ?>">
                    <i class="ico i1"></i><?= $row->{pick_language($row, "title_")} ?></a>
            </li>
        <?php endforeach ?>

    </ul>
    <div class="clear"></div>
    <p style="text-align:right;"><a href="<?= url_tag($info) ?>" style="color:#e51f28;"><?= lang("Custom.more") ?></a></p>
    <div class="clear"></div>
</div>
<!--//-->
<div class="line"></div>
<div id="likebox">

</div>
<!--likebox-->