<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Advertising */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flex-column page">

    <?php $form = ActiveForm::begin(); ?>

    <div class="flex-column container--price">
        <h2>Цена баннеров</h2>
        <?= $form->field($model, 'small_banner')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'big_banner')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'header_banner')->textInput(['maxlength' => true]) ?>
    </div>
    
    <div class="flex-column container--price phavor--price">
        <h2>Цена фаворит</h2>
        <?= $form->field($model, 'price__phavorit')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="flex-column container--price top--price">
        <h2>Цена топ серверов</h2>
        <?= $form->field($model, 'price__top')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'price__top_two')->textInput(['maxlength' => true]) ?>

        <h2>Цена топ серверов со скидкой</h2>
        <?= $form->field($model, 'price_top_econ')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'price_top_two_econ')->textInput(['maxlength' => true]) ?>
    </div>
      
    <div class="flex-column container--price vip--price">
        <h2>Цена вип серверов</h2>
        <?= $form->field($model, 'price__vip')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'price__vip_two')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'price__vip_three')->textInput(['maxlength' => true]) ?>

        <h2>Цена вип серверов со скидкой</h2>
        <?= $form->field($model, 'price_vip_econ')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'price_vip_two_econ')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'price_vip_three_econ')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="flex-column container--price">
        <h2>Реквезиты вебманей</h2>
        <?= $form->field($model, 'web__money__rub')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'web__money__ue')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="form-group container--price">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>