<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Vopros */

$this->params['breadcrumbs'][] = ['label' => 'Список Вопросов', 'url' => ['index']];
$this->title = 'Создать вопрос';
?>
<div class="listserver-create flex-column">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
