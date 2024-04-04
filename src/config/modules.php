<?php

use yii\gii\Module as GiiModule;
use yii\debug\Module as DebugModule;
use app\modules\main\Module as MainModule;

$modules = [
    'main' => [
        'class' => MainModule::class,
    ],
];

if (YII_ENV_DEV) {
    $modules['debug'] = [
        'class' => DebugModule::class,
    ];
    $modules['gii'] = [
        'class' => GiiModule::class,
    ];
}

return $modules;
