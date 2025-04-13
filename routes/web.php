<?php

use app\controllers\ChatController;
use app\controllers\HomeController;
use core\library\Router;

$router = $app->container->get(Router::class);
//GET
$router->add('GET', '/', [HomeController::class, 'index']);

//POST
$router->add('POST', '/chat', [ChatController::class, 'index']);


$router->execute();
