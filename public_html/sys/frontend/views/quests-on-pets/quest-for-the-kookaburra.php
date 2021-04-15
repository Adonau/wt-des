<?php

/* @var $this yii\web\View */

Yii::$app->view->params['canonical'] = 'https://l2wt.ru/blog/quests-on-pets/quest-for-the-kookaburra';
$this->title = 'Квест на Кукабарру (Курицу) Lineage 2 в картинках | L2wt.ru';
$this->registerMetaTag(['name' => 'description', 'content' => 'Квест на Кукабарру Lineage 2 в картинках, с подробным пошаговым описанием всех этапов.']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'Квесты на Кукабарру л2, квест на Кукабарру л2 в картинках']);
Yii::$app->view->params['title'] = 'Квест на Кукабарру Л2';
Yii::$app->view->params['undertitle'] = 'Квест на Кукабарру Л2';
?>

<div class="flex-column page blog darck--border kook--page">

    <img src="/image/quest_img/quest_kookaburra/baby_kookabura.jpg" alt="Baby Kookabura Lineage 2">

    <p class="blog__text-intro">Кукабарра это достойный помощник в фарме и пвп, главной задачей этой курицы является баффать своего хозяина, заливать ему ману и регенерировать хп, как атакующий питомец не представляет интереса.</p>

    <h2 class="headline blog__title">Этапы квеста на Кукабарру в картинках</h2>

    <div class="flex-row blog__text-container">
        <img class="blog__image-quest" src="/image/quest_img/quest_kookaburra/lundy.jpg" alt="Pet Manager Lundy">
        <div class="flex-column blog__text-container-inner">
            <ul class="blog__text-list">
                <li class="blog__text-item">Название квеста : <b>Help the Son (Помощь сыну)</b>.</li>
                <li class="blog__text-item">Доступность по уровню : <b>С 24 уровня</b>.</li>
            </ul>
            <p class="blog__text-quest">1) Квест берётся у <b>Pet Manager Lundy (Управляющий питомцами Лунди)</b> в <b>Town of Gludio (город Глудио)</b>. Она попросит вас принести <b>Work Hammer (Рабочий Молот)</b>, для добычи которого вам придётся убить нескольких монстров.</p>
        </div>
    </div>

    <div class="flex-row blog__text-container">
        <p class="blog__text-quest">2) Выходим с <b>Town of Gludio (город Глудио)</b> через западные ворота и находим недалеко от города монстров <b>Maille Lizardmen</b> и <b>Maille Lizardmen Guard</b> выбиваем с них <b>30 Broken Gemstone Fragment (Фрагмент разбитого драгоценного камня)</b>. Возвращаемся к <b>Lundy (Лунди)</b> отдаём выбитое и получаем взамен <b>Gold Colored Gemstone (Золотой Драгоценный Камень)</b>.</p>
        <img class="blog__image-quest" src="/image/quest_img/quest_kookaburra/maille_lizardman_guard.jpg" alt="Maille Lizardmen and Maille Lizardmen Guard">
    </div>

    <div class="flex-row blog__text-container">
        <img class="blog__image-quest" src="/image/quest_img/quest_kookaburra/drikus.jpg" alt="High Prefect Drikus">
        <p class="blog__text-quest">3) C имеющимся у нас <b>Gold Colored Gemstone (Золотой Драгоценный Камень)</b> мы направляемся к <b>High Prefect Drikus (Понтифик Орков Дрикус)</b> и говорим с ним, он находится так же в Глудио недалеко от Warehouse (Склад).</p>
    </div>

    <div class="flex-row blog__text-container">
        <p class="blog__text-quest">4) После разговора с Орком возвращаемся обратно к Лунди и получаем заветный <b>Pet Exchange Ticket: Kookaburra (Замена Питомца: Кукабарра)</b>. Не отходя от Лунди обмениваем этот билет на Кукабарру. <br><br>Изначальный уровень курица 24 и придётся её прокачивать.</p>
        <img class="blog__image-quest" src="/image/quest_img/quest_kookaburra/lundy.jpg" alt="Pet Manager Lundy">
    </div>

    <a class="blog__button-quest" href="<?= Yii::$app->urlManager->createUrl(['/blog/quests-on-pets']) ?>" title="Все квесты на питомцев Lineage 2">Все квесты на петов</a>
</div>