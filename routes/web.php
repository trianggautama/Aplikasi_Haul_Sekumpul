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
Route::post('/user/index', 'userController@store')->name('userStore');
Route::get('/user/edit/{uuid}', 'userController@edit')->name('userEdit');
Route::put('/user/edit/{uuid}', 'userController@update')->name('userUpdate');
Route::get('/user/delete/{uuid}', 'userController@destroy')->name('userDestroy');

Route::get('/haul-sekumpul/index', 'HaulSekumpulController@index')->name('haulIndex');
Route::post('/haul-sekumpul/index', 'HaulSekumpulController@store')->name('haulStore');
Route::get('/haul-sekumpul/detail/{uuid}', 'HaulSekumpulController@show')->name('haulShow');
Route::get('/haul-sekumpul/edit/{uuid}', 'HaulSekumpulController@edit')->name('haulEdit');
Route::put('/haul-sekumpul/edit/{uuid}', 'HaulSekumpulController@update')->name('haulUpdate');
Route::get('/haul-sekumpul/delete/{uuid}', 'HaulSekumpulController@destroy')->name('haulDestroy');

Route::get('/posko/index', 'poskoController@index')->name('poskoIndex');
Route::post('/posko/index', 'poskoController@store')->name('poskoStore');
Route::get('/posko/detail/{uuid}', 'poskoController@show')->name('poskoShow');
Route::get('/posko/edit/{uuid}', 'poskoController@edit')->name('poskoEdit');
Route::put('/posko/edit/{uuid}', 'poskoController@update')->name('poskoUpdate');
Route::get('/posko/delete/{uuid}', 'poskoController@destroy')->name('poskoDestroy');
