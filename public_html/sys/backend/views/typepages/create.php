<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TypePages */

$this->title = 'Создание страницы с хрониками';
$this->params['breadcrumbs'][] = ['label' => 'Список страниц', 'url' => ['index']];
?>
<div class="flex-column type-pages-create">

<h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
