<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RatePages */

$this->title = 'Обновление страницы: ' . $model->name_page;
$this->params['breadcrumbs'][] = ['label' => 'К списку страниц', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name_page, 'url' => ['view', 'id' => $model->name_page]];
?>
<div class="flex-column rate-pages-update">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
