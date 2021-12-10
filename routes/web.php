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
use App\Http\Controllers\Backend\ImageUploadController;
use RealRashid\SweetAlert\Facades\Alert;
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
    return view('frontend.home');
})->name('LandingPage');


// Route::get('penyakit',[App\Http\Controllers\Frontend\ArtikelController::class, 'index'] );
Route::get('artikel',[App\Http\Controllers\Frontend\ArtikelController::class, 'index'] )->name('artikel_frontend');
Route::get('detail/artikel/{id}',[App\Http\Controllers\Frontend\ArtikelController::class, 'show'] )->name('artikelShow_frontend');
Route::get('rumahsakit',[App\Http\Controllers\Frontend\RumahSakitController::class, 'index'] )->name('rumahSakit_frontend');
Route::get('rumahsakit/show/{id}',[App\Http\Controllers\Frontend\RumahSakitController::class, 'show'] )->name('rumahSakit_show_frontend');
Route::get('rumahsakit/detail/{id}',[App\Http\Controllers\Frontend\RumahSakitController::class, 'detail'] )->name('rumahSakit_detail_frontend');

Route::get('buatJanji/dokter',[App\Http\Controllers\Frontend\DataCovidController::class, 'index'] )->name('dataCovid_frontend');


Route::get('DataCovid',[App\Http\Controllers\Frontend\BuatJanjiController::class, 'index'] )->name('buatjanji_frontend');


Route::get('obat',[App\Http\Controllers\Frontend\ObatController::class, 'index'] )->name('obat_frontend');
Route::get('detail/obat/{id}',[App\Http\Controllers\Frontend\ObatController::class, 'show'] )->name('obatShow_frontend');
Route::get('kategori/obat',[App\Http\Controllers\Frontend\ObatController::class, 'kategori'] )->name('obatKategori_frontend');



Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('covid', [getDataCovidController::class, 'index'])->name('backendGetDataCovid');

    Route::post('image_upload', [ImageUploadController::class, 'store'])->name('image_upload');
    Route::get('callback/register',[App\Http\Controllers\Auth\RegisteredUserController::class, 'callbacDocter'] )->name('callbacDocter');

    Route::resource('rumahSakit', RumahSakitController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('pengguna', PenggunaController::class);
    Route::resource('dokter', DokterController::class);
    Route::resource('obat', ObatController::class);
    Route::resource('penyakit', PenyakitController::class);
    Route::resource('poliklinik', PoliKlinikController::class);
});


require __DIR__.'/auth.php';
