<?php

namespace app\widgets\slick;

use yii\web\AssetBundle;

/**
 * SlickSliderAsset
 */
class SlickSliderAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@app/widgets/slick/assets/';

    /**
     * @var string[]
     */
    public $css = [
        'css/slick.css',
        'css/slick-theme.css',
    ];

    /**
     * @var string[]
     */
    public $js = [
        'js/slick.js',
    ];

    /**
     * @var string[]
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
