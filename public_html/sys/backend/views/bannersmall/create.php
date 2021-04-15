<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Bannersmall */

$this->params['breadcrumbs'][] = ['label' => 'К списку', 'url' => ['index']];
?>
<?php $this->title = 'Создать массив асайд баннера'; ?>
<div class="bannersmall-create flex-column">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    
</div>
