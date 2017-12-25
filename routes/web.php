<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(
    [
        'namespace' => 'Progress',
        'prefix' => 'demo',
        // 'middleware' => ['islogined'],
    ],
    function ($router) {
        $router->get('/', 'DemoController@index');
        $router->get('/table', 'DemoController@table');
        $router->get('/pajax', 'DemoController@pajax');
        $router->get('/pajax/test1', 'DemoController@test1');
        $router->get('/pajax/test2', 'DemoController@test2');
        $router->get('/pajax/test3', 'DemoController@test3');
    }
);