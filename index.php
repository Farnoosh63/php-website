<?php
require 'vendor/autoload.php';
date_default_timezone_set('America/Los_Angeles');

// use Monolog\logger;
// use Monolog\Handler\StreamHandler;
//
// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('app.txt', Logger::WARNING));
//
// $log->addWarning('Oh noes');

$app = new \Slim\Slim();


// $app->get('/hello/:name', function ($name) {
//     echo "Hello, $name";
// });

$app->get('/', function() use($app){
  $app->render('index.html');
});

$app->get('/contact', function(){
  echo "feel free to contact us.";
});

$app->run();

// echo "hello word";
?>
