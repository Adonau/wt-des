<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DatePages */

$this->title = 'Создание страницы с датами';
$this->params['breadcrumbs'][] = ['label' => 'Список страниц', 'url' => ['index']];
?>
<div class="flex-column date-pages-create">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
