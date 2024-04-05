<?php

require __DIR__ . '/../vendor/autoload.php';
$env = __DIR__ . '/../';

yiithings\dotenv\Loader::load($env);

defined('YII_DEBUG') or define('YII_DEBUG', filter_var(env('YII_DEBUG'), FILTER_VALIDATE_BOOLEAN));
defined('YII_ENV') or define('YII_ENV', env('YII_ENV'));

require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
