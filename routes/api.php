<?php

use App\Handlers\CustomExceptionHandler;
use App\Router;

Router::group(['exceptionHandler' => CustomExceptionHandler::class], function (){
    Router::group([
        'prefix' => '/api',
        'namespace' => '\App\Controllers\Api',
    ], function () {
        Router::resource('/products', 'ProductController@findAll');
        Router::resource('/users', 'UserController@findAll');
    });
});


