<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'public/css/bootstrap.min.css',
        'public/css/all.min.css',
        'public/css/pe-icons.css',
        'public/css/prettyPhoto.css',
        'public/css/animate.css',
        'public/css/style.css',
    ];
    public $js = [
        'public/js/jquery.js',
        'public/js/body_scripts.js',
        'public/js/bootstrap.min.js',
        'public/js/jquery.prettyPhoto.js',
        'public/js/plugins.js',
        'public/js/init.js',
        'public/js/plagins.js',
    ];
    public $depends = [
    ];
}
