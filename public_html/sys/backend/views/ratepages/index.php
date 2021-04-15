<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\RatePagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Страницы с Рейтами';
?>
<ul class="breadcrumb">
    <li>
        <a href="<?=Yii::$app->urlManager->createUrl(['/'])?>">Главная</a>
    </li>
</ul>
<div class="flex-column page rate-pages-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать страницу с рейтами', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name_page',
            'canonical',
            'title_page',
            'description_page:ntext',
            'key_words_page:ntext',
            'heading_h1',
            //'heading_h1_text:ntext',
            //'heading_h2',
            //'heading_h2_text:ntext',
            //'heading_h3',
            //'heading_h3_text:ntext',
            //'heading_h4',
            //'heading_h4_text:ntext',
            //'heading_h5',
            //'heading_h5_text:ntext',
            //'heading_h6',
            //'heading_h6_text:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
