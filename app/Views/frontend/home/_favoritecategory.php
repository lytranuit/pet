<section class="py-2 py-md-5">
    <div class="container">
        <div class="row">
            <div class="favorites">
                <header class="group-title1">
                    <div style="    font-size: 30px;
    color: black;
    font-weight: bold;"><?= lang("Custom.cate_favorite") ?></h2>
                </header>
                <div class="wrap row g-0">
                    <?php foreach ($categories as $category) : ?>
                        <div class="col-md-2 col-6">
                            <div class="item" style="padding:10px;">
                                <a href="<?= url_category($category) ?>" style="border: 1px solid #dddddd;padding: 0;display: block;text-align: center;">
                                    <img src="<?= base_url($category->image_url) ?>" class="img-fluid">
                                    <p style="
    text-align: center;
    font-size: 12px;
    padding-top: 20px;
    color: black;
    text-transform: uppercase;"><?= $category->{pick_language($category)} ?></p>
                                </a>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

        })
    </script>
</section>