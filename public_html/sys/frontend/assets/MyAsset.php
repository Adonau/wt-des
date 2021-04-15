<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MyAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/jquery-ui.css',
        'css/nice-select.css',
    ];
    public $js = [       
        'js/jquery-ui.min.js',
        'js/jquery.nice-select.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}