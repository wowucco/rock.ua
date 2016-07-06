<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class MainAsset extends  AssetBundle{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'realestate/assets/style.css',
        'realestate/assets/owl-carousel/owl.carousel.css',
        'realestate/assets/owl-carousel/owl.theme.css',
        'realestate/assets/slitslider/css/style.css',
        'realestate/assets/slitslider/css/custom.css'
    ];

    public $js = [
        'realestate/assets/script.js',
        'realestate/assets/owl-carousel/owl.carousel.js',
        'realestate/assets/slitslider/js/modernizr.custom.79639.js',
        'realestate/assets/slitslider/js/jquery.ba-cond.min.js',
        'realestate/assets/slitslider/js/jquery.slitslider.js',
        'realestate/assets/js/google_analytics_auto.js'
    ];

    public $depends = [
        'yii\web\YiiAsset', // yii.js, jquery.js
        'yii\bootstrap\BootstrapAsset', // bootstrap.css
        'yii\bootstrap\BootstrapPluginAsset' // bootstrap.js
    ];

    public $jsOptions = [
      'position' =>  View::POS_HEAD,
    ];


}