<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\Poliklinik;
use App\Models\RumahSakit;
use Illuminate\Http\Request;

class BuatJanjiController extends Controller
{
    public function index($id, $rumahsakitid,$nama){
        $data = Dokter::with('user')->where('user_id',$id)->first();
        $rumahsakit = RumahSakit::where('id',$rumahsakitid)->first();
        $poliklinik = Poliklinik::where('nama',$nama)->first();
        return view('frontend.BuatJanji.index',compact('data','rumahsakit','poliklinik'));
    }
    public function create(){
        $tanggalJanji = request('tanggal_janji');
        $jamjanji = request('jam_janji');

        // Mencari data dokter berdasarkan ID dokter yang dipilih
        $dokterID = request('dokter_id');
        $dataDokter = Dokter::where('id',$dokterID)->first();

        //Mencari data berdasrarkan ID rumah sakit yang dipilih
        $rumahSakitID = request('rumahsakit_id');
        $dataRumahSakit = RumahSakit::where('id',$rumahSakitID)->first();

        $poliklinikID = request('poliklinik_id');
        $dataPoliklinik = Poliklinik::where('id',$poliklinikID)->first();

        return view('frontend.BuatJanji.create',compact('tanggalJanji','jamjanji','dataDokter','dataRumahSakit','dataPoliklinik'));
    }

    public function konfirmasi(Request $request){
        dd($request->all());
    }
}
