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
Route::get('/user/index', 'userController@index')->name('userIndex');
Route::get('/user/edit', 'userController@edit')->name('userEdit');

Route::get('/haul/index', 'haulController@index')->name('haulIndex');
Route::get('/haul/detail', 'haulController@detail')->name('haulDetail');
Route::get('/haul/edit', 'haulController@edit')->name('haulEdit');


Route::get('/posko/index', 'poskoController@index')->name('poskoIndex');
Route::get('/posko/detail', 'poskoController@detail')->name('poskoDetail'); 
Route::get('/posko/edit', 'poskoController@edit')->name('poskoEdit');
