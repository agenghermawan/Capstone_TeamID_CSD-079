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
use App\Http\Controllers\Backend\KategoriObatController;
use App\Http\Controllers\Backend\KonsultasiController;
use App\Http\Controllers\Auth\RegisteredUserController;


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
Route::get('rumahsakit/show/{nama}',[App\Http\Controllers\Frontend\RumahSakitController::class, 'show'] )->name('rumahSakit_show_frontend');
Route::get('rumahsakit/detail/{id}/{nama}',[App\Http\Controllers\Frontend\RumahSakitController::class, 'detail'] )->name('rumahSakit_detail_frontend');

Route::get('DataCovid/indonesia',[App\Http\Controllers\Frontend\DataCovidController::class, 'index'] )->name('dataCovid_frontend');


Route::get('Janji/dokter/{id}/{rumahsakitid}/{nama}',[App\Http\Controllers\Frontend\BuatJanjiController::class, 'index'] )->name('buatjanji_frontend');


Route::get('obat',[App\Http\Controllers\Frontend\ObatController::class, 'index'] )->name('obat_frontend');
Route::get('detail/obat/{id}',[App\Http\Controllers\Frontend\ObatController::class, 'show'] )->name('obatShow_frontend');

Route::get('kategori/obat/{kategori}',[App\Http\Controllers\Frontend\ObatController::class, 'kategori'] )->name('obatKategori_frontend');

Route::resource('konsultasi',App\Http\Controllers\Frontend\KonsultasiController::class);

Route::get('success/buatjanji',[App\Http\Controllers\Frontend\SupportController::class, 'konfirmasi'] )->name('success.buatjanji');
Route::get('success/account',[App\Http\Controllers\Frontend\SupportController::class, 'account'] )->name('success.account');

Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('dokter/daftarPermintaan',[DokterController::class,'daftarPermintaan'])->name('dokter_daftarPermintaan');
    Route::get('dokter/permintaan/{id}',[DokterController::class,'Permintaan'])->name('dokter_permintaan');
    Route::put('dokter/jawaban/{id}',[DokterController::class,'jawabanPermintaan'])->name('jawaban_permintaan');
    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('covid', [getDataCovidController::class, 'index'])->name('backendGetDataCovid');
    Route::post('update/pengguna', [PenggunaController::class, 'updateBackend'])->name('updatePenggunaBackend');


    Route::get('callback/register',[RegisteredUserController::class, 'callbacDocter'] )->name('callbacDocter');


    Route::resource('rumahSakit', RumahSakitController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('pengguna', PenggunaController::class);
    Route::resource('dokter', DokterController::class);
    Route::resource('obat', ObatController::class);
    Route::resource('penyakit', PenyakitController::class);
    Route::resource('poliklinik', PoliKlinikController::class);
    Route::resource('kategori-obat', KategoriObatController::class);
    Route::resource('konsultasi-dokter', KonsultasiController::class);

    Route::resource('janji-dokter', \App\Http\Controllers\Backend\JanjiTemuController::class);
});

Route::middleware('auth')->prefix('user')->group(function(){
    Route::get('buat/janji',[App\Http\Controllers\Frontend\BuatJanjiController::class, 'create'])->name('create.janji');
    Route::post('konfirmasi/janji',[App\Http\Controllers\Frontend\BuatJanjiController::class, 'konfirmasi'])->name('konfirmasi.janji');
    Route::resource('profile/user',App\Http\Controllers\Frontend\ProfileController::class);
});


require __DIR__.'/auth.php';
