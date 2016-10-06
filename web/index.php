<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');
require_once __DIR__ . '/../functions.php';

(new yii\web\Application($config))->run();

$time = (microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]) * 1000;
$time = substr($time, 0, 5);
echo "<div style='position: fixed; bottom: 10px'> $time ms</div>";
