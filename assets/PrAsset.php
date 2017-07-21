<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PrAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       
        'css/product-details.css',
        'magnificpopup/magnific-popup.css',
    ];
    public $js = [
        'js/jquery-1.12.4.min.js',
        'js/panel.min.js',
        'magnificpopup/jquery.magnific-popup.min.js',
        'js/panel.js',

        'js/polyfiller.js',
        'js/input-range.js',


    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];   //Cкрипты в шапке
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
