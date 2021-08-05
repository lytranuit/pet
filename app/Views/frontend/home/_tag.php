<section id="tag">
    <?php foreach ($tags as $tag) : ?>
        <?php if ($tag->count > 0) : ?>

            <div class="topics py-2 py-md-5" style="background: #FFF9EE;">
                <?php if ($tag->type == 1) : ?>
                    <div class="container">
                        <div class="row">
                            <div class="clear">
                                <h4 class="home-title ocean"><a href="<?= url_tag($tag) ?>"><span class="text-white"><?= $tag->{pick_language($tag)} ?></span></a></h4>
                            </div>
                            <div class="ajax-home">
                                <article class="news-box">
                                    <?php foreach ($tag->news as $news) : ?>
                                        <div class=" pull-left p-2">
                                            <div class="img hover-2">
                                                <a href="<?= url_news($news) ?>">
                                                    <img class="img-responsive" src="<?= base_url($news->image_url) ?>" alt="<?= $news->{pick_language($news, 'title_')} ?>">
                                                </a>
                                            </div>
                                            <a href="<?= url_news($news) ?>" class="txt_000 txt_u space10px block">
                                                <?= $news->{pick_language($news, 'title_')} ?>
                                            </a>
                                            <p>
                                                <?= split_string($news->{pick_language($news, 'content_')}, 100) ?>
                                            </p>
                                        </div>
                                    <?php endforeach ?>

                                </article>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="container">
                        <dl class="clear row g-0">
                            <dt class="col-md-3" style="background: #fabec0;
    text-align: center;
    position: relative;">
                                <div style="display: block;padding-top: 100%;"></div>
                                <h2 style="width: 100%;
    background-size: contain;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    margin: 0;
    display: inline-block;
    align-items: center;
    justify-content: center;
    display: flex;"><img src="<?= base_url($tag->image_url) ?>" alt="Topics"></h2>
                            </dt>
                            <dd class="col-md-9" style="    background: #fff;
    text-align: left;
    padding: 25px 50px;
    margin: 0;">
                                <ul>
                                    <?php foreach ($tag->news as $news) : ?>
                                        <li style="list-style:none">
                                            <a href="<?= url_news($news) ?>" style="display: block;color: #4B4443;line-height: 30px;font-size: 14px;font-weight: bold;text-decoration: none;width: 100%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                                <span class="date" style="    display: inline-block;
    color: #4B4443;
    line-height: 30px;
    font-size: 14px;
    font-weight: 500;
    margin-right: 50px;"><?= date("Y.m.d", strtotime($news->date)) ?></span><?= $news->{pick_language($news, 'title_')} ?></a>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </dd>
                        </dl>
                        <div class="moreBtn text-center">
                            <a href="https://www.inaba-petfood.co.jp/topics/" style="display: inline-block;
    text-align: center;
    padding: 10px 25px;
    background: #fabec0;
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    line-height: 30px;
    border-radius: 25px;
    transition: all .3s ease;">
                                <?= lang("Custom.more"); ?>
                            </a>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        <?php endif ?>
    <?php endforeach ?>
</section>