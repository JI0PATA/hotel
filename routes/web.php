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
});

Route::get('hotel/{id}', 'HotelController@index')->name('hotel.view');