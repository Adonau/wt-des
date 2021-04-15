<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SiteBan */

$this->title = 'Забанить сайт';
$this->params['breadcrumbs'][] = ['label' => 'К списку', 'url' => ['index']];
?>
<div class="flex-column site-ban-create">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
