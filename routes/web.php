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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'index' => 'IndexController'
]);

Route::resources([
    'contact' => 'ContactController'
]);

Route::resources([
    'services' => 'ServicesController'
]);

Route::resources([
    'about-us' => 'AboutController'
]);

Route::resources([
    'portfolio' => 'PortfolioController'
]);

Route::resources([
    'web' => 'WebController'
]);

Route::resources([
    'brand' => 'BrandController'
]);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
