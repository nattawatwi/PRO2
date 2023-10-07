<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    

    $router->resource('services',ServiceController::class);
    $router->resource('service-c-ts',ServiceCTController::class);
    $router->resource('maps', MapsController::class);
    $router->resource('promotions', PromotionController::class);
    $router->resource('trends', TrendController::class);
    $router->resource('news', NewsController::class);
    $router->resource('categories', CategoryController::class);
});
