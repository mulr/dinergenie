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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/restaurants', 'RestaurantsController@index')->name('home');

Route::get('/restaurants/create', 'RestaurantsController@create');

Route::post('/restaurants', 'RestaurantsController@store');

Route::get('/restaurants/{restaurant}', 'RestaurantsController@show');


Route::post('/restaurants/{restaurant}/reviews', 'ReviewsController@store');