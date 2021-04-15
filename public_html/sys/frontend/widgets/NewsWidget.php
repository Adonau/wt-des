<?php 
namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\News;
use common\models\Listserver;
use \yii\widgets\Menu;

class NewsWidget extends Widget
{
  public function run()
  {
    $newsserver = Listserver::find()->all();
    $newsall = News::find()->all();

    return $this->render
        ('newswidget',['newsall' => $newsall]+['newsserver' => $newsserver]);   	     
  }
}