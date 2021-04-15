<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RatePagesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rate-pages-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_page') ?>

    <?= $form->field($model, 'title_page') ?>

    <?= $form->field($model, 'description_page') ?>

    <?= $form->field($model, 'key_words_page') ?>

    <?= $form->field($model, 'heading_h1') ?>

    <?php // echo $form->field($model, 'heading_h1_text') ?>

    <?php // echo $form->field($model, 'heading_h2') ?>

    <?php // echo $form->field($model, 'heading_h2_text') ?>

    <?php // echo $form->field($model, 'heading_h3') ?>

    <?php // echo $form->field($model, 'heading_h3_text') ?>

    <?php // echo $form->field($model, 'heading_h4') ?>

    <?php // echo $form->field($model, 'heading_h4_text') ?>

    <?php // echo $form->field($model, 'heading_h5') ?>

    <?php // echo $form->field($model, 'heading_h5_text') ?>

    <?php // echo $form->field($model, 'heading_h6') ?>

    <?php // echo $form->field($model, 'heading_h6_text') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
