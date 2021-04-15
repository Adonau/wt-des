<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TextPagesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="text-pages-search flex-column">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'definition_pages') ?>

    <?= $form->field($model, 'title_pages') ?>

    <?= $form->field($model, 'text_pages') ?>

    <?= $form->field($model, 'title_num2') ?>

    <?= $form->field($model, 'text_num2') ?>

    <?= $form->field($model, 'title_num3') ?>

    <?= $form->field($model, 'text_num3') ?>

    <?= $form->field($model, 'title_num4') ?>

    <?= $form->field($model, 'text_num4') ?>

    <?= $form->field($model, 'title_num5') ?>

    <?= $form->field($model, 'text_num5') ?>


    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>