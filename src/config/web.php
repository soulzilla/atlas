<?php

use app\components\{WebRequest, WebUrlManager};
use yii\redis\Cache;

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';
$redis = require __DIR__ . '/redis.php';
$log = require __DIR__ . '/log.php';
$modules = require __DIR__ . '/modules.php';

$config = [
    'id' => 'atlas-school',
    'name' => 'Atlas School',
    'version' => '1.0.0',
    'language' => 'ru',
    'timeZone' => 'Asia/Almaty',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            'class' => WebRequest::class,
            'cookieValidationKey' => env('COOKIE_VALIDATION_KEY'),
        ],
        'cache' => [
            'class' => Cache::class,
            'redis' => $redis,
            'keyPrefix' => 'atlas-school',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
        ],
        'errorHandler' => [
            'errorAction' => 'main/default/error',
        ],
        'log' => $log,
        'db' => $db,
        'urlManager' => [
            'class' => WebUrlManager::class
        ],
    ],
    'params' => $params,
    'modules' => $modules,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['bootstrap'][] = 'gii';
}

return $config;
