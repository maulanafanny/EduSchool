<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        [
            'href' => 'favicon.ico',
            'rel' => 'icon',
            'sizes' => '32x32',
        ],
        'css/site.css',
        'css/bootstrap.css',
        'css/flexslider.css',
        'css/font-awesome.min.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery-1.10.2.js',
        'js/bootstrap.js',
        'js/jquery.flexslider.js',
        'js/scrollReveal.js',
        'js/jquery.easing.min.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
