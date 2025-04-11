<?php

require_once(__DIR__ . "/vendor/autoload.php");

use CoffeeCode\Router\Router;

$router = new Router(APP_URL);



$router->namespace('App\Controllers');
$router->group(null);
$router->get('/', 'Web:home');


$router->dispatch();

if ($router->error()) {

    $router->redirect('/');
}
