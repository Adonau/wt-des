<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TypePages */

$this->title = 'Обновление страницы : ' . $model->name_page;
$this->params['breadcrumbs'][] = ['label' => 'Список серверов', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name_page, 'url' => ['view', 'id' => $model->name_page]];
?>
<div class="type-pages-update flex-column">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
