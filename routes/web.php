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





// Search based on drop down selection:
// Route::get('/update/changingtable', function () {

//     $restaurantss = DB::table('restaurants')->get()->where('changingtable', 1);

  

//     return view('restaurants.index', compact(['restaurants', 'maps']));
    
// });



// Route::get('/update/{field}', function ($amenity) {

//     $resttaurants = DB::table('restaurants')->get()->where($amenity, 1);

//     return view('restaurants.index', compact(['restaurants', 'maps']));

// });


Route::get('/update/{amenity}', 'RestaurantsController@amenity');