<?php
/* @var $this yii\web\View */
Yii::$app->view->params['canonical'] = 'https://l2wt.ru/advertising';
$this->title = 'Реклама серверов Lineage 2 на портале L2wt.ru';
$this->registerMetaTag(['name' => 'description', 'content' => 'На этой странице вы можете ознакомиться с ценами на размещение вашего проекта на нашем портале.']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'Реклама на L2wt.ru, реклама серверов л2']);
Yii::$app->view->params['title'] = 'Реклама серверов Л2 на L2wt.ru';
Yii::$app->view->params['undertitle'] = 'Цены на размещение вашего проекта';
?>

<div class="flex-column page page_adv darck--border">

	<?php foreach ($contact as $cont) : ?>
		<div class="flex-row requisites_section">

			<div class="flex-column requisites_item requisites_ru">
				<span class="requisites_text">WMR - <?= $cont->other_one ?></span>
			</div>

			<div class="flex-column requisites_item requisites_usd">
				<span class="requisites_text">WMZ - <?= $cont->other__two ?></span>
			</div>

			<div class="flex-column requisites_item requisites_qiwi">
				<span class="requisites_text">QIWI - <?= $cont->other__three ?></span>
			</div>

		</div>
	<?php endforeach; ?>

	<p class="adv_text">К оплате по выше указанным реквизитам прикрепляйте сообщение в произвольной форме, какой статус или место под баннер вы решили приобрести и для какого проекта, в обязательном порядке укажите с какого числа вы хотите чтобы работал выбранный вами статус.</p>

	<h2 class="headline simple_a-title">Реклама на нашем портале</h2>

	<?php foreach ($adv as $ad) : ?>

		<div class="flex-column adv_section gray--border">
			<div class="adv_section-title darck--border">Баннер в шапке сайта :</div>

			<ul class="flex-column adv_list">
				<li class="adv_item">Размер баннера(px) : <span>минимальный 1920х600.</span></li>
				<li class="adv_item">Расширения : <span>jpg, png.</span></li>
				<li class="adv_item">Максимальный вес : <span>500кб.</span></li>
				<li class="adv_item">30 дней &nbsp - &nbsp <span><?= $ad->header_banner ?>.</span></li>
				<li class="margin--item adv_item danger--item"><span>Недопустимо</span> : слишком яркие цвета, анимация.</li>
			</ul>

		</div>

		<div class="flex-column adv_section gray--border">
			<div class="adv_section-title darck--border">Баннер над списком серверов :</div>

			<ul class="flex-column adv_list">
				<li class="adv_item">Размер баннера(px) : <span>минимальный 930х300.</span></li>
				<li class="adv_item">Расширения : <span>jpg, png.</span></li>
				<li class="adv_item">Максимальный вес : <span>300кб.</span></li>
				<li class="adv_item">30 дней &nbsp - &nbsp <span><?= $ad->big_banner ?>.</span></li>
				<li class="margin--item adv_item danger--item"><span>Недопустимо</span> : слишком яркие цвета, анимация.</li>
				<li class="adv_item"><span>В плашке баннера может размещаться любой текст.</span></li>
			</ul>

		</div>

		<div class="flex-column adv_section gray--border">
			<div class="adv_section-title darck--border">Баннер в левом меню :</div>

			<ul class="flex-column adv_list">
				<li class="adv_item">Размер баннера(px) : <span>240х400.</span></li>
				<li class="adv_item">Расширения : <span>gif, png, jpg.</span></li>
				<li class="adv_item">Максимальный вес : <span>200кб.</span></li>
				<li class="adv_item">30 дней &nbsp - &nbsp <span><?= $ad->small_banner ?>.</span></li>
				<li class="margin--item adv_item danger--item"><span>Недопустимо</span> : слишком яркие цвета, анимация c частым миганием.</li>
			</ul>

		</div>

		<div class="flex-column adv_section gray--border">
			<div class="flex-row adv_section-title darck--border">Премиум статус :</div>

			<div class="flex-column adv_list-container darck--border">

				<div class="flex-row server__container phavorit_server">

					<div class="server__element server__star-icon">
						<i class="fa fa-star" aria-hidden="true"></i>
						<div class="flex-column dropdown">
							<div class="dropdown__title">ПРЕМИУМ сервер</div>
						</div>
					</div>

					<div class="server__element server__url-container">
						<div class="server__url" target="_blank" rel="nofollow">Server</div>
					</div>

					<div class="server__element server__budget-icon">
						<i class="fa fa-btc" aria-hidden="true"></i>
						<div class="flex-column dropdown">
							<div class="dropdown__title">Высокобюджетный Сервер</div>
							<div class="dropdown__text">Высокий бюджет на рекламу.</div>
						</div>
					</div>

					<div class="server__element server__rate">x11</div>

					<div class="flex-row server__element server__chronicle-container">
						<div class="server__element server__chronicle">Interlude</div>
					</div>

					<div class="server__element server__date">пт. 20.03.2020</div>

				</div>

				<ul class="phavorit--list">
					<li class="adv_item">Позиция в премиум блоке : <span>возглавляет.</span></li>
					<li class="adv_item">Дублируется :<span> да.</span></li>
					<li class="adv_item">Размещение кнопки: <span>не требуется.</span></li>
					<li class="margin--item adv_item">
						<span>Если при переходе из левого в правый блок позиция фаворит будет занята, то сервер переносится в TOP статус, оставшийся срок увеличивается в 2 раза.</span>
					</li>
					<li class="margin--item adv_item">Позиций на сайте : <span>В левом и правом блоке по одной позиции.</span></li>
					<li class="adv_item">
						В левом &nbsp &nbsp - &nbsp
						<span>
							<?php

							$sum_one = 0;
							foreach ($list_earlier as $stat) {
								if (($stat->status == 'phavorit_server') && ($stat->date >= date('Y-m-d')) && ($stat->date_end > date('Y-m-d'))) {
									$stat = 1;
									$sum_one +=  $stat;
								}
							}

							if ($sum_one > 0) {
								echo 'Место занято';
							} else {
								echo 'Место свободно';
							}
							?>
						</span>
					</li>
					<li class="adv_item">
						В правом &nbsp - &nbsp
						<span>
							<?php

							$sum = 0;
							foreach ($list_earlier as $stat) {
								if (($stat->status == 'phavorit_server') && ($stat->date < date('Y-m-d')) && ($stat->date_end > date('Y-m-d'))) {
									$stat = 1;
									$sum +=  $stat;
								}
							}

							if ($sum > 0) {
								echo 'Место занято';
							} else {
								echo 'Место свободно';
							}
							?>
						</span>
					</li>
					<li class="margin--item adv_item">30 дней &nbsp - &nbsp <span><?= $ad->price__phavorit ?>.</span></li>
				</ul>
			</div>
		</div>

		<div class="flex-column adv_section gray--border">

			<div class="flex-row adv_section-title darck--border">Топ статус :</div>

			<div class="flex-column adv_list-container darck--border">

				<div class="flex-row server__container top_server">

					<div class="server__element server__star-icon">
						<i class="fa fa-star-half-o" aria-hidden="true"></i>
						<div class="flex-column dropdown">
							<div class="dropdown__title">ТОП сервер</div>
						</div>
					</div>

					<div class="server__element server__url-container">
						<div class="server__url" target="_blank" rel="nofollow">Server</div>
					</div>

					<div class="server__element server__budget-icon">
						<i class="fa fa-btc" aria-hidden="true"></i>
						<div class="flex-column dropdown">
							<div class="dropdown__title">Высокобюджетный Сервер</div>
							<div class="dropdown__text">Высокий бюджет на рекламу.</div>
						</div>
					</div>

					<div class="server__element server__rate">x11</div>

					<div class="flex-row server__element server__chronicle-container">
						<div class="server__element server__chronicle">Interlude</div>
					</div>

					<div class="server__element server__date">пт. 20.03.2020</div>

				</div>

				<ul class="top--list">
					<li class="adv_item">Позиция в премиум блоке : <span>находится в премиум блоке.</span></li>
					<li class="adv_item">Дублируется : <span>да.</span></li>
					<li class="adv_item">Дизайн : <span>более контрастный по сравнению с ВИП и обычными серверами.</span></li>
					<li class="adv_item">Размещение кнопки : <span>не требуется.</span></li>
					<li class="margin--item adv_item">Позиций на сайте : <span>16.</span></li>
					<li class="adv_item">
						Занято позиций :
						<span>
							<?php $sum = 0; ?>

							<?php foreach ($list_earlier as $serv) {

								if ($serv->status == 'top_server') {

									if ($serv->getStatus($serv->date_end) != 'simple__server') {

										$serv = 1;
										$sum += $serv;
									}
								}
							}
							echo $sum; ?>.</span>
					</li>
					<li class="adv_item margin--item">30 дней &nbsp - &nbsp <span><?= $ad->price__top ?>.</span></li>
					<li class="adv_item">15 дней &nbsp - &nbsp <span><?= $ad->price__top_two ?>.</span></li>
					<li class="adv_item margin--item"><span>Эконом размещение (с добавлением кнопки на ваш сайт).</span></li>
					<li class="adv_item margin--item">30 дней &nbsp - &nbsp <span><?= $ad->price_top_econ ?>.</span></li>
					<li class="adv_item">15 дней &nbsp - &nbsp <span><?= $ad->price_top_two_econ ?>.</span></li>
				</ul>
			</div>
		</div>

		<div class="flex-column adv_section gray--border">

			<div class="flex-row adv_section-title darck--border">Вип статус :</div>

			<div class="flex-column adv_list-container darck--border">

				<div class="flex-row server__container vip_server">

					<div class="server__element server__star-icon">
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<div class="flex-column dropdown">
							<div class="dropdown__title">ВИП сервер</div>
						</div>
					</div>

					<div class="server__element server__url-container">
						<div class="server__url" target="_blank" rel="nofollow">Server</div>
					</div>

					<div class="server__element server__rate">x11</div>

					<div class="flex-row server__element server__chronicle-container">
						<div class="server__element server__chronicle">Interlude</div>
					</div>

					<div class="server__element server__date">пт. 20.03.2020</div>

				</div>

				<ul class="vip--list">
					<li class="adv_item">Позиция : <span>В общем потоке.</span></li>
					<li class="adv_item">Дублируется : <span>нет.</span></li>
					<li class="adv_item">Дизайн : <span>более контрастный по сравнению с обычными серверами.</span></li>
					<li class="adv_item">Размещение кнопки : <span>не требуется.</span></li>
					<li class="margin--item adv_item">Позиций на сайте : <span>неограниченно.</span></li>
					<li class="margin--item adv_item">30 дней &nbsp - &nbsp <span><?= $ad->price__vip ?>.</span></li>
					<li class="adv_item">15 дней &nbsp - &nbsp <span><?= $ad->price__vip_two ?>.</span></li>
					<li class="adv_item">10 дней &nbsp - &nbsp <span><?= $ad->price__vip_three ?>.</span></li>
					<li class="adv_item margin--item"><span>Эконом размещение (с добавлением кнопки на ваш сайт).</span></li>
					<li class="adv_item margin--item">30 дней &nbsp - &nbsp <span><?= $ad->price_vip_econ ?>.</span></li>
					<li class="adv_item">15 дней &nbsp - &nbsp <span><?= $ad->price_vip_two_econ ?>.</span></li>
					<li class="adv_item">10 дней &nbsp - &nbsp <span><?= $ad->price_vip_three_econ ?>.</span></li>
				</ul>
			</div>
		</div>

	<?php endforeach; ?>
</div>