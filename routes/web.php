<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;;
use App\User;
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

Route::get('/login', function () {
    return view('welcome');
});
Route::get('/contoh', function () {
    return view('pages.contoh');
});
Route::get('/', 'App\Http\Controllers\HomePageController@index');
Route::get('anggota/json','App\Http\Controllers\DataAnggotaController@json');
Route::get('kegiatan-himatif/{id}','App\Http\Controllers\KegiataanKampusController@show')->name('kegiatan.show');
Route::get('program-kerja/{id}','App\Http\Controllers\ProgramKerjaController@show')->name('program.show');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/gambar', ['as' => 'profile.upload', 'uses' => 'App\Http\Controllers\ProfileController@upload']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	//  Route::get('Data-anggota', function () {return view('pages.Data-anggota');})->name('Data-anggota');
	 Route::resource('Data-anggota', 'App\Http\Controllers\DataAnggotaController'); 
	 Route::resource('Kegiatan-Kampus', 'App\Http\Controllers\KegiataanKampusController'); 
	 Route::resource('Partnership', 'App\Http\Controllers\PartnershipController');
	 Route::resource('Galeri', 'App\Http\Controllers\GaleriController'); 
	 Route::resource('program-kerja', 'App\Http\Controllers\ProgramKerjaController'); 
	 Route::resource('struktur_organisasi', 'App\Http\Controllers\StrukturOrganisasiController'); 
	 Route::put('/tambah-jabatan/{id}', 'App\Http\Controllers\DataAnggotaController@tambahjabatan')->name('masuk-jabatan');
	 Route::post('/data/import_excel', 'App\Http\Controllers\DataAnggotaController@importExcelCSV');
	 Route::post('jabatan', 'App\Http\Controllers\jabatanController@store')->name('tambah-jabatan');
	 
	 Route::get('export-excel-csv-file/{slug}', 'App\Http\Controllers\DataAnggotaController@exportExcelCSV');
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

