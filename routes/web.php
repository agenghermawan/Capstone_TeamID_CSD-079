<?php

use App\Http\Controllers\Backend\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\RumahSakitController;
use App\Http\Controllers\Backend\PenggunaController;
use App\Http\Controllers\Backend\getDataCovidController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DokterController;
use App\Http\Controllers\Backend\ObatController;
use App\Http\Controllers\Backend\PenyakitController;
use App\Http\Controllers\Backend\PoliKlinikController;

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


Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('covid', [getDataCovidController::class, 'index'])->name('backendGetDataCovid');

    Route::resource('rumahSakit', RumahSakitController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('pengguna', PenggunaController::class);
    Route::resource('dokter', DokterController::class);
    Route::resource('obat', ObatController::class);
    Route::resource('penyakit', PenyakitController::class);
    Route::resource('poliklinik', PoliKlinikController::class);


});



require __DIR__.'/auth.php';
