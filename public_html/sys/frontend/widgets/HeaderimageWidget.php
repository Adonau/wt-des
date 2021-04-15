<?php

namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Headerimage;
use common\models\Listserver;

class HeaderimageWidget extends Widget
{
  public function run()
  {
    $imgheader = HeaderImage::find()->all();
    $info = Listserver::find()->all();


    return $this->render('headerimage', ['imgheader' => $imgheader, 'info' => $info]);
  }
}