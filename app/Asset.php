<?php
namespace app;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{

    public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $css = [
        'css/main.css'
    ];

    public $depends = [
        'kyubi\web\Asset'
    ];
}