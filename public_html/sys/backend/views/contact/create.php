<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Contact */

$this->title = 'Создать Contact';
$this->params['breadcrumbs'][] = ['label' => 'К списку', 'url' => ['index']];
?>
<div class="contact-create flex-column">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
