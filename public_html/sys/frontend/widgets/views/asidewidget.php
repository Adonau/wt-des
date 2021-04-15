<?php

use frontend\widgets\NewsWidget;
use frontend\widgets\SmallBannerWidget;

include(Yii::getAlias('@app/includefunctions/function_aside.php'));
?>
<aside class="flex-column aside darck--border">

    <?php echo NewsWidget::widget() ?>

    <nav class="flex-column aside__nav">

        <div class="flex-row headline aside__title aside__title-chronicle">Хроники</div>

        <ul class="flex-row aside__list list__text">
            <li class="aside__item <?= $ative_c4 ?>"><a class="aside__link" title="Сервера C4" href="<?= Yii::$app->urlManager->createUrl(['chronicles/c4']) ?>">C4</a></li>
            <li class="aside__item <?= $ative_in ?> aside__item-list">
                <a class="aside__link aside__link-list" title="Сервера Интерлюд" href="<?= Yii::$app->urlManager->createUrl(['chronicles/interlude']) ?>">Interlude</a>
            </li>
            <li class="aside__item <?= $ative_ind ?>"><a class="aside__link" title="Сервера Интерлюд с дополнениями" href="<?= Yii::$app->urlManager->createUrl(['chronicles/interlude-with-addition']) ?>">Interlude +</a></li>
            <li class="aside__item <?= $ative_ep ?>"><a class="aside__link" title="Сервера Грация Эпилог" href="<?= Yii::$app->urlManager->createUrl(['chronicles/gracia-epilogue']) ?>">Epilogue</a></li>
            <li class="aside__item <?= $ative_fi ?>"><a class="aside__link" title="Сервера Грация Финал" href="<?= Yii::$app->urlManager->createUrl(['chronicles/gracia-final']) ?>">Final</a></li>
            <li class="aside__item <?= $ative_fre ?>"><a class="aside__link" title="Сервера Фрея" href="<?= Yii::$app->urlManager->createUrl(['chronicles/freya']) ?>">Freya</a></li>
            <li class="aside__item <?= $ative_hf ?>"><a class="aside__link" title="Сервера Хай Фай" href="<?= Yii::$app->urlManager->createUrl(['chronicles/high-five']) ?>">High Five</a></li>
            <li class="aside__item <?= $ative_cl ?>"><a class="aside__link" title="Сервера Классик" href="<?= Yii::$app->urlManager->createUrl(['chronicles/classic']) ?>">Classic</a></li>
            <li class="aside__item <?= $ative_god ?>"><a class="aside__link" title="Сервера ГоД" href="<?= Yii::$app->urlManager->createUrl(['chronicles/goddess-of-destruction']) ?>">GoD</a></li>
            <li class="aside__item <?= $ative_lin ?>"><a class="aside__link" title="Сервера Линдвиор" href="<?= Yii::$app->urlManager->createUrl(['chronicles/lindvior']) ?>">Lindvior</a></li>
            <li class="aside__item <?= $ative_ert ?>"><a class="aside__link" title="Сервера Артея" href="<?= Yii::$app->urlManager->createUrl(['chronicles/ertheia']) ?>">Ertheia</a></li>
            <li class="aside__item <?= $ative_od ?>"><a class="aside__link" title="Сервера Инфинити Одиссей" href="<?= Yii::$app->urlManager->createUrl(['chronicles/infinite-odyssey']) ?>">Odyssey</a></li>
            <li class="aside__item <?= $ative_hel ?>"><a class="aside__link" title="Сервера Хелиос" href="<?= Yii::$app->urlManager->createUrl(['chronicles/helios']) ?>">Helios</a></li>
            <li class="aside__item <?= $ative_cru ?>"><a class="aside__link" title="Сервера Гранд Крусейд" href="<?= Yii::$app->urlManager->createUrl(['chronicles/grand-crusade']) ?>">Crusade</a></li>
            <li class="aside__item <?= $ative_sal ?>"><a class="aside__link" title="Сервера Сальватион" href="<?= Yii::$app->urlManager->createUrl(['chronicles/salvation']) ?>">Salvation</a></li>
            <li class="aside__item <?= $ative_or ?>"><a class="aside__link" title="Сервера Орфен" href="<?= Yii::$app->urlManager->createUrl(['chronicles/orfen']) ?>">Orfen</a></li>
            <li class="aside__item <?= $ative_fuf ?>"><a class="aside__link" title="Сервера Фафурион" href="<?= Yii::$app->urlManager->createUrl(['chronicles/fafurion']) ?>">Fafurion</a></li>
            <li class="aside__item <?= $ative_pre ?>"><a class="aside__link" title="Сервера Прелюд" href="<?= Yii::$app->urlManager->createUrl(['chronicles/prelude-of-war']) ?>">Prelude</a></li>
            <li class="aside__item <?= $ative_gom ?>"><a class="aside__link" title="Сервера Гомункул" href="<?= Yii::$app->urlManager->createUrl(['chronicles/homunculus']) ?>">Homunculus</a></li>
            <li class="aside__item"><a class="aside__link" title="Показ всех серверов" href="<?= Yii::$app->urlManager->createUrl(['/']) ?>">Все хроники</a></li>
        </ul>

        <div class="flex-row headline aside__title aside__title-type">Тип сервера</div>


        <ul class="flex-row aside__list list__text">
            <li class="aside__item <?= $ative_pts ?>"><a class="aside__link" title="Все PTS сервера" href="<?= Yii::$app->urlManager->createUrl(['servers-type/pts-servers']) ?>">PTS сервера</a></li>
            <li class="aside__item"><a class="aside__link" title="Зарубежные сервера л2" href="<?= Yii::$app->urlManager->createUrl(['servers-type/foreign-servers']) ?>">Зарубежные</a></li>
            <li class="aside__item"><a class="aside__link" title="Сервера с низкими рейтами" href="<?= Yii::$app->urlManager->createUrl(['servers-type/low-rate-servers']) ?>">Лоу рейт</a></li>
            <li class="aside__item <?= $ative_kraft ?>"><a class="aside__link" title="Только мультикрафт сервера" href="<?= Yii::$app->urlManager->createUrl(['servers-type/craft-servers']) ?>">Мультикрафт</a></li>
            <li class="aside__item"><a class="aside__link" title="Сервера со средними рейтами" href="<?= Yii::$app->urlManager->createUrl(['servers-type/mid-rate-servers']) ?>">Мид рейт</a></li>
            <li class="aside__item"><a class="aside__link" title="Сервера с открытым бета тестом" href="<?= Yii::$app->urlManager->createUrl(['servers-type/obt']) ?>">Сервера с ОБТ</a></li>
            <li class="aside__item"><a class="aside__link" title="Сервера с высокими рейтами" href="<?= Yii::$app->urlManager->createUrl(['servers-type/pvp-servers']) ?>">ПвП сервера</a></li>
            <li class="aside__item"><a class="aside__link" title="Сервера с разрешённым ботом" href="<?= Yii::$app->urlManager->createUrl(['servers-type/bot-allowed']) ?>">Разрешён бот</a></li>
            <li class="aside__item <?= $ative_mul ?>"><a class="aside__link" title="Сервера Мультипрофа" href="<?= Yii::$app->urlManager->createUrl(['servers-type/multiprof']) ?>">Мультипрофа</a></li>
            <li class="aside__item <?= $ative_rvr ?>"><a class="aside__link" title="Сервера РвР" href="<?= Yii::$app->urlManager->createUrl(['servers-type/rvr']) ?>">RvR</a></li>
            <li class="aside__item <?= $ative_dp ?>"><a class="aside__link" title="Сервера имеющие любые дополнения" href="<?= Yii::$app->urlManager->createUrl(['servers-type/servers-with-addition']) ?>">С дополнениями</a></li>
            <li class="aside__item <?= $ative_gve ?>"><a class="aside__link" title="Сервера ГвЕ" href="<?= Yii::$app->urlManager->createUrl(['servers-type/gve']) ?>">GvE</a></li>
            <li class="aside__item <?= $ative_gve ?>"><a class="aside__link" title="Л2 топ" href="<?= Yii::$app->urlManager->createUrl(['servers-type/top-servers-l2']) ?>">Top сервера</a></li>
            <li class="aside__item"><a class="aside__link" title="Показ всех серверов" href="<?= Yii::$app->urlManager->createUrl(['/']) ?>">Все типы</a></li>
        </ul>
        <?php echo SmallBannerWidget::widget() ?>

        <div class="flex-row headline aside__title aside__title-rate">Рейты</div>

        <ul class="flex-row aside__list list__num">
            <li class="aside__item"><a class="aside__link" title="Сервера с рейтами от х1 до х10" href="<?= Yii::$app->urlManager->createUrl(['rates/from-x1-to-x10']) ?>">x1-x10</a></li>
            <li class="aside__item"><a class="aside__link" title="Сервера с рейтами от х10 до х50" href="<?= Yii::$app->urlManager->createUrl(['rates/from-x11-to-x50']) ?>">x11-x50</a></li>
            <li class="aside__item"><a class="aside__link" title="Сервера с рейтами от х50 до х100" href="<?= Yii::$app->urlManager->createUrl(['rates/from-x51-to-x100']) ?>">x51-x100</a></li>
            <li class="aside__item"><a class="aside__link" title="Сервера с рейтами от х100 до х500" href="<?= Yii::$app->urlManager->createUrl(['rates/from-x101-to-x500']) ?>">x101-x500</a></li>
            <li class="aside__item"><a class="aside__link" title="Сервера с рейтами от х500 до х1000" href="<?= Yii::$app->urlManager->createUrl(['rates/from-x501-to-x1000']) ?>">x501-x1000</a></li>
            <li class="aside__item"><a class="aside__link" title="Сервера с рейтами от х1000 до х5000" href="<?= Yii::$app->urlManager->createUrl(['rates/from-x1001-to-x5000']) ?>">x1001-x5000</a></li>

            <li class="aside__item"><a class="aside__link" title="Сервера с рейтами от х1000 до х5000" href="<?= Yii::$app->urlManager->createUrl(['rates/from-x5001-to-x10000']) ?>">x5001-x10000</a></li>
            <li class="aside__item"><a class="aside__link" title="Сервера с рейтами от х1000 до х5000" href="<?= Yii::$app->urlManager->createUrl(['rates/from-x10001-to-x50000']) ?>">x10001-х50000</a></li>
            <li class="aside__item"><a class="aside__link" title="Сервера с рейтами от х1000 до х5000" href="<?= Yii::$app->urlManager->createUrl(['rates/from-x50001-to-x100000']) ?>">x50001-x100000</a></li>

            <li class="aside__item"><a class="aside__link" title="Сервера с рейтами выше х5000" href="<?= Yii::$app->urlManager->createUrl(['rates/x100001-and-higher']) ?>">x100001 и выше</a></li>
            <li class="aside__item"><a class="aside__link" title="Показ всех серверов" href="<?= Yii::$app->urlManager->createUrl(['/']) ?>">Все рейты</a></li>
        </ul>
    </nav>

</aside>

