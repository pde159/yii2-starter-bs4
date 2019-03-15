<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;
use app\assets\AdminlteAsset;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $css = [
        'css/site.css',
    ];

    public $js = [
    ];

    public $depends = [
        YiiAsset::class,
        AdminlteAsset::class,
    ];
}
