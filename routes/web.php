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

Route::get('/pizzamart/{page}', 'PageController@home_page')->where('any', '*');
Route::get('/pizzamart', function () {
    return redirect("/pizzamart/home");
});

Route::get('/pizzamart/location/{address}','PageController@get_all');
Route::get('/create', 'PageController@get_forms');
Route::get('/all', 'PageController@get_all');
Route::get('/edit/{id}', 'PageController@get_edit');

Route::get('/delete/{id}', 'PostController@destroy');
// Post Requests
Route::post('/update/{id}', 'PostController@update');
Route::post('register', 'PostController@store');

