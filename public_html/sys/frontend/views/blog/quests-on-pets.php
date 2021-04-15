<?php

/* @var $this yii\web\View */

Yii::$app->view->params['canonical'] = 'https://l2wt.ru/blog/quests-on-pets';
$this->title = 'Квесты на питомцев Lineage 2 | L2wt.ru';
$this->registerMetaTag(['name' => 'description', 'content' => 'Различные квесты на всех питомцев в Lineage 2. Квесты на ездовых питомце Lineage 2']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'Квесты на питомцев л2, квесты на питомцев lineage 2, квесты на ездовых питомцев л2, квесты на петов л2']);
Yii::$app->view->params['title'] = 'Квесты на питомцев л2';
Yii::$app->view->params['undertitle'] = 'Квесты на всех питомцев л2';
?>
<div class="flex-column page blog darck--border">

    <h2 class="headline blog__title">Квесты на всех питомцев Л2</h2>

    <p class="blog__text">Питомцы в л2 это не только молчаливые спутники, составляющие нам компанию, но и полезный напарник, помогающий в облегчении игрового процесса. Питомцы бывают разных видов, наносящие урон и этим помогающие нам прокачивать персонажа, восстанавливающие жизни и ману, а также накладывающие вспомогательные эффекты на персонажа.<br><br>В данном разделе нашего блога мы опубликовали все доступные квесты на питомцев в л2, не зависимо от их видов и вспомогательных навыков.</p>

    <div class="flex-row blog__container-list">

        <ul class="flex-column blog__list blog__list-left">
            <li class="flex-row blog__item">
                <a  class="flex-row blog__link" href="<?= Yii::$app->urlManager->createUrl(['blog/quests-on-pets/quest-for-the-wolf']) ?>" title="Квест на волка Lineage 2">
                    <span class="blog__link-span">Квест на волка</span>
                    <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                </a>
            </li>
        </ul>

        <ul class="flex-column blog__list blog__list-right">
            <li class="flex-row blog__item">
                <a class="flex-row blog__link" href="<?= Yii::$app->urlManager->createUrl(['blog/quests-on-pets/quest-for-the-kookaburra']) ?>" title="Квест на Кукабурру Lineage 2">
                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    <span class="blog__link-span">Квест на Кукабурру</span>
                </a>
            </li>
        </ul>

    </div>

    <a class="flex-row blog__button" href="<?= Yii::$app->urlManager->createUrl(['/blog']) ?>" title="Все квесты Lineage 2">Все квесты</a>
</div>