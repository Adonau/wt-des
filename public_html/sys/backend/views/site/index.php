<div class="flex-row page page--index">

    <div class="flex-column wrapper--date-end">
        <h2 class="flex-column date--end-title">Кончилась оплата</h2>
        <?php foreach ($servers as $server) : ?>
            <?php if ($server->date_end < date('Y-m-d')) : ?>
                <div class="flex-row date--end-item"> <?= $server->name  ?></div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <div class="flex-column wrapper--date-end">
        <h2 class="flex-column date--end-title">Кончилась оплата</h2>
        <?php foreach ($imagegif as $gif) : ?>
            <?php if ($gif->date_end < date('Y-m-d')) : ?>
                <div class="flex-row date--end-item"><?= $gif->bannerUrl ?></div>
                <div class="flex-row date--end-item"><?= $gif->bannerLink ?></div>
                <div class="flex-row date--end-item"><?= Yii::$app->formatter->asDate($gif->date_end) ?></div>

                <div class="flex-row date--end-img" style="background-image: url(<?= Yii::getAlias('@images/' . $gif->bannerUrl); ?>);"></div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <div class="flex-column wrapper--date-end">
        <h2 class="flex-column date--end-title">Кончилась оплата</h2>
        <?php foreach ($imagemain as $main) : ?>
            <?php if ($main->date_end < date('Y-m-d')) : ?>
                <div class="flex-row date--end-item"><?= $main->url ?></div>
                <div class="flex-row date--end-item"><?= $main->link ?></div>
                <div class="flex-row date--end-item"><?= Yii::$app->formatter->asDate($main->date_end) ?></div>

                <div class="flex-row date--main-img" style="background-image: url(<?= Yii::getAlias('@imagesb/' . $main->url); ?>);"></div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>