<?php 
namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Bannersmall;
use common\models\Listserver;
use \yii\widgets\Menu;

class AsideWidget extends Widget
{
  public function run()
  {
    $asidabanner = Bannersmall::find()->all();
    $aside_link = Listserver::find()->all();

    return $this->render
        ('asidewidget',
             [
              'aside' => $asidabanner,
              'aside_link' => $aside_link
             ]
        );   	     
  }
}
