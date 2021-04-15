<aside class="flex-column dark--border aside">
    <nav class="flex-row gray--border aside--nav">

        <ul class="flex-column aside--nav-list">

            <li class="flex-row aside--nav-item">
                <a href="<?= Yii::$app->urlManager->createUrl(['/']) ?>" class="aside--nav-link flex-row">Главная</a>
            </li>
            <li class="flex-row aside--nav-item drop--item-list">
                <span class="aside--nav-link flex-row">Текст Страниц</span>
                <ul class="flex-column list--down">
                    <li class="flex-row aside--nav-item">
                        <a href="<?= Yii::$app->urlManager->createUrl(['chroniclespages/index']) ?>" class="aside--nav-link flex-row">Хроники</a>
                    </li>
                    <li class="flex-row aside--nav-item">
                        <a href="<?= Yii::$app->urlManager->createUrl(['typepages/index']) ?>" class="aside--nav-link flex-row">Типы</a>
                    </li>
                    <li class="flex-row aside--nav-item">
                        <a href="<?= Yii::$app->urlManager->createUrl(['ratepages/index']) ?>" class="aside--nav-link flex-row">Рейты</a>
                    </li>
                    <li class="flex-row aside--nav-item">
                        <a href="<?= Yii::$app->urlManager->createUrl(['datepages/index']) ?>" class="aside--nav-link flex-row">Дни недели</a>
                    </li>
                    <li class="flex-row aside--nav-item">
                        <a href="<?= Yii::$app->urlManager->createUrl(['news/index']) ?>" class="aside--nav-link flex-row">Новостная лента</a>
                    </li>
                    <li class="flex-row aside--nav-item">
                        <a href="<?= Yii::$app->urlManager->createUrl(['advertising/index']) ?>" class="aside--nav-link flex-row">Цены на рекламу</a>
                    </li>
                    <li class="flex-row aside--nav-item">
                        <a href="<?= Yii::$app->urlManager->createUrl(['contact/index']) ?>" class="aside--nav-link flex-row">Контакты</a>
                    </li>
                </ul>
            </li>
            <li class="flex-column aside--nav-item drop--item-list">
                <span class="aside--nav-link flex-row">Изображения</span>
                <ul class="flex-column list--down">
                    <li class="flex-row aside--nav-item">
                        <a href="<?= Yii::$app->urlManager->createUrl(['bannersmall/index']) ?>" class="aside--nav-link flex-row">Асайд img</a>
                    </li>
                    <li class="flex-row aside--nav-item">
                        <a href="<?= Yii::$app->urlManager->createUrl(['imagearticle/index']) ?>" class="aside--nav-link flex-row">Майн img</a>
                    </li>
                    <li class="flex-row aside--nav-item">
                        <a href="<?= Yii::$app->urlManager->createUrl(['headerimage/index']) ?>" class="aside--nav-link flex-row">Хедер img</a>
                    </li>
                </ul>
            </li>
            <li class="flex-row aside--nav-item">
                <a href="<?= Yii::$app->urlManager->createUrl(['listserver/index']) ?>" class="aside--nav-link flex-row">Регистрация сервера</a>
            </li>
            <li class="flex-row aside--nav-item">
                <a href="<?= Yii::$app->urlManager->createUrl(['site/seo']) ?>" class="aside--nav-link flex-row">Seo виджет</a>
            </li>
        </ul>

    </nav>
</aside>