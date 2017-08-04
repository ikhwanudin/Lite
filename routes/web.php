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
})->name('index');
Auth::routes();
Route::post('/dashboard', 'ShrtController@store')->name('store');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/{link}', 'ShrtController@shrt');
