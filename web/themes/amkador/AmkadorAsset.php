<?php
namespace app\web\themes\amkador;

class AmkadorAsset extends \yii\web\AssetBundle{

    public $basePath = '@webroot/themes/amkador';
    public $baseUrl = '@web/themes/amkador';

    public $css = [
      'static/css/main.min.css',
      'http://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css',
    ];

    public $js = [
//      'http://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js',
        'static/js/main.min.js'
    ];
}