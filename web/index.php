<?php
header("Content-type: text/html; charset=utf-8"); 
// error_reporting(E_ALL^E_NOTICE);
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
require(dirname(dirname(dirname(__DIR__))). '/vendor/autoload.php');
require(dirname(dirname(dirname(__DIR__))).'/vendor/yiisoft/yii2/Yii.php');
$config = require(dirname(dirname(dirname(__DIR__))). '/config/main-local.php');
(new yii\web\Application($config))->run();
