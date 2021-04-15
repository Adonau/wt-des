<?php 
namespace backend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

class MenuAcardeonWidget extends Widget
{
  public function run()
  {
    return $this->render('menuacardeon');         
  }
}