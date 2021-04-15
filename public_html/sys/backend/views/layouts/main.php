<?php

/* @var $this \yii\web\View */
/* @var $content string */
$this->title = 'Админ панель La2wt';
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use backend\widgets\MenuAcardeonWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
  <div class="flex--column wrapper--content">
    <header class="flex-row header">
        <?php
          if (Yii::$app->user->isGuest) {
              $menuItems[] = ['label' => 'Signup', 'url' => ['site/signup']];
              $menuItems[] = ['label' => 'Login', 'url' => ['site/login']];
          } else {
              $menuItems[] = '<div class="flex-row wrapper--button-logout">'
                  . Html::beginForm(['site/logout'], 'post')
                  . Html::submitButton(
                      'Выйти (' . Yii::$app->user->identity->username . ')',
                      ['class' => 'button-logout']
                  )
                  . Html::endForm()
                  . '</div>';
          }
           foreach ($menuItems as $key) {
             echo $key;
           }
        ?>
    </header>
    <div class="flex-row gray--border inner--content-part">
      <?= MenuAcardeonWidget::widget() ?>
      <div class="flex-column wrapper--pages">
          <?= Breadcrumbs::widget([
              'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
          ]) ?>
          <?= Alert::widget() ?>
          <?= $content ?>
      </div>
    </div>
  </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
