<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flex-column page">

    <?php $form = ActiveForm::begin(['id' => 'w0','options' => ['autocomplete' => 'off']]); ?>

    <?= $form->field($model, 'link_news')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_news',['inputOptions' => ['class' => 'form-control date-picker'],])->textInput() ?>

    <?= $form->field($model, 'text_news')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
