<?php
/* @var $this yii\web\View */
include(Yii::getAlias('@app/includefunctions/functionservers.php'));
?>

<?php foreach ($pages as $page) : ?>
	<?php
	Yii::$app->view->params['canonical'] = $page->canonical;
	$this->title = $page->title_page;
	$this->registerMetaTag(['name' => 'description', 'content' => $page->description_page]);
	$this->registerMetaTag(['name' => 'keywords', 'content' => $page->key_words_page]);
	Yii::$app->view->params['title'] = $page->heading_h1;
	Yii::$app->view->params['undertitle'] = $page->under_title;
	?>
	<div class="flex-row page page--server">
		<div class="flex-column page--server-content server--content-left">
			<div class="headline server--headline">Сервера ожидающие открытия</div>
			<?= text_lack_of_servers($list_earlier_vip, $list_already_vip, $list_earlier, $list_already); ?>
			<?= vip_earlier_open($list_earlier_vip); ?>
			<?= today($list_earlier); ?>
			<?= tomorrow($list_earlier); ?>
			<?= next_7_days($list_earlier); ?>
			<?= after_7_days($list_earlier); ?>
			<?= after_month($list_earlier); ?>
		</div>
		<div class="flex-column page--server-content server--content-right">
			<div class="headline server--headline">Сервера которые открылись</div>
			<?= text_lack_of_servers($list_earlier_vip, $list_already_vip, $list_earlier, $list_already); ?>
			<?= vip_alredy_open($list_already_vip); ?>
			<?= yesterday($list_already); ?>
			<?= last_week($list_already); ?>
			<?= week_ago($list_already); ?>
			<?= month_ago($list_already); ?>
		</div>
	</div>
	<?php
	Yii::$app->view->params['title-h1'] = '';
	Yii::$app->view->params['text-h1'] = $page->heading_h1_text;
	Yii::$app->view->params['title-h2'] = $page->heading_h2;
	Yii::$app->view->params['text-h2'] = $page->heading_h2_text;
	Yii::$app->view->params['title-h3'] = $page->heading_h3;
	Yii::$app->view->params['text-h3'] = $page->heading_h3_text;
	Yii::$app->view->params['title-h4'] = $page->heading_h4;
	Yii::$app->view->params['text-h4'] = $page->heading_h4_text;
	Yii::$app->view->params['title-h5'] = $page->heading_h5;
	Yii::$app->view->params['text-h5'] = $page->heading_h5_text;
	Yii::$app->view->params['title-h6'] = $page->heading_h6;
	Yii::$app->view->params['text-h6'] = $page->heading_h6_text;
	?>
<?php endforeach; ?>