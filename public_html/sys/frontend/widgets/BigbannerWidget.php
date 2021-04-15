<?php 
namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Imagearticle;


class BigbannerWidget extends Widget
{
  public function run()
  {
    $imagebg = Imagearticle::find()->all();

    return $this->render
        ('bigbanner',
            ['images' => $imagebg]
        );   	     
  }
}