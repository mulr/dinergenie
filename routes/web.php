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

//RESTAURANTS
Route::get('/restaurants', 'RestaurantsController@index')->name('home');

Route::get('/restaurants/create', 'RestaurantsController@create');

Route::post('/restaurants', 'RestaurantsController@store');

Route::get('/restaurants/{restaurant}', 'RestaurantsController@show');


Route::post('/restaurants/{restaurant}/reviews', 'ReviewsController@store');



// //TEST
// Route::get('/testing', function () {
//     $config['center'] = 'Orlando, FL';
//     $config['zoom'] = '14';
//     $config['map_height'] = '500px';
//     $config['map_width'] = '100%';
//     $config['scrollwheel'] = 'false';

//     GMaps::initialize($config);

//     $maps = GMaps::create_map();

//     return view('welcome')->with('map', $map);
// });

//CHECK:
//https://stackoverflow.com/questions/31681715/passing-multiple-parameters-to-controller-in-laravel-5/31682421#31682421

