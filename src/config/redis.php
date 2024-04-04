<?php

return [
    'class' => yii\redis\Connection::class,
    'hostname' => env('REDIS_HOST', 'localhost'),
    'port' => (int) env('REDIS_PORT', 6379),
    'database' => (int) env('REDIS_DATABASE', 0),
];