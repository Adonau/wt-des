<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [   
        'css/main.css',
        'css/fonts.css',
        'css/bootstrap.css',
        'css/font-awesome.min.css',
        'css/jquery-ui.css',
    ];
    public $js = [
        'js/jquery-ui.min.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
