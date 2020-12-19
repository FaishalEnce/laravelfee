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
//BERITA
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/berita','App\Http\Controllers\BeritaController@index')->name('berita.index');
Route::get('/berita/create', [App\Http\Controllers\BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita', [App\Http\Controllers\BeritaController::class, 'store'])->name('berita.store');
Route::get('/berita/{id}', [App\Http\Controllers\BeritaController::class, 'show'])->name('berita.show');
Route::delete('/berita/{id}', [App\Http\Controllers\BeritaController::class, 'destroy'])->name('berita.delete');

//KECAMATAN
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kecamatan','App\Http\Controllers\KecController@index')->name('kecamatan.index');
Route::get('/kecamatan/create', [App\Http\Controllers\KecController::class, 'create'])->name('kecamatan.create');
Route::post('/kecamatan', [App\Http\Controllers\KecController::class, 'store'])->name('kecamatan.store');
Route::get('/kecamatan/{id}', [App\Http\Controllers\KecController::class, 'show'])->name('kecamatan.show');
Route::delete('/kecamatan/{id}', [App\Http\Controllers\KecController::class, 'destroy'])->name('kecamatan.delete');

//LUAS
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/luas','App\Http\Controllers\LuasController@index')->name('luas.index');
Route::get('/luas/create', [App\Http\Controllers\LuasController::class, 'create'])->name('luas.create');
Route::post('/luas', [App\Http\Controllers\LuasController::class, 'store'])->name('luas.store');
Route::get('/luas/{id}', [App\Http\Controllers\LuasController::class, 'show'])->name('luas.show');
Route::delete('/luas/{id}', [App\Http\Controllers\LuasController::class, 'destroy'])->name('luas.delete');

//PRODUKSI
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/produksi','App\Http\Controllers\ProduksiController@index')->name('produksi.index');
Route::get('/produksi/create', [App\Http\Controllers\ProduksiController::class, 'create'])->name('produksi.create');
Route::post('/produksi', [App\Http\Controllers\ProduksiController::class, 'store'])->name('produksi.store');
Route::get('/produksi/{id}', [App\Http\Controllers\ProduksiController::class, 'show'])->name('produksi.show');
Route::delete('/produksi/{id}', [App\Http\Controllers\ProduksiController::class, 'destroy'])->name('produksi.delete');

//PRODUKTIFITAS_PERKEBUNAN
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/produktifitas_perkebunan','App\Http\Controllers\PpController@index')->name('produktifitas_perkebunan.index');
Route::get('/produktifitas_perkebunan/create', [App\Http\Controllers\PpController::class, 'create'])->name('produktifitas_perkebunan.create');
Route::post('/produktifitas_perkebunan', [App\Http\Controllers\PpController::class, 'store'])->name('produktifitas_perkebunan.store');
Route::get('/produktifitas_perkebunan/{id}', [App\Http\Controllers\PpController::class, 'show'])->name('produktifitas_perkebunan.show');

//TANAMAN
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tanaman','App\Http\Controllers\TanamanController@index')->name('tanaman.index');
Route::get('/tanaman/create', [App\Http\Controllers\TanamanController::class, 'create'])->name('tanaman.create');
Route::post('/tanaman', [App\Http\Controllers\TanamanController::class, 'store'])->name('tanaman.store');
Route::get('/tanaman/{id}', [App\Http\Controllers\TanamanController::class, 'show'])->name('tanaman.show');
Route::delete('/tanaman/{id}', [App\Http\Controllers\TanamanController::class, 'destroy'])->name('tanaman.delete');

//TENAGA_KERJA
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tenaga_kerja','App\Http\Controllers\TenagaController@index')->name('tenaga_kerja.index');
Route::get('/tenaga_kerja/create', [App\Http\Controllers\TenagaController::class, 'create'])->name('tenaga_kerja.create');
Route::post('/tenaga_kerja', [App\Http\Controllers\TenagaController::class, 'store'])->name('tenaga_kerja.store');
Route::get('/tenaga_kerja/{id}', [App\Http\Controllers\TenagaController::class, 'show'])->name('tenaga_kerja.show');
