<?php
require 'vendor/autoload.php';
date_default_timezone_set('America/Los_Angeles');

use Monolog\logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('app.txt', Logger::WARNING));

$log->addWarning('Oh noes');

echo "hello word"; ?>
