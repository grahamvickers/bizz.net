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

Route::get('/', function () {
    return redirect('/welcome');
});

Route::get('/listings', 'HomeController@index')->name('home');
Route::get('/welcome', 'WelcomeController@index')->name('welcome');
