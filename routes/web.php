<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\productController;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/product', 'productController@store');
