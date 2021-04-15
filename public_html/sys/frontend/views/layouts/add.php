<?php
/* @var $this \yii\web\View */
/* @var $content string */
use frontend\controllers\SiteController;
use yii\helpers\Html;

use common\widgets\Alert;

use frontend\widgets\HeaderimageWidget;
use frontend\widgets\HeaderWidget;
use frontend\widgets\AsideWidget;
use frontend\widgets\StaticWidget;
use frontend\widgets\BigbannerWidget;
use frontend\widgets\TextWidget;
use frontend\widgets\FooterWidget;
use frontend\metrikwidget\YandexWidget;
use frontend\metrikwidget\GoogleWidget;
use frontend\metrikwidget\MetaWidget;
use frontend\assets\AppAsset;

use PHPUnit\Framework\Constraint\IsEmpty;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<?= MetaWidget::widget() ?>
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<link rel="canonical" href="<?= Yii::$app->view->params['canonical'] ?? ''; ?>" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/ico">
	<?php $this->head() ?>
	<?= GoogleWidget::widget() ?>
	<?= YandexWidget::widget() ?>
</head>
<body>
	<?php $this->beginBody() ?>
	<?= Alert::widget() ?>
	<?= HeaderImageWidget::widget() ?>
	<?= HeaderWidget::widget() ?>
	<div class="aside_empty"></div>
	<div class=" flex-row wrapper add_container gray--border">
		<div class="flex-column main">
			<?= TextWidget::widget() ?>
			<div class="flex-column main__inner">
				<?= $content ?>
			</div>
		</div>
		<button id="go-top" class="buttton-up" aria-label="Наверх">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</button>
	</div>
	<?= FooterWidget::widget() ?>
	<div class="image-bottom"></div>
	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>   