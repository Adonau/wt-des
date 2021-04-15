<?php 
namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Bannersmall;
use \yii\widgets\Menu;

class SmallBannerWidget extends Widget
{
  public function run()
  {
    $asidabanner = Bannersmall::find()->all();

    return $this->render
        ('small-banner',
            ['aside' => $asidabanner]
        );   	     
  }
}