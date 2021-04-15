<?php

use yii\helpers\Html;
use frontend\widgets\BradcrumbsWidget;
?>
<header class="flex-row header">
    <a href="<?= Yii::$app->urlManager->createUrl(['/']) ?>" class="flex-row logo" title="Анонс серверов л2">
        <div class="flex-row logo__cogs">
            <i class="fa fa-cog" aria-hidden="true"></i>
            <div class="flex-column logo__small-cogs">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <i class="fa fa-cog" aria-hidden="true"></i>
            </div>
        </div>
        <div class="flex-row logo__name">L2wt</div>
        <div class="flex-row logo__name-second">.ru</div>
    </a>
    <div class="flex-column breadcrubs">
        <h1 class="breadcrubs__title"><?= Yii::$app->view->params['title'] ?? ''; ?></h1>
        <?php echo BradcrumbsWidget::widget() ?>
    </div>
    <button class="flex-column header__button" aria-label="Меню"><span class="header__button-item"></span></button>
    <nav class="flex-row header__nav">
        <ul class="flex-row header__list">
            <?php
            if (Yii::$app->view->params['canonical'] == 'https://l2wt.ru/') {
                echo '';
            } else {
                echo '<li class="header__item"><a href="' . Yii::$app->urlManager->createUrl(['/']) . '" class="header__link">Главная</a></li>';
            }
            ?>
            <li class="header__item">
                <a href="<?= Yii::$app->urlManager->createUrl(['/blog']) ?>" class="header__link">Наш блог</a>
            </li>
            <li class="header__item">
                <a href="<?= Yii::$app->urlManager->createUrl(['/contacts']) ?>" class="header__link">Контакты</a>
            </li>
            <li class="header__item">
                <a href="<?= Yii::$app->urlManager->createUrl(['/advertising']) ?>" class="header__link">Реклама</a>
            </li>
            <li class="header__item header__item-add">
                <a href="<?= Yii::$app->urlManager->createUrl(['/add']) ?>" class="header__link header__link-add">Добавить проект</a>
            </li>
        </ul>
    </nav>
</header>