<?php 
namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

class ButtonServerWidget extends Widget
{
  public function run()
  {
    return $this->render('buttonserver');   	     
  }
}