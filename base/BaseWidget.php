<?php

namespace app\base;

use yii\base\InvalidConfigException;
use yii\bootstrap5\Widget;

/**
 * Class BaseWidget
 * @package app\base
 */
class BaseWidget extends Widget
{
    /** @var array */
    public array $js = [];

    /** @var array */
    public array $css = [];

    /**
     * @return void
     * @throws InvalidConfigException
     */
    public function init(): void
    {
        parent::init();

        $this->registerAssets();
    }

    /**
     * Register assets
     * @return void
     * @throws InvalidConfigException
     */
    protected function registerAssets(): void
    {
        $view = $this->getView();

        foreach ($this->js as $js) {
            $view->registerJsFile($js);
        }

        foreach ($this->css as $css) {
            $view->registerCssFile($css);
        }
    }
}
