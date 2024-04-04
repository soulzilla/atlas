<?php

use airani\log\TelegramTarget;
use yii\log\DbTarget;

$log = [
    'traceLevel' => YII_DEBUG ? 3 : 0,
    'targets' => [
        [
            'class' => DbTarget::class,
            'levels' => ['error', 'warning'],
        ],
    ],
];

if (YII_ENV_PROD) {
    $log['targets'][] = [
        'class' => TelegramTarget::class,
        'levels' => ['error'],
        'botToken' => env('TELEGRAM_LOGGER_BOT_TOKEN'),
        'chatId' => env('TELEGRAM_LOGGER_CHAT_ID'),
    ];
}

return $log;
