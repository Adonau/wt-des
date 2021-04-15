<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TextPages */

$this->params['breadcrumbs'][] = ['label' => 'К списку текстов', 'url' => ['index']];
\yii\web\YiiAsset::register($this);
?>
<div class="listserver-view flex-column base-hight-bgcolo-border">

    <h1 class="title--center-gold"><?= Html::encode($model->definition_pages) ?></h1>

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
            'definition_pages',
            'title_pages',
            'text_pages:ntext',
            'title_num2',
            'text_num2:ntext',
            'title_num3',
            'text_num3:ntext',
            'title_num4',
            'text_num4:ntext',
            'title_num5',
            'text_num5:ntext',
        ],
    ]) ?>

</div>