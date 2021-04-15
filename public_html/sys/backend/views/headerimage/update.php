<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HeaderImage */
$this->title = 'Обновить хедер изображение : ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'К списку', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
?>
<div class="flex-column header-image-update">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
