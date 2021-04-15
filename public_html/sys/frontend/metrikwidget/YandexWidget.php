<?php

namespace frontend\metrikwidget;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

class YandexWidget extends Widget
{
    public function run()
    {
        return $this->render('yandex');
    }
}
