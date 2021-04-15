<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model common\models\Listserver */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flex-column page listserver-form">

    <?php $form = ActiveForm::begin(['id' => 'w0', 'options' => ['autocomplete' => 'off', 'class' => 'simple--server']]); ?>

    <div class="flex-column wrapper--section-input">
        <span class="title--center-gold">Статус сервера</span>
        <div class="flex-row inner--input">
            <?= $form->field($model, 'status')->dropdownList([
                'wsimple_server' => 'simple_server',
                'vip_server' => 'vip_server',
                'top_server' => 'top_server',
                'phavorit_server' => 'phavorit_server'
            ])->label('Статус сервера(по нему идет сортировка)') ?>

            <?= $form->field($model, 'icon_star')->dropdownList([
                '' => 'Пустое значени',
                '3' => 'Для Вип серверов',
                '2' => 'Для Топ серверов',
                '1' => 'Для фаворитов проекта',
            ])->label('Иконка Статусов') ?>
        </div>
        <div class="flex-row inner--input">
            <?= $form->field($model, 'icon_money')->dropdownList([
                '' => 'Пустое значени',
                '1' => 'Для Высокобюджетных серверов',
            ])->label('Иконка Высокобюджетные') ?>
        </div>
        <div class="flex-row inner--input">
            <?= $form->field($model, 'date_start', ['inputOptions' => ['class' => 'form-control date-picker'],])->textInput()->label('Начало оплаты') ?>
            <?= $form->field($model, 'date_end', ['inputOptions' => ['class' => 'form-control date-picker'],])->textInput()->label('Конец оплаты') ?>
        </div>
    </div>

    <div class="flex-column wrapper--section-input">
        <span class="title--center-gold">Название, url, хроники и рейты </span>
        <div class="flex-row inner--input">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Название сервера') ?>
            <?= $form->field($model, 'url')->textInput(['maxlength' => true])->label('Url Адресс сервера') ?>
        </div>
        <div class="flex-row inner--input">
            <?= $form->field($model, 'chronicle')->dropdownList([
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
                'Fafurion' => 'Fafurion',
                'Prelude' => 'Prelude',
                'Homunculus' => 'Homunculus',
                'Custom' => 'Custom',
            ])->label('Хроники сервера') ?>
            <?= $form->field($model, 'rate')->Input(['maxlength' => true])->label('Рейты сервера') ?>
        </div>
        <?= $form->field($model, 'date', ['inputOptions' => ['class' => 'form-control date-picker'],])->textInput()->label('Дата открытия сервера') ?>
    </div>
    <div class="flex-column wrapper--section-input">
        <span class="title--center-gold">Обт и Бонусы старта</span>

        <div class="flex-row inner--input">
            <?= $form->field($model, 'icon_obt')->dropdownList([
                '' => 'Пустое значени',
                '1' => 'Иконка ОБТ',
            ])->label('Иконка ОБТ') ?>

            <?= $form->field($model, 'icon_bonus')->dropdownList([
                '' => 'Пустое значени',
                '1' => 'Иконка Бонус старта',
            ])->label('Иконка БОНУСЫ СТАРТА') ?>
        </div>

        <div class="flex-row inner--input">
            <?= $form->field($model, 'text_obt')->textarea(['rows' => 6]) ?>
            <?= $form->field($model, 'text_bonus')->textarea(['rows' => 6]) ?>
        </div>
    </div>
    <div class="flex-column wrapper--section-input">
        <span class="title--center-gold">Тип сервера</span>
        <div class="flex-row inner--input">
            <?= $form->field($model, 'icon_dp')->dropdownList([
                '' => 'Пустое значени',
                '1' => 'Иконка Сервер с дополнениями',
            ])->label('Иконка Сервер с дополнениями') ?>
            <?= $form->field($model, 'icon_kraft')->dropdownList([
                '' => 'Пустое значени',
                '1' => 'Крафт сервера',
            ])->label('Крафт сервер') ?>
        </div>
        <?= $form->field($model, 'text_dop')->textarea(['rows' => 6]) ?>
        <div class="flex-row inner--input">
            <?= $form->field($model, 'icon_mul')->dropdownList([
                '' => 'Пустое значени',
                '1' => 'Мультипрофа',
            ])->label('Иконка Мультипрофа') ?>

            <?= $form->field($model, 'icon_rvr')->dropdownList([
                '' => 'Пустое значени',
                '1' => 'РвР',
            ])->label('Иконка РвР') ?>
        </div>
        <div class="flex-row inner--input">
            <?= $form->field($model, 'icon_gve')->dropdownList([
                '' => 'Пустое значени',
                '1' => 'ГвЕ',
            ])->label('Иконка ГвЕ') ?>
            <?= $form->field($model, 'icon_lang')->dropdownList([
                '' => 'Пустое значени',
                '1' => 'Англ язык',
            ])->label('Иконка Англ языка') ?>

        </div>
        <div class="flex-row inner--input">
            <?= $form->field($model, 'icon_pts')->dropdownList([
                '' => 'Пустое значени',
                '1' => 'ПТС сервер',
            ])->label('Иконка ПТС серверов') ?>
            <?= $form->field($model, 'icon_bot')->dropdownList([
                '' => 'Пустое значени',
                '1' => 'Сервер с Ботом',
            ])->label('Иконка БОТ серверов') ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>