<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Dokter;
use App\Models\RumahSakit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function index(){
        $responseGetDataIndonesia = Http::get('https://api.kawalcorona.com/indonesia/');
        $dataIndonesia = json_decode($responseGetDataIndonesia);
        $countRumahSakit = RumahSakit::all()->count();
        $countPengguna = User::all()->count();
        $countDokter= Dokter::all()->count();
        alert()->toast('Dashboard','Lorem Lorem Lorem');
        return view('backend.dashboard',compact('dataIndonesia','countRumahSakit','countPengguna','countDokter'));
    }
}
