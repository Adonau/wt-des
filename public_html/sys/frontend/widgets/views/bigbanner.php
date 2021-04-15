<?php 
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php foreach ($images as $url) : ?>
	<div class="flex-row main__image-wrapper">
	   <?php
		if ($url->date_end < date('Y-m-d')) {
			echo Html::tag('div', '', ['class' => 'flex--row main__image', 'style' => 'background-image: url(/image/bg_banner/bg-war.jpg);']);
		} else if ($url->date_end >= date('Y-m-d')) {
			echo Html::a('', Url::to($url->link), ['class' => 'flex--row main__image', 'target' => '_blank', 'rel' => 'nofollow','style' => 'background-image: url(/image/bg_banner/' . $url->url . ');']);
		}
		?>
		<div class="flex-column main__image-info">
			<div class="main__image-info-title"><?= $url->text_head ?></div>
			<div class="main__image-info-txt"><?= $url->text_content ?></div>
		</div>
	</div>
<?php endforeach; ?>