<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\KategoriObat;
use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index(){
        $data = KategoriObat::all();
        return view('frontend.Obat.index',compact('data'));
    }
    public function show($id){
        $dataRekomendasi =KategoriObat::where('id',$id)->get();
        $data = Obat::where('id',$id)->first();
        return view('frontend.Obat.detail',compact('data','dataRekomendasi'));
    }
    public function kategori($kategori){
        $data = Obat::all()->where('kategori',$kategori);
        return view('frontend.Obat.listkategori',compact('data'));
    }
}
