<?php

namespace frontend\themes\medical;

use pantera\content\OwlCarouserAsset;
use pantera\media\widgets\syncedOwls\SyncedOwlsAsset;
use yii\bootstrap\BootstrapPluginAsset;
use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = __DIR__.'/assets';
    public $baseUrl = '@web';
    public $css = [
        '//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700&amp;subset=cyrillic',
        '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'js/webslidemenu/webslidemenu.css',
        'js/webslidemenu/dropdown-effects/fade-up.css',
        'css/medical-theme-default.css',
        'css/kingcomposer.min.css',
        'css/medical-style.css',
        'css/main.css',
        'css/responsive.css',
        'css/colors.less',
    ];
    public $js = [
        'js/webslidemenu/webslidemenu.js',
        'js/jquery.goup.min.js',
        'js/js.cookie.js',
        'js/script.js',
        '//dblclick.ru/widget.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        OwlCarouserAsset::class,
        BootstrapPluginAsset::class,
        SyncedOwlsAsset::class,
    ];
    public function init()
    {
        if (!empty($_COOKIE['low-vision-mode'])) {
            $this->css[] = 'css/low-vision.css';
        }
        return parent::init();
    }
}
