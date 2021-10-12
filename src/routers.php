<?php

use \Illuminate\Routing\Router;
use \Reatang\LaravelBundle\Http\Controllers;

/**
 * register router
 *
 * @param Router $router
 */
return function (Router $router) {
    $router->get('/', Controllers\SomeController::class . '@index');
};