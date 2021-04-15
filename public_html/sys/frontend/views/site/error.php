<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
Yii::$app->view->params['title'] = 'Страницы не существует 404';
Yii::$app->view->params['undertitle'] = 'Такой страницы не существует';
?>
<div class="flex-column darck--border site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Со скорбью в душе и со слезами на глазах сообщаем. Страница которую вы запрашиваете не существует.
    </p>

    <a title="Показ всех серверов" href="<?= Yii::$app->urlManager->createUrl(['/']) ?>">Перейти на главную</a>


</div>
