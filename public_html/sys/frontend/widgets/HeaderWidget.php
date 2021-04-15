<?php

namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Bannersmall;
use common\models\Listserver;

class HeaderWidget extends Widget
{
  public function run()
  {
    $info = Listserver::find()->all();

    return $this->render('header', ['info' => $info]);
  }
}