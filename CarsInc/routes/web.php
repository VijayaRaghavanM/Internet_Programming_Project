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
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function() {
    //Routes that need Auth
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin/cars', 'HomeController@admin_cars')->name('admin-cars');
    Route::get('/admin/parts', 'HomeController@admin_parts')->name('admin-parts');


    Route::get('/cars', 'HomeController@cars')->name('cars');
    Route::get('/parts', 'HomeController@parts')->name('parts');
    
    Route::get('/add-car-to-cart', 'HomeController@addCarToCart');
    Route::get('/parts', 'HomeController@parts')->name('parts');

    Route::get('/car/delete/{id}', 'CarController@delete')->name('deletecar');
    Route::get('/car/update/{id}', 'CarController@update')->name('updatecar');
    Route::get('/car/create', 'CarController@create')->name('createcar');

    Route::get('/part/delete/{id}', 'CarPartsController@delete')->name('deletepart');
    Route::get('/part/update/{id}', 'CarPartsController@update')->name('updatepart');
    Route::get('/part/create', 'CarPartsController@create')->name('createpart');


});

//Unauthenticated Routes
Route::get('/about', 'HomeController@about')->name('about');
