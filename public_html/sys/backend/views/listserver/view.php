<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Listserver */

$this->params['breadcrumbs'][] = ['label' => 'К списку', 'url' => ['index']];
\yii\web\YiiAsset::register($this);
$this->title = $model->name;
?>
<div class="listserver-view flex-column">
    <?php $this->title = $model->name; ?>
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
            'status',
            'name',
            'chronicle',
            'rate',
            'date',
            'url:url',
            'date_start',
            'date_end',
            'icon_obt',
            'icon_bonus',
            'icon_star',
            'icon_money',
            'icon_dp',
            'icon_mul',
            'icon_rvr',
            'icon_gve',
            'icon_lang',
            'icon_kraft', 
            'icon_pts',
            'icon_bot',
            'text_obt', 
            'text_bonus', 
            'text_dop'
        ],
    ]) ?>

</div>