<?php 
namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Imagearticle;


class BradcrumbsWidget extends Widget
{
  public function run()
  {
    return $this->render
        ('brad');   	     
  }
}