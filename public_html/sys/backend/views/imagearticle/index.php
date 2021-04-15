<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ImagearticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Основное изображение';
$this->params['breadcrumbs'][] = ['label' => 'Все изображения', 'url' => ['site/images']];
?>
<div class="flex-column page page--imagearticle">
 
    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать массив изображений', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'url:url',
            'link',
            'text_head:ntext',
            'text_content:ntext',
            'date_start',
            'date_end',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

    <div class="wrap--banner-add flex-column">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'form-banner']]) ?>
          <h2 class="title--center-gold">Загрузка главный банера</h2>

            <div class="flex-column add--wrap--input">
                <input type="file" id="uploadform-imagefile" name="UploadArticle[imageFile]" class="inputfile">
                <label for="uploadform-imagefile" class="label__input flex-row">
                    <div class="btn__opas btn__shadov">Выберите файл</div> 
                    <span></span>
                </label>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>

        <?php ActiveForm::end() ?>

        <?php foreach ($img as $i):?>

        <div class="wrapper--image flex-column">
            <a href="<?= $i->link ?>" target="_blank" style="background-image: url(<?php echo Yii::getAlias('@imagesb/'.$i->url.'') ?>)" class="flex-row">               
            </a>
        </div>            
        <?php endforeach;?>

    </div>
</div>
