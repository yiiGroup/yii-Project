<?php
/**
 * Created by PhpStorm.
 * User: ines
 * Date: 18/04/16
 * Time: 12:47 م
 */

namespace backend\assets;
use yii\web\AssetBundle;

class LocateAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
        'js/Locate.js',
        'js/geoPosition.js',
        'http://maps.google.com/maps/api/js?sensor=false',
    ];
    public $depends = [
    ];
}