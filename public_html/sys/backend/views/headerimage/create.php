<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HeaderImage */

$this->title = 'Создать изображение в хедере';
$this->params['breadcrumbs'][] = ['label' => 'К списку', 'url' => ['index']];
?>
<div class="flex-column header-image-create">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
