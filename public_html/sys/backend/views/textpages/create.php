<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TextPages */

$this->params['breadcrumbs'][] = ['label' => 'Список всех текстов', 'url' => ['index']];
?>
<div class="text-pages-create flex-column">
    <?php $this->title = 'Весь текст и заголовки на страницах'; ?>
    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
