<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Advertising */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'К списку', 'url' => ['index']];
\yii\web\YiiAsset::register($this);
?>
<div class="advertising-view flex-column base-hight-bgcolo-border">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
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
            'web__money__rub',
            'web__money__ue',
        ],
    ]) ?>

</div>
