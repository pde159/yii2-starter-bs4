<?php

namespace app\assets;

use yii\bootstrap4\BootstrapPluginAsset;
use kartik\icons\FontAwesomeAsset;
use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@npm/admin-lte/dist';

    public $js = [
        'js/adminlte.min.js'
    ];

    public $css = [
        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
        'css/adminlte.min.css',
    ];

    public $depends = [
        FontAwesomeAsset::class,
        BootstrapPluginAsset::class,
    ];
}
