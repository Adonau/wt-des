<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Listserver */

$this->title = 'Обновление Сервера : ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Список серверов', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
?>
<div class="listserver-update flex-column">
   
    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
   
</div>
