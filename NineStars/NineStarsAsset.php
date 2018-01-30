<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\themes\NineStars;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class NineStarsAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/NineStars/assets';

    public $css = [
        'bootstrap/css/bootstrap.min.css',
        'font-awesome/css/font-awesome.min.css',
        'css/nivo-lightbox.css',
        'css/nivo-lightbox-theme/default/default.css',
        'css/animate.css',
        'css/style.css',
        'css/default.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/jquery.easing.min.js',
        'js/classie.js',
        'js/gnmenu.js',
        'js/jquery.scrollTo.js',
        'js/nivo-lightbox.min.js',
        'js/stellar.js',
        'js/custom.js',
    ];
}
