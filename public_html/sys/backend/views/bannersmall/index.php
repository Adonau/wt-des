<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel common\models\BannersmallSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = ['label' => 'Все изображения', 'url' => ['site/images']];
?>
<?php $this->title = 'Асайд гиф'; ?>
<div class="flex-column page page--banner-small">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать массив Гиф', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'bannerUrl',
            'bannerLink',
            'date_start',
            'date_end',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
    
    <div class="flex-row wrap--banner-add">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'form-add']]) ?>
            <h2 class="title--center-gold">Загрузка гиф банера</h2>

            <div class="flex-column add--wrap--input">
                <input type="file" id="uploadform-imagefile" name="UploadForm[imageFile]" class="inputfile">
                <label for="uploadform-imagefile" class="add--label-input flex-row">
                </label>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>
        <?php ActiveForm::end() ?>

        <?php foreach ($img as $i):?>
            <img src="<?php echo Yii::getAlias('@images/' .$i->bannerUrl.' '); ?>" class="image__aside flex-row">
        <?php endforeach;?>

    </div>

</div>
