<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminIndex', 'adminController@index')->name('adminIndex');
Route::get('/userIndex', 'adminController@userIndex')->name('userIndex');
Route::get('/haulIndex', 'adminController@haulIndex')->name('haulIndex');
Route::get('/poskoIndex', 'adminController@poskoIndex')->name('poskoIndex');
Route::get('/poskoDetail', 'adminController@poskoDetail')->name('poskoDetail');