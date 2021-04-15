<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\TextPagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Текст и заголовки';
?>
<ul class="breadcrumb">
    <li>
        <a href="<?=Yii::$app->urlManager->createUrl(['/'])?>">Главная</a>
    </li>
</ul>
<div class="flex-column page page--text">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Править текста и заголовки', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'definition_pages',
            // 'title_pages',
            // 'text_pages:ntext',
            // 'title_num2',
            // 'text_num2:ntext',
            // 'title_num3',
            // 'text_num3:ntext',
            // 'title_num4',
            // 'text_num4:ntext',
            // 'title_num5',
            // 'text_num5:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
