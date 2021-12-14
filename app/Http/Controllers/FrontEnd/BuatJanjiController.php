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
    }
}
