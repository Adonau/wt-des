<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Vopros */

$this->title = 'Обновление Вопроса: ' . $model->vopros;
$this->params['breadcrumbs'][] = ['label' => 'Список Вопросов', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
?>
<div class="listserver-update flex-column">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
