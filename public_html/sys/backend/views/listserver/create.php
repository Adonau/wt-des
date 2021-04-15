<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Listserver */

$this->params['breadcrumbs'][] = ['label' => 'Список серверов', 'url' => ['index']];
?>
<div class="listserver-create flex-column">
    <?php $this->title = 'Зарегестрировать Сервер'; ?>
    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
