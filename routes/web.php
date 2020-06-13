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
    Route::get('/rombongan/edit/{uuid}', 'rombonganController@edit')->name('rombonganEdit');
    Route::put('/rombongan/edit/{uuid}', 'rombonganController@update')->name('rombonganUpdate');
    Route::get('/rombongan/delete/{uuid}', 'rombonganController@destroy')->name('rombonganDestroy');
    Route::get('/rombongan/filter', 'rombonganController@filter')->name('rombonganFilter');

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
    Route::get('/anggota/filter', 'anggotaController@filter')->name('anggotaFilter');


    Route::get('/parkiran/index', 'parkiranController@index')->name('parkiranIndex');
    Route::post('/parkiran/index', 'parkiranController@store')->name('parkiranStore');
    Route::get('/parkiran/detail/{uuid}', 'parkiranController@show')->name('parkiranShow');
    Route::get('/parkiran/edit/{uuid}', 'parkiranController@edit')->name('parkiranEdit');
    Route::put('/parkiran/edit/{uuid}', 'parkiranController@update')->name('parkiranUpdate');
    Route::get('/parkiran/delete/{uuid}', 'parkiranController@destroy')->name('parkiranDestroy');
    Route::get('/parkiran/filter', 'parkiranController@filter')->name('parkiranFilter');


    Route::get('/kehilanganBarang/index', 'kehilanganBarangController@index')->name('kehilanganBarangIndex');
    Route::post('/kehilanganBarang/index', 'kehilanganBarangController@store')->name('kehilanganBarangStore');
    Route::get('/kehilanganBarang/detail/', 'kehilanganBarangController@show')->name('kehilanganBarangShow');
    Route::get('/kehilanganBarang/edit/{uuid}', 'kehilanganBarangController@edit')->name('kehilanganBarangEdit');
    Route::put('/kehilanganBarang/edit/{uuid}', 'kehilanganBarangController@update')->name('kehilanganBarangUpdate');
    Route::get('/kehilanganBarang/delete/{uuid}', 'kehilanganBarangController@destroy')->name('kehilanganBarangDestroy');
    Route::get('/kehilanganBarang/filter', 'kehilanganBarangController@filter')->name('kehilanganBarangFilter');


    Route::get('/penemuanBarang/index', 'penemuanBarangController@index')->name('penemuanBarangIndex');
    Route::post('/penemuanBarang/index', 'penemuanBarangController@store')->name('penemuanBarangStore');
    Route::get('/penemuanBarang/detail/{uuid}', 'penemuanBarangController@show')->name('penemuanBarangShow');
    Route::get('/penemuanBarang/edit/{uuid}', 'penemuanBarangController@edit')->name('penemuanBarangEdit');
    Route::put('/penemuanBarang/edit/{uuid}', 'penemuanBarangController@update')->name('penemuanBarangUpdate');
    Route::get('/penemuanBarang/delete/{uuid}', 'penemuanBarangController@destroy')->name('penemuanBarangDestroy');
    Route::get('/penemuanBarang/filter', 'penemuanBarangController@filter')->name('penemuanBarangFilter');


    Route::get('/kehilanganOrang/index', 'kehilanganOrangController@index')->name('kehilanganOrangIndex');
    Route::post('/kehilanganOrang/index', 'kehilanganOrangController@store')->name('kehilanganOrangStore');
    Route::get('/kehilanganOrang/detail/', 'kehilanganOrangController@show')->name('kehilanganOrangShow');
    Route::get('/kehilanganOrang/edit/{uuid}', 'kehilanganOrangController@edit')->name('kehilanganOrangEdit');
    Route::put('/kehilanganOrang/edit/{uuid}', 'kehilanganOrangController@update')->name('kehilanganOrangUpdate');
    Route::get('/kehilanganOrang/delete/{uuid}', 'kehilanganOrangController@destroy')->name('kehilanganOrangDestroy');
    Route::get('/kehilanganOrang/filter', 'kehilanganOrangController@filter')->name('kehilanganOrangFilter');


    Route::get('/kehilanganKendaraan/index', 'kehilanganKendaraanController@index')->name('kehilanganKendaraanIndex');
    Route::post('/kehilanganKendaraan/index', 'kehilanganKendaraanController@store')->name('kehilanganKendaraanStore');
    Route::get('/kehilanganKendaraan/detail/', 'kehilanganKendaraanController@show')->name('kehilanganKendaraanShow');
    Route::get('/kehilanganKendaraan/edit/{uuid}', 'kehilanganKendaraanController@edit')->name('kehilanganKendaraanEdit');
    Route::put('/kehilanganKendaraan/edit/{uuid}', 'kehilanganKendaraanController@update')->name('kehilanganKendaraanUpdate');
    Route::get('/kehilanganKendaraan/delete/{uuid}', 'kehilanganKendaraanController@destroy')->name('kehilanganKendaraanDestroy');
    Route::get('/kehilanganKendaraan/filter', 'kehilanganKendaraanController@filter')->name('kehilanganKendaraanFilter');


    Route::get('/penemuanKendaraan/index', 'penemuanKendaraanController@index')->name('penemuanKendaraanIndex');
    Route::post('/penemuanKendaraan/index', 'penemuanKendaraanController@store')->name('penemuanKendaraanStore');
    Route::get('/penemuanKendaraan/detail/', 'penemuanKendaraanController@show')->name('penemuanKendaraanShow');
    Route::get('/penemuanKendaraan/edit/{uuid}', 'penemuanKendaraanController@edit')->name('penemuanKendaraanEdit');
    Route::put('/penemuanKendaraan/edit/{uuid}', 'penemuanKendaraanController@update')->name('penemuanKendaraanUpdate');
    Route::get('/penemuanKendaraan/delete/{uuid}', 'penemuanKendaraanController@destroy')->name('penemuanKendaraanDestroy');
    Route::get('/penemuanKendaraan/filter', 'penemuanKendaraanController@filter')->name('penemuanKendaraanFilter');


    //cetak route
    Route::get('/posko/cetak', 'reportController@poskoCetak')->name('poskoCetak');
    Route::get('/posko/detail/cetak/{uuid}', 'reportController@poskoDetailCetak')->name('poskoDetailCetak');
    Route::get('/donasi/cetak', 'reportController@donasiCetak')->name('donasiCetak');
    Route::post('/donasi/filter', 'reportController@donasiFilter')->name('donasiFilterCetak');
    Route::get('/pemasukan/cetak', 'reportController@pemasukanCetak')->name('pemasukanCetak');
    Route::get('/pengeluaran/cetak', 'reportController@pengeluaranCetak')->name('pengeluaranCetak');
    Route::post('/posko/filter', 'reportController@poskoFilter')->name('poskoFilterCetak');
    Route::get('/ketuaPosko/cetak', 'reportController@ketuaPoskoCetak')->name('ketuaPoskoCetak');
    Route::get('/parkiran/cetak', 'reportController@parkiranCetak')->name('parkiranCetak');
    Route::post('/parkiran/filter', 'reportController@parkiranFilter')->name('parkiranFilterCetak');
    Route::get('/anggota/cetak', 'reportController@anggotaCetak')->name('anggotaCetak');
    Route::post('/anggota/filter', 'reportController@anggotaFilter')->name('anggotaFilterCetak');
    Route::get('/rombongan/cetak', 'reportController@rombonganCetak')->name('rombonganCetak');
    Route::post('/rombongan/filter', 'reportController@filterRombongan')->name('rombonganFilterCetak');
    Route::get('/kehilanganBarang/cetak', 'reportController@kehilanganBarangCetak')->name('kehilanganBarangCetak');
    Route::get('/penemuanBarang/cetak', 'reportController@penemuanBarangCetak')->name('penemuanBarangCetak');
    Route::get('/kehilanganOrang/cetak', 'reportController@kehilanganOrangCetak')->name('kehilanganOrangCetak');
    Route::get('/kehilanganKendaraan/cetak', 'reportController@kehilanganKendaraanCetak')->name('kehilanganKendaraanCetak');
    Route::get('/penemuanKendaraan/cetak', 'reportController@penemuanKendaraanCetak')->name('penemuanKendaraanCetak');
    Route::post('/kehilanganBarang/filter', 'reportController@kehilanganBarangFilter')->name('kehilanganBarangFilterCetak');   
    Route::post('/penemuanBarang/filter', 'reportController@penemuanBarangFilter')->name('penemuanBarangFilterCetak');
    Route::post('/kehilanganOrang/filter', 'reportController@kehilanganOrangFilter')->name('kehilanganOrangFilterCetak');
    Route::post('/kehilanganKendaraan/filter', 'reportController@kehilanganKendaraanFilter')->name('kehilanganKendaraanFilterCetak');
    Route::post('/penemuanKendaraan/filter', 'reportController@penemuanKendaraanfilter')->name('penemuanKendaraanFilterCetak');

    //Login Sebagai Admin Posko
    Route::get('halaman/posko/index', 'adminController@poskoIndex')->name('halamanPoskoIndex');
    Route::get('profil/posko', 'poskoController@profil')->name('profilPosko');

});
