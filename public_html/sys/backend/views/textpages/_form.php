<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TextPages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flex-column page">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'definition_pages')->dropdownList([
        'index' => 'Index',
        'Interlude' => 'Interlude',
        'Epilogue' => 'Epilogue',
        'C4' => 'C4',
        'High Five' => 'High Five',
        'GoD' => 'GoD',
        'Lindvior' => 'Lindvior',
        'Gracia Final' => 'Gracia Final',
        'Freya' => 'Freya',
        'Helios' => 'Helios',
        'Classic' => 'Classic',
        'Ertheia' => 'Ertheia',
        'Gr.Crusade' => 'Gr.Crusade',
        'Salvation' => 'Salvation',
        'Odyssey' => 'Odyssey',
        'Orfen' => 'Orfen',
        'Craft' => 'Craft',
        'Foreign' => 'Foreign',
        'Gve' => 'Gve',
        'budget' => 'budget',
        'lowrate' => 'lowrate',
        'midrate' => 'midrate',
        'multa' => 'multa',
        'obt' => 'obt',
        'bonuses' => 'bonuses',
        'pvp' => 'pvp',
        'rvr' => 'rvr',
        'additions' => 'additions',
    ])->label('Для каких страниц') ?>
    <div class="flex-column wrapper--title-chenge">
        <div class="flex-row wrapper--title-h">
            <span class="h1">h1</span>
            <span class="h2">h2</span>
            <span class="h3">h3</span>
            <span class="h4">h4</span>
            <span class="h5">h5</span>
            <span class="h6">h6</span>
            <span class="clear">Очистить</span>
        </div>

        <?= $form->field($model, 'title_pages')->textInput(['maxlength' => true]) ?>
    </div>
    <?= $form->field($model, 'text_pages')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_num2')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'text_num2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_num3')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'text_num3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_num4')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'text_num4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_num5')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'text_num5')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>