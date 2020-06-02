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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin/index', 'adminController@index')->name('adminIndex');
    // Route::get('/posko/index', 'userController@index')->name('poskoIndex');

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
    Route::get('/haul-sekumpul/delete/{uuid}', 'HauSekumpulController@destroy')->name('haulDestroy');

    Route::get('/posko/index', 'poskoController@index')->name('poskoIndex');
    Route::post('/posko/index', 'poskoController@store')->name('poskoStore');
    Route::get('/posko/detail/{uuid}', 'poskoController@show')->name('poskoShow');
    Route::post('/posko/create/ketua', 'poskoController@storeKetua')->name('ketuaPoskoStore');
    Route::post('/posko/create/anggota', 'poskoController@storeAnggota')->name('anggotaPoskoStore');
    Route::get('/posko/edit/{uuid}', 'poskoController@edit')->name('poskoEdit');
    Route::put('/posko/edit/{uuid}', 'poskoController@update')->name('poskoUpdate');
    Route::get('/posko/delete/{uuid}', 'poskoController@destroy')->name('poskoDestroy');
    Route::get('/posko/filter', 'poskoController@filter')->name('poskoFilter');


    Route::get('/donasi/index', 'donasiController@index')->name('donasiIndex');
    Route::post('/donasi/index', 'donasiController@store')->name('donasiStore');
    Route::get('/donasi/detail/{uuid}', 'donasiController@show')->name('donasiShow');
    Route::get('/donasi/edit/{uuid}', 'donasiController@edit')->name('donasiEdit');
    Route::put('/donasi/edit/{uuid}', 'donasiController@update')->name('donasiUpdate');
    Route::get('/donasi/delete/{uuid}', 'donasiController@destroy')->name('donasiDestroy');
    Route::get('/donasi/filter', 'donasiController@filter')->name('donasiFilter');

    Route::get('/pemasukan/index', 'pemasukanController@index')->name('pemasukanIndex');
    Route::post('/pemasukan/index', 'pemasukanController@store')->name('pemasukanStore');
    Route::get('/pemasukan/detail/{uuid}', 'pemasukanController@show')->name('pemasukanShow');
    Route::get('/pemasukan/edit/{uuid}', 'pemasukanController@edit')->name('pemasukanEdit');
    Route::put('/pemasukan/edit/{uuid}', 'pemasukanController@update')->name('pemasukanUpdate');
    Route::get('/pemasukan/delete/{uuid}', 'pemasukanController@destroy')->name('pemasukanDestroy');

    Route::get('/pengeluaran/index', 'pengeluaranController@index')->name('pengeluaranIndex');
    Route::post('/pengeluaran/index', 'pengeluaranController@store')->name('pengeluaranStore');
    Route::get('/pengeluaran/detail/{uuid}', 'pengeluaranController@show')->name('pengeluaranShow');
    Route::get('/pengeluaran/edit/{uuid}', 'pengeluaranController@edit')->name('pengeluaranEdit');
    Route::put('/pengeluaran/edit/{uuid}', 'pengeluaranController@update')->name('pengeluaranUpdate');
    Route::get('/pengeluaran/delete/{uuid}', 'pengeluaranController@destroy')->name('pengeluaranDestroy');

    Route::get('/rombongan/index', 'rombonganController@index')->name('rombonganIndex');
    Route::post('/rombongan/index', 'rombonganController@store')->name('rombonganStore');
    Route::get('/rombongan/detail/', 'rombonganController@show')->name('rombonganShow');
    Route::get('/rombongan/edit', 'rombonganController@edit')->name('rombonganEdit');
    Route::put('/rombongan/edit/{uuid}', 'rombonganController@update')->name('rombonganUpdate');
    Route::get('/rombongan/delete/{uuid}', 'rombonganController@destroy')->name('rombonganDestroy');

    Route::get('/ketua/index', 'ketuaController@index')->name('ketuaIndex');

    Route::get('/ketua/detail/', 'ketuaController@show')->name('ketuaShow');
    Route::get('/ketua/edit/{uuid}', 'ketuaController@edit')->name('ketuaEdit');
    Route::get('/ketua/detail/{uuid}', 'ketuaController@show')->name('ketuaShow');
    Route::put('/ketua/edit/{uuid}', 'ketuaController@update')->name('ketuaUpdate');
    Route::get('/ketua/delete/{uuid}', 'ketuaController@destroy')->name('ketuaDestroy');

    Route::get('/anggota/index', 'anggotaController@index')->name('anggotaIndex');
    Route::post('/anggota/index', 'anggotaController@store')->name('anggotaStore');
    Route::get('/anggota/detail/{uuid}', 'anggotaController@show')->name('anggotaShow');
    Route::get('/anggota/edit/{uuid}', 'anggotaController@edit')->name('anggotaEdit');
    Route::put('/anggota/edit/{uuid}', 'anggotaController@update')->name('anggotaUpdate');
    Route::get('/anggota/delete/{uuid}', 'anggotaController@destroy')->name('anggotaDestroy');

    Route::get('/parkiran/index', 'parkiranController@index')->name('parkiranIndex');
    Route::post('/parkiran/index', 'parkiranController@store')->name('parkiranStore');
    Route::get('/parkiran/detail/', 'parkiranController@show')->name('parkiranShow');
    Route::get('/parkiran/edit', 'parkiranController@edit')->name('parkiranEdit');
    Route::put('/parkiran/edit/{uuid}', 'parkiranController@update')->name('parkiranUpdate');
    Route::get('/parkiran/delete/{uuid}', 'parkiranController@destroy')->name('parkiranDestroy');

    Route::get('/kehilanganBarang/index', 'kehilanganBarangController@index')->name('kehilanganBarangIndex');
    Route::post('/kehilanganBarang/index', 'kehilanganBarangController@store')->name('kehilanganBarangStore');
    Route::get('/kehilanganBarang/detail/', 'kehilanganBarangController@show')->name('kehilanganBarangShow');
    Route::get('/kehilanganBarang/edit', 'kehilanganBarangController@edit')->name('kehilanganBarangEdit');
    Route::put('/kehilanganBarang/edit/{uuid}', 'kehilanganBarangController@update')->name('kehilanganBarangUpdate');
    Route::get('/kehilanganBarang/delete/{uuid}', 'kehilanganBarangController@destroy')->name('kehilanganBarangDestroy');

    //cetak route
    Route::get('/posko/cetak', 'reportController@poskoCetak')->name('poskoCetak');
    Route::get('/posko/detail/cetak/{uuid}', 'reportController@poskoDetailCetak')->name('poskoDetailCetak');
    Route::get('/donasi/cetak', 'reportController@donasiCetak')->name('donasiCetak');
    Route::post('/donasi/filter', 'reportController@donasiFilter')->name('donasiFilterCetak');
    Route::get('/pemasukan/cetak', 'reportController@pemasukanCetak')->name('pemasukanCetak');
    Route::get('/pengeluaran/cetak', 'reportController@pengeluaranCetak')->name('pengeluaranCetak');
    Route::post('/posko/filter', 'reportController@poskoFilter')->name('poskoFilterCetak');


});
