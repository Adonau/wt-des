<?php

use yii\helpers\Html;
?>

<?php
$item_one = '<li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrubs__item breadcrubs__item-first">
                <a class="breadcrubs__link" itemprop="item" title="Все сервера л2" href="' . Yii::$app->urlManager->createUrl(['/']) . '">
                    <span class="breadcrubs__span" itemprop="name">Все сервера Lineage 2</span>
                    <meta itemprop="position" content="1" />
                </a>
            </li>';

$item_two = '<li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrubs__item breadcrubs__item-second">
                <a class="breadcrubs__link" itemprop="item" title="Важные квесты л2" href="' . Yii::$app->urlManager->createUrl(['/blog']) . '">
                    <span class="breadcrubs__span" itemprop="name">Квесты л2 в картинках</span>
                    <meta itemprop="position" content="2" />
                </a>
            </li>';
$item_three =   '<li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrubs__item breadcrubs__item-third">
                    <a class="breadcrubs__link" itemprop="item" title="' . Yii::$app->view->params['title'] . '" href="' .  Yii::$app->view->params['canonical'] . '">
                        <span class="breadcrubs__span breadcrubs__span-gold" itemprop="name">' . Yii::$app->view->params['undertitle'] . '</span>
                        <meta itemprop="position" content="3" />
                    </a>
                </li>';
$item_three_2 =   '<li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrubs__item breadcrubs__item-third">
                    <a class="breadcrubs__link" itemprop="item" title="' . Yii::$app->view->params['title'] . '" href="' .  Yii::$app->view->params['canonical'] . '">
                        <span class="breadcrubs__span breadcrubs__span-gold" itemprop="name">' . Yii::$app->view->params['undertitle'] . '</span>
                        <meta itemprop="position" content="2" />
                    </a>
                </li>';
$item_three_4 =   '<li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrubs__item breadcrubs__item-four">
                <a class="breadcrubs__link" itemprop="item" title="' . Yii::$app->view->params['title'] . '" href="' .  Yii::$app->view->params['canonical'] . '">
                    <span class="breadcrubs__span breadcrubs__span-gold" itemprop="name">' . Yii::$app->view->params['undertitle'] . '</span>
                    <meta itemprop="position" content="4" />
                </a>
            </li>';
$item_four =  '<li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrubs__item breadcrubs__item-third">
                    <a class="breadcrubs__link" itemprop="item" title="Важные квесты л2" href="' . Yii::$app->urlManager->createUrl(['blog/quests-on-pets']) . '">
                        <span class="breadcrubs__span" itemprop="name">Квесты на всех питомцев л2</span>
                        <meta itemprop="position" content="3" />
                    </a>
                </li>';
?>


<ul itemscope="" itemtype="http://schema.org/BreadcrumbList" class="flex-row breadcrubs__list">
    <?php
    if (Yii::$app->view->params['undertitle'] == 'index') {
        echo $item_one;
    } else if (strpos(Yii::$app->view->params['canonical'], 'anth') or strpos(Yii::$app->view->params['canonical'], 'val')) {
        echo $item_one;
        echo $item_two;
        echo $item_three;
    } else if (strpos(Yii::$app->view->params['canonical'], 'quests-on-pets/quest-for')) {
        echo $item_one;
        echo $item_two;
        echo $item_four;
        echo $item_three_4;
    } else if (strpos(Yii::$app->view->params['canonical'], 'quests-on-pets')) {
        echo $item_one;
        echo $item_two;
        echo $item_three;
    } else if (Yii::$app->view->params['undertitle'] != '<b>Новые и открывшиеся сервера Lineage 2</b>') {
        echo $item_one;
        echo $item_three_2;
    }
    ?>
</ul>
