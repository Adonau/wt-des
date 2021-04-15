<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\AdvertisingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Реклама';
?>
<ul class="breadcrumb">
    <li>
        <a href="<?=Yii::$app->urlManager->createUrl(['/'])?>">Главная</a>
    </li>
</ul>
<div class="flex-column page page--advertising">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать массив рекламы', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'small_banner', 
            'big_banner',
            'header_banner',
            'price__phavorit',
            'price__top',
            'price__top_two',
            'price__vip',
            'price__vip_two',
            'price__vip_three',
            'price_top_econ', 
            'price_top_two_econ',
            'price_vip_econ',
            'price_vip_two_econ', 
            'price_vip_three_econ',
            // 'web__money__rub',
            // 'web__money__ue',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
