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

Auth::routes();

Route::get('/','CarController@allcars')->name('allcars');
Route::match(['get','post'], '/Cars/{id}','CarController@particularcar')->name('car');
Route::match(['get','post'], '/Cars','CarController@newcar')->name('cars');
