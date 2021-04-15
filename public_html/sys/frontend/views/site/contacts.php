<?php
/* @var $this yii\web\View */
Yii::$app->view->params['canonical'] = 'https://l2wt.ru/contacts';
$this->title = 'Контакты администрации портала L2wt.ru';
$this->registerMetaTag(['name' => 'description', 'content' => 'На данной странице указаны все контакты администрации портала L2wt.ru']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'Контакты администрации портала L2wt.ru']);
Yii::$app->view->params['title'] = 'Наши контакты';
Yii::$app->view->params['undertitle'] = 'Наши контакты и реквизиты';

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<div class="flex-column darck--border page page_contacts">

    <?php foreach ($contact as $cont) : ?>

        <div class="headline contacts_title">Контакты и реквизиты</div>

        <div class="flex-row requisites_section">

            <span class="flex-row requisites_item requisites_mail">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="mailto:<?= $cont->mail ?>?subject=Вопрос по размещению проекта Lineage 2" class="mail_address"><?= $cont->mail ?></a>
            </span>

            <span class="flex-row requisites_item requisites_mail">
                <span class="icq_icon"></span>
                <span class="icq_num"><?= $cont->icq ?></span>
            </span>

            <span class="flex-row requisites_item requisites_vk">
                <i class="fa fa-vk icon_vk" aria-hidden="true"></i>
                <a href="<?= $cont->teleg ?>" target="_blank" class="icq_num">ВКОНТАКТЕ</a>
            </span>

        </div>

        <p>Для связи с администрацией платформы вы можете использовать данные указанные выше или написать нам напрямую, оставив свою почту и указав как к вам обращаться.</p>

    <?php endforeach; ?>
    <div class="flex-row contacts_form-container">
        <?php $form = ActiveForm::begin(['id' => 'contacts_form', 'options' => ['autocomplete' => 'off', 'class' => 'flex-column']]); ?>
        <?= $form->field($mesform, 'namemes')->label('Ваше имя')->textInput() ?>
        <?= $form->field($mesform, 'mailmes')->label('Ваша почта')->textInput() ?>
        <?= $form->field($mesform, 'bot')->label('Ваша Фамилия')->textarea() ?>
        <?= $form->field($mesform, 'textmes')->label('Сообщение')->textarea() ?>
        <?= Html::submitButton('Отправить сообщение', ['class' => 'btn--site contacts_button', 'name' => 'add-button']) ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>