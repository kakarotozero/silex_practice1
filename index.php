<?php
require_once __DIR__.'/../vendor/autoload.php'; 

$app = new Silex\Application(); 
// Comentário 1
$app->get('/hello/{name}', function($name) use($app) { 
    return 'Hello '.$app->escape($name); 
}); 

$app->run(); 
