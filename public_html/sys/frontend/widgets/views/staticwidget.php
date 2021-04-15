<?php
$time_st_end = strtotime("-60 day");
$true_st_date_end = date("Y-m-d", $time_st_end);
?>
<div class="flex-column statistic gray--border">
	<div class="flex-column statistic__inner darck--border">
		<div class="headline statistic__title">Навигация по популярным разделам</div>
		<div class="flex-row statistic__wrapper-list">
			<ul class="flex-column statistic__list">
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера которые сегодня откроются" href="<?= Yii::$app->urlManager->createUrl(['opening-date/today']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">Сегодня откроются</div>
						<?php
						$sum = 0;
						foreach ($static as $stat) {
							if ($stat->date == date('Y-m-d')) {
								$stat = 1;
								$sum +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера которые откроются завтра" href="<?= Yii::$app->urlManager->createUrl(['opening-date/tomorrow']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">Завтра откроются</div>
						<?php
						$time = strtotime("+1 day");
						$fecha = date("Y-m-d", $time);
						$sum = 0;
						foreach ($static as $stat) {
							if ($stat->date == $fecha) {
								$stat = 1;
								$sum +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера которые вчера открылись" href="<?= Yii::$app->urlManager->createUrl(['opening-date/yesterday']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">Вчера открылись</div>
						<?php
						$time = strtotime("-1 day");
						$fecha = date("Y-m-d", $time);
						$sum = 0;
						foreach ($static as $stat) {
							if ($stat->date == $fecha) {
								$stat = 1;
								$sum +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера которые откроются на этой неделе" href="<?= Yii::$app->urlManager->createUrl(['opening-date/next-week']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">На этой неделе</div>
						<?php
						$time = strtotime("+1 day");
						$true_date = date("Y-m-d", $time);
						$time2 = strtotime("+8 day");
						$true_date2 = date("Y-m-d", $time2);
						$sum = 0;
						foreach ($static as $stat) {
							if (($stat->date > $true_date) && ($stat->date <= $true_date2)) {
								$stat = 1;
								$sum +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера которые открылись на прошлой неделе" href="<?= Yii::$app->urlManager->createUrl(['opening-date/last-week']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">На прошлой неделе</div>
						<?php
						$time = strtotime("-1 day");
						$true_date = date("Y-m-d", $time);
						$time2 = strtotime("-8 day");
						$true_date2 = date("Y-m-d", $time2);
						$sum = 0;
						foreach ($static as $stat) {
							if (($stat->date >= $true_date2) && ($stat->date < $true_date)) {
								$stat = 1;
								$sum +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
			</ul>
			<ul class="flex-column statistic__list">
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера Интерлюд" href="<?= Yii::$app->urlManager->createUrl(['chronicles/interlude']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">Interlude</div>
						<?php
						$sum = 0;
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->chronicle == 'Interlude') && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								$stat = 1;
								$sum +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера Хай Фай" href="<?= Yii::$app->urlManager->createUrl(['chronicles/high-five']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">High Five</div>
						<?php
						$sum = 0;
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->chronicle == 'High Five') && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								$stat = 1;
								$sum +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера Грация Финал" href="<?= Yii::$app->urlManager->createUrl(['chronicles/gracia-final']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">Gracia Final</div>
						<?php
						$sum = 0;
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->chronicle == 'Gracia Final') && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								$stat = 1;
								$sum +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера Грация Эпилог" href="<?= Yii::$app->urlManager->createUrl(['chronicles/gracia-epilogue']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">Gracia Epilogue</div>
						<?php
						$sum = 0;
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->chronicle == 'Epilogue') && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								$stat = 1;
								$sum +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера Классик" href="<?= Yii::$app->urlManager->createUrl(['chronicles/classic']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">Classic</div>
						<?php
						$sum = 0;
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->chronicle == 'Classic') && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								$stat = 1;
								$sum +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
			</ul>
			<ul class="flex-column statistic__list">
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера РвР" href="<?= Yii::$app->urlManager->createUrl(['servers-type/rvr']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">RvR</div>
						<?php
						$sum = 0;
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->icon_rvr != NULL) && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								$stat = 1;
								$sum +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера ГвЕ" href="<?= Yii::$app->urlManager->createUrl(['servers-type/gve']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">GvE</div>
						<?php
						$sum = 0;
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->icon_gve != NULL) && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								$stat = 1;
								$sum +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера Мультипрофа" href="<?= Yii::$app->urlManager->createUrl(['servers-type/multiprof']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">Мультипрофа</div>
						<?php
						$sum = 0;
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->icon_mul != NULL) && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								$stat = 1;
								$sum +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера имеющие любые дополнения" href="<?= Yii::$app->urlManager->createUrl(['servers-type/servers-with-addition']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">С дополнениями</div>
						<?php
						$sumt = 0;
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->icon_dp != NULL) && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								$stat = 1;
								$sumt +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sumt . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Только мультикрафт сервера" href="<?= Yii::$app->urlManager->createUrl(['servers-type/craft-servers']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">Мультикрафт сервера</div>
						<?php
						$sumt = 0;
						$tm = strtotime("-75 day");
						$date_bl = date("Y-m-d", $tm);
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->icon_kraft !=  NULL) && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								$stat = 1;
								$sumt +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sumt . " " . 'серв.'; ?></div>
					</a>
				</li>
			</ul>
			<ul class="flex-column statistic__list">
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера с низкими рейтами" href="<?= Yii::$app->urlManager->createUrl(['servers-type/low-rate-servers']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">Лоу рейт сервера</div>
						<?php
						$sum = 0;
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->rate) >= 0 && ($stat->rate <= 15) && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								$stat = 1;
								$sum +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера со средними рейтами" href="<?= Yii::$app->urlManager->createUrl(['servers-type/mid-rate-servers']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<?php
						$sum = 0;
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->rate >= 16) && ($stat->rate <= 150) && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								$stat = 1;
								$sum +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-word">Мид рейт сервера</div>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера с высокими рейтами" href="<?= Yii::$app->urlManager->createUrl(['servers-type/pvp-servers']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">ПвП сервера</div>
						<?php
						$sum = 0;
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->rate >= 151 && $stat->rate <= 100000000) && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								$stat = 1;
								$sum +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
			</ul>
			<ul class="flex-column statistic__list">
				<li class="flex-row statistic__item statistic__item-gold">
					<a class="flex-row statistic__link" title="Лучшие сервера" href="<?= Yii::$app->urlManager->createUrl(['servers-type/high-budget']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">ТОП сервера</div>
						<?php
						$sum = 0;
						foreach ($static as $stat) {
							if (($stat->status == 'phavorit_server') + ($stat->status == 'top_server')) {
								if ($stat->getStatus($stat->date_end) != 'simple__server') {
									$stat = 1;
									$sum +=  $stat;
								}
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера с обт" href="<?= Yii::$app->urlManager->createUrl(['servers-type/obt']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">Открытый Бета Тест</div>
						<?php
						$sum = 0;
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->icon_obt !=  NULL) && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								if (date('Y-m-d') < $stat->date) {
									$stat = 1;
									$sum +=  $stat;
								}
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sum . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера с акциями и бонусами" href="<?= Yii::$app->urlManager->createUrl(['servers-type/promotions-and-bonuses']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">Акции и бонусы</div>
						<?php
						$sumt = 0;
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->icon_bonus != NULL) && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								$stat = 1;
								$sumt +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sumt . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Зарубежные сервера л2" href="<?= Yii::$app->urlManager->createUrl(['servers-type/foreign-servers']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">Зарубежные сервера</div>
						<?php
						$sumt = 0;
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->icon_lang != NULL) && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								$stat = 1;
								$sumt +=  $stat;
							}
						}
						?>
						<div class="flex-row statistic__link-num"><?= $sumt . " " . 'серв.'; ?></div>
					</a>
				</li>
				<li class="flex-row statistic__item">
					<a class="flex-row statistic__link" title="Сервера с высокими рейтами" href="<?= Yii::$app->urlManager->createUrl(['servers-type/pts-servers']) ?>">
						<span class="flex-row statistic__link-square"></span>
						<div class="flex-row statistic__link-word">PTS сервера</div>
						<?php
						$sumt = 0;
						foreach ($static as $stat) {
							if ($stat->date_end < date('Y-m-d')) {
								$status_static = 'wsimple_server';
							} else {
								$status_static = $stat->status;
							}
							if (($stat->icon_pts != NULL) && (($stat->date >= $true_st_date_end) || ($status_static != 'wsimple_server'))) {
								$stat = 1;
								$sumt += $stat;
							}
						} ?>
						<div class="flex-row statistic__link-num"><?= $sumt . " " . 'серв.'; ?></div>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>