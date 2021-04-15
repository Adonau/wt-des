<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Bannersmall */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flex-column page">

    <?php $form = ActiveForm::begin(['id' => 'w0','options' => ['autocomplete' => 'off']]); ?>

    <?= $form->field($model, 'bannerUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bannerLink')->textInput(['maxlength' => true]) ?>

    <div class="date_end_start flex-column">
        <h2>Дата старта оплаты и окончания</h2>

        <?= $form->field($model, 'date_start',['inputOptions' => ['class' => 'form-control date-picker'],])->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'date_end',['inputOptions' => ['class' => 'form-control date-picker'],])->textInput(['maxlength' => true]) ?>

    </div>
  
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
