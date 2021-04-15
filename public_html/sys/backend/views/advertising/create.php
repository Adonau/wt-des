<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Advertising */

$this->title = 'Создать Advertising';
$this->params['breadcrumbs'][] = ['label' => 'К списку', 'url' => ['index']];
?>
<div class="advertising-create flex-column">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
