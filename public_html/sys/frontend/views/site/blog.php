<?php
/* @var $this yii\web\View */
Yii::$app->view->params['canonical'] = 'https://l2wt.ru/blog';
$this->title = 'Квесты л2 в картинках | Полезные квесты л2 | L2wt.ru';
$this->registerMetaTag(['name' => 'description', 'content' => 'Важные квесты Л2 в картинках и с полным пошаговым описанием. Квесты Lineage 2 на различную тематику, с адаптацией к хроникам High Five, Interlude и другим.']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'Квесты л2 в картинках, квесты л2, квесты lineage 2, квесты л2 хф, квесты lineage 2 high five, квесты л2 интерлюд, квесты lineage 2 interlude']);
Yii::$app->view->params['title'] = 'Важные квесты Л2';
Yii::$app->view->params['undertitle'] = 'Полезные квесты Lineage 2';
?>
<div class="flex-column page blog darck--border">

    <h2 class="headline blog__title">Квесты Lineage 2</h2>

    <p class="blog__text">Важной составляющей Lineage 2 являются квесты и походы на рейд боссов. В этом разделе мы постарались изложить материал не в сухом остатке, а с наиболее полным описанием, естественно, подкрепив картинками. База квестов будет постоянно пополняться не только квестами на проход к эпикам, но и полезными в плане материального обогащения, также квесты будут адаптироваться к различным хроникам, таким как High Five, Interlude, GoD и к другим.</p>

    <div class="flex-row blog__container-list">

        <ul class="flex-column blog__list blog__list-left">

            <li class="flex-row blog__item">
                <a href="<?= Yii::$app->urlManager->createUrl(['blog/quests-on-pets']) ?>" class="flex-row blog__link">
                    <span class="blog__link-span">Квесты на питомцев</span>
                    <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                </a>
            </li>

        </ul>

        <ul class="flex-column blog__list blog__list-right">

            <li class="flex-row blog__item">
                <a href="<?= Yii::$app->urlManager->createUrl(['blog/quest-antharas']) ?>" class="flex-row blog__link">
                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    <span class="blog__link-span">Квест на проход к Антарасу</span>
                </a>
            </li>

            <li class="flex-row blog__item">
                <a href="<?= Yii::$app->urlManager->createUrl(['blog/quest-valakas']) ?>" class="flex-row blog__link">
                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    <span class="blog__link-span">Квест на проход к Валакасу</span>
                </a>
            </li>

        </ul>

    </div>

</div>