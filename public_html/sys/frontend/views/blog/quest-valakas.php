<?php

/* @var $this yii\web\View */

Yii::$app->view->params['canonical'] = 'https://l2wt.ru/blog/quest-valakas';
$this->title = 'Квест на Валакаса в картинках';
$this->registerMetaTag(['name' => 'description', 'content' => 'Квеста на Валакаса в картинках и с полным пошаговым описанием.']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'Квест на Валакаса, квест на проход к Валакасу']);
Yii::$app->view->params['title'] = 'Квест на Валакаса в картинках';
Yii::$app->view->params['undertitle'] = 'Квеста на проход к Валакасу';
?>

<div class="flex-column page blog darck--border">

    <img src="/image/quest_img/quest_valacas/Valakas.jpg" alt="Valakas Lineage 2">

    <p class="blog__text-intro">Валакас (Valakas) это один из шести драконов сын Шилен и Гран Кайна, эпический рейд босс. Имеет заветный дроп в виде кулона Валакаса и различного обмундирования, объект многих бессонных ночей и жарких битв. Довольно неприятный для убийства благодаря скилам массового фира, урон по площади огнём, постоянно появляются мобы в виде мелких голов дракона.</p>
    <h2 class="headline blog__title">Квест на Валакаса</h2>

    <div class="flex-row blog__text-container">
        <img class="blog__image-quest" src="/image/quest_img/quest_valacas/klein.jpg" alt="klein image, lineage2">

        <div class="flex-column blog__text-container-inner">
            <ul class="blog__text-list">
                <li class="blog__text-item">Название квеста : <b>Into the Flames (Прямиком в пламя)</b>.</li>
                <li class="blog__text-item">Доступность по уровню : <b>С 60 уровня</b>.</li>
                <li class="blog__text-item">Примечания : <b>В хрониках High Five и выше квест итем остаётся у игрока.</b>.</li>
            </ul>
            <p class="blog__text-quest">1) Квест берётся у npc <b>Klein</b> находится в локации города <b>Goddard - Forge of Gods (Кузница Богов)</b>.
                Волею судеб оказываемся около входа в пещеру <b>Forge of Gods (Кузница Богов)</b>. Прыгаем вниз или спускаемся по витому спуску, бежим прямо, пробегаем мост, в первой и других комнатах нас ждут агрессивные социальные мобы. <br><br> Используем на себя любой скилл(свитки, что угодно) полностью убирающий агрессию мобов, пробегаем комнату, поворачиваем налево бежим, потом всё время на право как указанно на карте. <br><br>Добежав до круга поворачиваем направо пробегаем 1/4 и видим npc <b>Klein</b> по левую руку от нас.</p>
        </div>

    </div>

    <div class="flex-row blog__text-container">
        <p class="blog__text-quest">2) После того как взяли квест у <b>Klein'на</b> делаем сое, оказываемся в <b>Goddard</b>, бежим в кузницу (blacksmith) отыскиваем там кузнеца <b>Hilda</b> говорим с ней, она просит нас принести 50шт <b>Vacualite ore (Руда Вакуалита)</b>.</p>
        <img class="blog__image-quest" src="/image/quest_img/quest_valacas/Hilda.jpg" alt="hilda image, goddard lineage2">
    </div>

    <div class="flex-column blog__text-container blog__text-container-column">
        <p class="blog__text-quest"><b>Vacualite ore (Руда Вакуалита)</b> выбивается с мобов: <b>Kookaburra (Кукабарра)</b>, <b>Bandersnatch (Драколов)</b>, <b>Grendel (Грендель)</b>.</p>

        <div class="flex-row blog__image-container blog__image-container-tr">
            <img class="blog__image-quest" src="/image/quest_img/quest_valacas/kookaburra.jpg" alt="Kookaburra image, lineage2">
            <img class="blog__image-quest" src="/image/quest_img/quest_valacas/Bandersnatch.jpg" alt="Bandersnatch image, lineage2">
            <img class="blog__image-quest" src="/image/quest_img/quest_valacas/Grendel2.jpg" alt="Grendel image, lineage2">
        </div>

    </div>

    <div class="flex-column blog__text-container blog__text-container-column">
        <p class="blog__text-quest">5) По завершению сбора квест итемов, возвращаемся обратно к <b>Hilda</b> она нам выдаст <b>Vacualite(Вакуалит)</b>, летим в <b>Forge of Gods(Кузница Богов)</b> отдаём <b>Vacualite(Вакуалит) Klein'ну</b> он обменяет его на <b>Vacualite Floating Stone(Парящий Камень Вакуалита)</b>.<br><br><b>Вот и весь квест, по сравнению с тарасом быстрый и лёгкий</b>.</p>
        <div class="flex-row blog__image-container">
            <img class="blog__image-quest" src="/image/quest_img/quest_valacas/Hilda.jpg" alt="hilda image, goddard lineage2">
            <img class="blog__image-quest" src="/image/quest_img/quest_valacas/klein.jpg" alt="klein image, lineage2">
        </div>
    </div>

    <a class="blog__button-quest" href="<?= Yii::$app->urlManager->createUrl(['/blog']) ?>" title="Все квесты Lineage 2">Все квесты</a>
</div>