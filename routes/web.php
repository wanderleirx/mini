<?php

use App\Handlers\CustomExceptionHandler;
use App\Router;

Router::group(['exceptionHandler' => CustomExceptionHandler::class], function(){

    Router::group(['namespace' => '\App\Controllers'], function () {
        Router::get('/', 'HomeController@index');
    });

    Router::group(['namespace' => '\App\Controllers\Admin'], function () {
        Router::get('/admin', 'HomeController@index');
    });

});

