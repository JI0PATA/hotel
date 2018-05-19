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

Route::get('/', 'HomeController@index')->name('index');

Route::get('about', 'HomeController@about')->name('about');
Route::get('contacts', 'HomeController@contacts')->name('contacts');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login')->middleware('LoginGuest');
Route::post('login', 'Auth\LoginController@login')->name('login')->middleware('LoginGuest');
Route::post('logout', 'AdminController@logout')->name('logout');

Route::middleware('AdminPanel')->prefix('admin')->name('admin.')->group(function() {
    Route::get('/', 'AdminController@index')->name('index');

    Route::name('services.')->prefix('services')->group(function() {
        Route::get('/', 'ServiceController@index')->name('index');

        Route::get('add', 'ServiceController@add')->name('add');
        Route::post('create', 'ServiceController@create')->name('create');

        Route::get('edit/{id}', 'ServiceController@edit')->name('edit');
        Route::post('update/{id}', 'ServiceController@update')->name('update');

        Route::get('delete/{id}', 'ServiceController@delete')->name('delete');
    });

    Route::name('hotels.')->prefix('hotels')->group(function() {
        Route::get('/', 'HotelController@index')->name('index');

        Route::get('add', 'HotelController@add')->name('add');
        Route::post('create', 'HotelController@create')->name('create');

        Route::get('edit/{id}', 'HotelController@edit')->name('edit');
        Route::post('update/{id}', 'HotelController@update')->name('update');

        Route::get('delete/{id}', 'HotelController@delete')->name('delete');
    });

    Route::name('photos.')->prefix('photos')->group(function() {
        Route::get('{id}', 'PhotoController@index')->name('index');

        Route::post('create/{id}', 'PhotoController@create')->name('create');
        Route::get('delete/{id}', 'PhotoController@delete')->name('delete');
    });
});

Route::get('hotel/{id}', 'HotelController@view')->name('hotel.view');

Route::get('test', 'HotelController@test');