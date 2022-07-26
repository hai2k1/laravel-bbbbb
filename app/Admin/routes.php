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
    $router->resource('/district', 'DistrictController');
    $router->resource('/province', 'ProvinceController');
    $router->resource('/ward','WardController');
    $router->resource('/realestateproject','RealEstateProjectController');
    $router->resource('/historypayment','HistoryPaymentController');
});
