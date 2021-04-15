<?php 
namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Contact;


class FooterWidget extends Widget
{
  public function run()
  {   
    $contact = Contact::find()->all();

    return $this->render('footer',['contact' => $contact,]);         
  }
}