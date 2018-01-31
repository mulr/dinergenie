<?php



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


Route::get('/update/amenity', 'RestaurantsController@amenity');