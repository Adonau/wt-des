<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ImagearticleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="imagearticle-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'url') ?>

    <?= $form->field($model, 'link') ?>

    <?= $form->field($model, 'text_head') ?>

    <?= $form->field($model, 'text_content') ?>
    
    <?= $form->field($model, 'date_start') ?>

    <?= $form->field($model, 'date_end') ?>
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
