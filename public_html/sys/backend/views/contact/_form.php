<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Contact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flex-column page">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icq')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teleg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_one')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other__two')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other__three')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
