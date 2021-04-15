<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RatePages */

$this->title = 'Создание страницы с рейтами';
$this->params['breadcrumbs'][] = ['label' => 'Список страниц', 'url' => ['index']];
?>
<div class="flex-column rate-pages-create">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
