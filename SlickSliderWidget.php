<?php

namespace app\widgets\slick;

use yii\base\Widget;
use yii\helpers\Html;

class SlickSliderWidget extends Widget
{
    private array $config = [];
    public string $className = '';

    public function init()
    {
        parent::init();

        $this->initOptions();
    }

    public function run()
    {
        $this->registerPlugin();
    }

    /**
     * Create default config
     */
    private function initOptions(){
        $this->config = [
            'dots' => 'true',
            'speed' => 300,
            'slidesToShow' => 3,
            'slidesToScroll' => 3,
            'arrows' => 0,
        ];
    }

    /**
     * Registers a specific Bootstrap plugin and the related events
     */
    private function registerPlugin()
    {
        $view = $this->getView();

        SlickSliderAsset::register($view);

        $js = '$(".' . $this->className . '").slick({
        dots: ' . $this->config['dots'] . ',
        speed: ' . $this->config['speed'] . ',
        slidesToShow: ' . $this->config['slidesToShow'] . ',
        slidesToScroll: ' . $this->config['slidesToScroll'] . ',
        arrows: ' . $this->config['arrows'] . ',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
});';
         $view->registerJs($js);
    }
}