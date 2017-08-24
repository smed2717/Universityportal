<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'css/bootstrap.css.map',
        'css/bootstrap.min.css',
        'css/bootstrap-theme.css',
        'css/bootstrap-theme.css.map',
        'css/bootstrap-theme.min.css',
        'css/simple-sidebar.css',
        'css/timeline.css',
        'css/style.css',
        'css/site.css'
        ];
    public $js = [
        'js/angular.min.js',
        'js/angular-resource.min.js',
        'js/angular-route.min.js',
        'js/bootstrap.js',
        'js/bootstrap.min.js',
        'js/ie10-viewport-bug-workaround.js',
        'js/ie-emulation-modes-warning.js',
        'js/jasny-bootstrap.min.js',
        'js/jquery.js',
        'js/jquery.min.js',
        'js/npm.js',
        'js/offcanvas.js',
        'js/angular/login.js',
        'js/angular/libretto.js'
        ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
