<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\RatePages */

$this->title = $model->name_page;
$this->params['breadcrumbs'][] = ['label' => 'К списку страниц', 'url' => ['index']];
\yii\web\YiiAsset::register($this);
?>
<div class="flex-column rate-pages-view">

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
            'name_page',
            'canonical',
            'title_page',
            'description_page:ntext',
            'key_words_page:ntext',
            'heading_h1',
            'under_title',
            'heading_h1_text:ntext',
            'heading_h2',
            'heading_h2_text:ntext',
            'heading_h3',
            'heading_h3_text:ntext',
            'heading_h4',
            'heading_h4_text:ntext',
            'heading_h5',
            'heading_h5_text:ntext',
            'heading_h6',
            'heading_h6_text:ntext',
        ],
    ]) ?>

</div>
