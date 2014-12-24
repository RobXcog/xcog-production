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
        'xcogStyles/stylesheets/print.css',
        'xcogStyles/stylesheets/screen.css',
        'xcogStyles/stylesheets/styles.css',
        'xcogStyles/stylesheets/xcogMenu.css',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css',
    ];
    public $js = [
        'xcogStyles/javascripts/jquery1.11.js',
        'xcogStyles/javascripts/bootstrap.js',
        'xcogStyles/javascripts/xcogRX.js',
        'xcogStyles/javascripts/bootstrap-sprockets.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

