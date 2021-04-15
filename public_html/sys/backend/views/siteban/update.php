<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SiteBan */

$this->title = 'Обновить данные о бане : ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'К списку', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
?>
<div class="flex-column site-ban-update">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
