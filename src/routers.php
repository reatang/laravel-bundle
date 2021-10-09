<?php

return function (\Illuminate\Routing\Router $router) {
    $router->get('/', \Reatang\LaravelBundle\Http\Controllers\SomeController::class . '@index');
};