<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Bannersmall */


$this->params['breadcrumbs'][] = ['label' => 'К списку', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
?>
<?php $this->title = 'Обновить баннер гиф : ' . $model->id; ?>
<div class="bannersmall-update flex-column">

    <h1 class="title--center-gold"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
