<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AdvertisingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advertising-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'small_banner') ?>

    <?= $form->field($model, 'big_banner') ?>
    
    <?= $form->field($model, 'header_banner') ?>
 
    <?= $form->field($model, 'price__phavorit') ?>

    <?= $form->field($model, 'price__top') ?>

    <?= $form->field($model, 'price__top_two') ?>

    <?= $form->field($model, 'price__vip') ?>

    <?php // echo $form->field($model, 'price_top_econ') ?>

    <?php // echo $form->field($model, 'price_top_two_econ') ?>

    <?php // echo $form->field($model, 'price_vip_econ') ?>

    <?php // echo $form->field($model, price_vip_two_econ') ?>

    <?php // echo $form->field($model, 'price_vip_three_econ') ?>
    
    <?php // echo $form->field($model, 'price__vip_two') ?>

    <?php // echo $form->field($model, 'price__vip_three') ?>

    <?php // echo $form->field($model, 'web__money__rub') ?>

    <?php // echo $form->field($model, 'web__money__ue') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
