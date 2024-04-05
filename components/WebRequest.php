<?php

namespace app\components;

use yii\web\Request;

/**
 * Class WebRequest
 * @package app\components
 */
class WebRequest extends Request
{
    /**
     * @var string
     */
    public $baseUrl = '';
}
