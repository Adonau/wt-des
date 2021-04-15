<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Imagearticle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flex-column page">

    <?php $form = ActiveForm::begin(['id' => 'w0','options' => ['autocomplete' => 'off']]); ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_head')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_content')->textarea(['rows' => 6]) ?>
    
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
