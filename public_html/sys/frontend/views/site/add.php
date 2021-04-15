<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\AddForm */
Yii::$app->view->params['canonical'] = 'https://l2wt.ru/add';
$this->title = 'Регистрация сервера Lineage 2 на L2wt.ru';
$this->registerMetaTag(['name' => 'description', 'content' => 'Добавить сервер Lineage 2 в анонсер L2wt.ru. Регистрация серверов Lineage 2 на портал L2wt.ru.']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'Добавить сервер Lineage 2, регистрация сервера л2']);
Yii::$app->view->params['title'] = 'Регистрация сервера Lineage 2';
Yii::$app->view->params['undertitle'] = 'Регистрация сервера';
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\assets\MyAsset;
use yii\widgets\Pjax;
MyAsset::register($this);
?>
<div class="flex-column page page_add darck--border">

	<div class="flex-row headline add_title">Регистрация сервера</div>

	<div class="flex-row add_rules_area-container">

		<div class="flex-column add_rules-container gray--border">

			<div class="add_simple-title darck--border">Правила добавления</div>

			<ul class="flex-column add_rules-list">
				<li class="add_rules-item">Все сервера проходят модерацию.</li>
				<li class="add_rules-item">Для связи используйте <a href="<?= Yii::$app->urlManager->createUrl(['/contacts']) ?>" class="add_rules-link">наши контакты</a>.</li>
				<li class="add_rules-item">Не допускается плагиат в названии серверов, схожие url и копирование дизайна сайта.</li>
				<li class="add_rules-item">Администрация может отказать в размещении в большинстве случаев с уведомлением о причине на ваш email.</li>
				<li class="add_rules-item">Указанный email будет использоваться исключительно для обратной связи, в случаях невозможности размещения.</li>
				<li class="add_rules-item">После успешной регистрации вас перенаправит на страницу с ценами на размещение и имеющимися акциями.</li>
			</ul>
			
		</div>

		<div class="flex-column add_area-container gray--border">

			<div class="add_simple-title darck--border">Размещение с иконкой</div>

			<div class="flex-column add_area-inner darck--border">

				<p class="flex-column add_area-text">При размещении иконки на сайт вашего проекта вы получаете TOP-статус на четыре дня с момента публикации рекламы сервера, а также скидку на приобретение TOP и VIP статусов. Естественно, вы можете изменить любые парамеры иконки, кроме добавления редиректа.</p>

				<div class="flex-column add_area_icon-container">

					<div class="flex-row add_area-icon">
						<div class="add_area-icon_text">Образец :</div>
						<img class="add_area-icon_image" src="/image/iconl2wt/l2wt-icon.jpg" alt="L2wt.ru icon"></a>
					</div>

					<textarea id="add_textarea" readonly><a id="link_l2wt" href="https://l2wt.ru/" target="_blank" style="position: fixed; right: 25px; top: 25px; z-index: 99999;" title="Анонсы серверов Lineage 2, новые сервера л2" alt="Анонсы серверов Lineage 2, новые сервера л2"><img src="http://l2wt.ru/image/iconl2wt/l2wt-icon.jpg" alt="L2wt.ru icon" style="box-shadow: 0 0 2px 1px #000; height: 60px;"></a></textarea>

				</div>

			</div>

		</div>

	</div>

	<div class="flex-column add_forms-container">

		<div class="flex-column gray--border add_main-form-container">

			<div class="add_simple-title darck--border">Основная информация</div>

			<?php $form = ActiveForm::begin(['id' => 'form-add-server', 'options' => ['autocomplete' => 'off', 'class' => 'flex-row add_form']]); ?>

			<div class="flex-column add_input-container darck--border">

				<?= $form->field($addform, 'name')->label('Название сервера')->textInput(['minlength' => 2, 'maxlength' => 26]) ?>
				<?= $form->field($addform, 'url')->label('Url сайта сервера')->textInput() ?>
				<?= $form->field($addform, 'mail')->label('E-mail для обратной связи')->textInput() ?>
				<?= $form->field($addform, 'chronicle')->label('Хроники сервера')->dropdownList([
					'Interlude' => 'Interlude',
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
				]) ?>
				<?= $form->field($addform, 'rate')->label('Рейты сервера')->Input('number') ?>
				<?= $form->field($addform, 'date', ['inputOptions' => ['id' => 'datepicker', 'class' => 'form-control form--date'],])->label('Дата открытия') ?>

			</div>

			<div class="flex-row darck--border add_checkbox-container">

				<div class="flex-column add_checkbox-list">
					<?= $form->field($addform, 'obt')->label('ОБТ')->checkbox(['value' => 'да']) ?>
					<?= $form->field($addform, 'bonus')->label('Акции и бонусы')->checkbox(['value' => 'да']) ?>
					<?= $form->field($addform, 'dop')->label('Дополнения')->checkbox(['value' => 'да']) ?>
					<?= $form->field($addform, 'lang')->label('Foreign language')->checkbox(['value' => 'да']) ?>
				</div>

				<div class="flex-column add_checkbox-list">
					<?= $form->field($addform, 'rvr')->label('RvR')->checkbox(['value' => 'да']) ?>
					<?= $form->field($addform, 'gve')->label('GvE')->checkbox(['value' => 'да']) ?>
					<?= $form->field($addform, 'mult')->label('Мультипрофа')->checkbox(['value' => 'да']) ?>
					<?= $form->field($addform, 'kraft')->label('Мультикрафт')->checkbox(['value' => 'да']) ?>
					<?= $form->field($addform, 'bot')->label('Разрешён Бот')->checkbox(['value' => 'да']) ?>
				</div>

			</div>

		</div>

		<div class="flex-column add_detail-container gray--border">

			<div class="add_simple-title darck--border">Дополнительная информация</div>

			<div class="flex-column add_detail-form darck--border">
				<p>В данной секции вы можете указать дополнительные текстовые данные о вашем сервере. Все поля необязательны, но лучшим вариантом будет указать период ОБТ и какие-либо данные по дополнениям, это облегчит поиск и даст больше информации потенциальным игрокам.</p>
				<div class="flex-row detail_form">
					<?= $form->field($addform, 'textobt')->label('Дополнительная информация по ОБТ.')->textarea() ?>
					<?= $form->field($addform, 'textbonus')->label('Дополнителная информация по бонусам и акциям.')->textarea() ?>
					<?= $form->field($addform, 'textdop')->label('Дополнителная информация по дополнениям.')->textarea() ?>
				</div>
			</div>

		</div>
		<?= Html::submitButton('Отправить заявку', ['class' => 'flex-row btn--site add_button', 'name' => 'add-button']) ?>
		<?php ActiveForm::end(); ?>
	</div>
</div>
