<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DatePages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flex-column page rate-pages-form page--form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="flex-column pages--site-attr ">
        <?= $form->field($model, 'name_page')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'canonical')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'title_page')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'description_page')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'key_words_page')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'heading_h1')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'under_title')->textInput(['maxlength' => true]) ?>
    </div>

    <?= $form->field($model, 'heading_h1_text')->textarea(['rows' => 6]) ?>

    <div class="flex-row wrapper--button-h">
        <span class="h--button h2-h1--button">h1</span>
        <span class="h--button h2-h2--button">h2</span>
        <span class="h--button h2-h3--button">h3</span>
        <span class="h--button h2-h4--button">h4</span>
        <span class="h--button h2-h5--button">h5</span>
        <span class="h--button h2-h6--button">h6</span>
        <span class="h--button h2-clear clear">Очистить</span>
    </div>

    <?= $form->field($model, 'heading_h2')->textInput(['maxlength' => true, 'id' => 'h2']) ?>

    <?= $form->field($model, 'heading_h2_text')->textarea(['rows' => 6]) ?>

    <div class="flex-row wrapper--button-h">
        <span class="h--button h3-h1--button">h1</span>
        <span class="h--button h3-h2--button">h2</span>
        <span class="h--button h3-h3--button">h3</span>
        <span class="h--button h3-h4--button">h4</span>
        <span class="h--button h3-h5--button">h5</span>
        <span class="h--button h3-h6--button">h6</span>
        <span class="h--button h3-clear clear">Очистить</span>
    </div>

    <?= $form->field($model, 'heading_h3')->textInput(['maxlength' => true, 'id' => 'h3']) ?>

    <?= $form->field($model, 'heading_h3_text')->textarea(['rows' => 6]) ?>

    <div class="flex-row wrapper--button-h">
        <span class="h--button h4-h1--button">h1</span>
        <span class="h--button h4-h2--button">h2</span>
        <span class="h--button h4-h3--button">h3</span>
        <span class="h--button h4-h4--button">h4</span>
        <span class="h--button h4-h5--button">h5</span>
        <span class="h--button h4-h6--button">h6</span>
        <span class="h--button h4-clear clear">Очистить</span>
    </div>

    <?= $form->field($model, 'heading_h4')->textInput(['maxlength' => true, 'id' => 'h4']) ?>

    <?= $form->field($model, 'heading_h4_text')->textarea(['rows' => 6]) ?>

    <div class="flex-row wrapper--button-h">
        <span class="h--button h5-h1--button">h1</span>
        <span class="h--button h5-h2--button">h2</span>
        <span class="h--button h5-h3--button">h3</span>
        <span class="h--button h5-h4--button">h4</span>
        <span class="h--button h5-h5--button">h5</span>
        <span class="h--button h5-h6--button">h6</span>
        <span class="h--button h5-clear clear">Очистить</span>
    </div>

    <?= $form->field($model, 'heading_h5')->textInput(['maxlength' => true, 'id' => 'h5']) ?>

    <?= $form->field($model, 'heading_h5_text')->textarea(['rows' => 6]) ?>

    <div class="flex-row wrapper--button-h">
        <span class="h--button h6-h1--button">h1</span>
        <span class="h--button h6-h2--button">h2</span>
        <span class="h--button h6-h3--button">h3</span>
        <span class="h--button h6-h4--button">h4</span>
        <span class="h--button h6-h5--button">h5</span>
        <span class="h--button h6-h6--button">h6</span>
        <span class="h--button h6-clear clear">Очистить</span>
    </div>

    <?= $form->field($model, 'heading_h6')->textInput(['maxlength' => true, 'id' => 'h6']) ?>

    <?= $form->field($model, 'heading_h6_text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>