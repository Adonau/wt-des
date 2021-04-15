<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'К списку', 'url' => ['index']];
\yii\web\YiiAsset::register($this);
?>
<div class="news-view flex-column">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <div class="flex-row btn--viev-wrapper">
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'link_news',
            'date_news',
            'text_news:ntext',
        ],
    ]) ?>

</div>
