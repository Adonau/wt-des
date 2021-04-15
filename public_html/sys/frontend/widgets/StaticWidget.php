<?php 
namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Listserver;
use \yii\widgets\Menu;

class StaticWidget extends Widget
{
  public function run()
  {
    $static = Listserver::find()->all();

    return $this->render
        ('staticwidget',
            ['static' => $static]
        );         
  }
}