<?php

use Dcat\Admin\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/dashboard', 'HomeController@index');
    $router->resource('/auth/users', 'UserController');
    $router->resource('/posts', 'PostController');
    $router->resource('/historypayment','HistoryPaymentController');
    $router->resource('/cities', 'CityController');
    $router->resource('/districts', 'DistrictController');
    $router->resource('/wards','WardController');
    $router->resource('/streets', 'StreetController');
    $router->resource('/projects', 'ProjectController');
});
