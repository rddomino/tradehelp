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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com',
        'https://fonts.gstatic.com',
        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap',
        'https://unpkg.com/reset-css/reset.css',
        'css/styles.css'
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
