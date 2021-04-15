<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TextPages */

$this->title = 'Обновление заголовки и текст : ' . $model->definition_pages;
$this->params['breadcrumbs'][] = ['label' => 'Текста', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->definition_pages, 'url' => ['view', 'id' => $model->id]];
?>
<div class="text-pages-update flex-column">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>