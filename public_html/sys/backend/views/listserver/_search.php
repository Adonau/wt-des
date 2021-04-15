<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ListserverSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="listserver-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'status') ?>

    <?php // $form->field($model, 'name') ?>

    <?= $form->field($model, 'chronicle') ?>

    <?= $form->field($model, 'rate') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // $form->field($model, 'date_start') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'date_end') ?>

    <?php // echo $form->field($model, 'icon_obt') ?>

    <?php // echo $form->field($model, 'icon_bonus') ?>

    <?php // echo $form->field($model, 'icon_dp') ?>

    <?php // echo $form->field($model, 'icon_mul') ?>

    <?php // echo $form->field($model, 'icon_rvr') ?>

    <?php // echo $form->field($model, 'icon_gve') ?>

    <?php // echo $form->field($model, 'icon_lang') ?>

    <?php // echo $form->field($model, 'icon_star') ?>

    <?php // echo $form->field($model, 'icon_money') ?>
    
    <?php // echo $form->field($model, 'text_obt') ?>

    <?php // echo $form->field($model, 'text_bonus') ?>

    <?php // echo $form->field($model, 'text_dop') ?>

    <?php // echo $form->field($model, 'icon_kraft') ?>
    
    <?php // echo $form->field($model, 'icon_pts') ?>
    
    <?php // echo $form->field($model, 'icon_bot') ?>
    
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

