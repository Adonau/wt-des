<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ListserverSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список серверов';
?>
<ul class="breadcrumb">
    <li>
        <a href="<?=Yii::$app->urlManager->createUrl(['/'])?>">Главная</a>
    </li>
</ul>
<div class="flex-column page page--servers">
     
    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Зарегестрировать Сервер', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'url:url',
            [
              'attribute' => 'chronicle',
              'value' => function ($model, $key)
              {
                 return "Хроники : " . $model->chronicle;  
                 
              }
            ],
            [
              'attribute' => 'rate',
              'value' => function ($model, $key)
              {
                 return "Рейты : " . $model->rate;  
                 
              }
            ],
            [
                'attribute' => 'date',  
                'value' => function ($model, $key)
                    {
                        if ($model->date < date('Y-m-d')) {
                          return $model->date . " Открылся";
                        }else{
                          return $model->date . " Не открылся";  
                        }  
                    }
            ],
            [
              'attribute' => 'status',
              'value' => function ($model, $key)
              {
                if($model->status =='phavorit_server'){
                  return 'Фаворит статус';
                }else if($model->status =='top_server'){
                  return 'Топ статус';
                }else if($model->status =='vip_server'){
                  return 'Вип статус';
                }else{
                  return 'Не имеет статуса'; 
                }
              }
            ],
            [
                'attribute' => 'date_end',
                'value' => function ($model, $key)
                    {
                        if($model->date_end == null){
                          return $model->date_end . " Не было оплаты";  
                        }
                        if ($model->date_end > date('Y-m-d')) {
                          return $model->date_end . " Действует";
                        }else{
                          return $model->date_end . " Кончилась";  
                        }  
                    }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
