<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Vopros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flex-column page">
    
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vopros')->textarea(['rows' => 6])->label('Вопрос') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
