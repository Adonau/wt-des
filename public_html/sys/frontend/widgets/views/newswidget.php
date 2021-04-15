<div class="aside__news">
    <div class="simple-marquee-container">
        <div class="marquee">
            <ul class="marquee-content-items">
                <?php foreach ($newsall as $news) : ?>
                    <li class="aside__news-item">
                        <span><?= Yii::$app->formatter->asDate($news->date_news) ?></span>
                        <a href="<?= $news->link_news ?>" target="_blank" rel="nofollow"><?= $news->text_news ?></a>
                    </li>
                <?php endforeach; ?>
                <?php
                $status_servers = '';
                ?>
                <?php foreach ($newsserver as $new) : ?>
                    <?php
                    if ($new->date_end < date('Y-m-d')) {
                        $status_servers = 'wsimple_server';
                    } else {
                        $status_servers =  $new->status;
                    };
                    ?>
                    <?php if (($status_servers != 'wsimple_server') && ($new->status != 'vip_server')) : ?>
                        <li class="aside__news-item">
                            <span><?= Yii::$app->formatter->asDate($new->date) ?></span>
                            <a href="<?= $new->url ?>" target="_blank" rel="nofollow"><?= $new->name ?></a>
                            <span>x<?= $new->rate ?></span>
                            <span><?= $new->chronicle ?></span>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>