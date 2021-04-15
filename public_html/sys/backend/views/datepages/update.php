<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DatePages */

$this->title = 'Обновление страницы: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Date Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name_page, 'url' => ['view', 'id' => $model->name_page]];
?>
<div class="flex-column date-pages-update">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
