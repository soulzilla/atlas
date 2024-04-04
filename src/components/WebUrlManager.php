<?php

namespace app\components;

use yii\web\UrlManager;

/**
 * Class WebUrlManager
 * @package app\components
 */
class WebUrlManager extends UrlManager
{
    /** @var bool */
    public $showScriptName = false;

    /** @var bool */
    public $enablePrettyUrl = true;

    /** @var array */
    public $rules = [
        '/' => 'main/default/index',
        '<action>' => 'main/default/<action>',
        '<controller>/<action>' => 'main/<controller>/<action>',
    ];
}
