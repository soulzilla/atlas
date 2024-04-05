<?php

namespace app\components;

use yii\web\User;

/**
 * Class WebUser
 * @package app\components
 */
class WebUser extends User
{
    /**
     * @var bool
     */
    public $enableAutoLogin = true;

    /**
     * @var string[]
     */
    public $loginUrl = ['auth/default/login'];
}
