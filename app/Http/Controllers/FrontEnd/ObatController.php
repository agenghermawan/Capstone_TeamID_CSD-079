<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\KategoriObat;
use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index(){
        if (request('searchObat')){
            $keywoard = \request('searchObat');
            $data = KategoriObat::where('nama', 'like', "%{$keywoard}%")->latest()->get();
            return  view('frontend.obat.index',compact('data'));
        }
        else{
            $data = KategoriObat::all();
            return  view('frontend.Obat.index',compact('data'));
        }
    }
    public function show($id){
        $dataRekomendasi = Obat::where('id' , '!=', $id)->get()->random(3);
        $data = Obat::where('id',$id)->first();
        return view('frontend.Obat.detail',compact('data','dataRekomendasi'));
    }
    public function kategori($kategori){

        if(request('searchObat')){
            $keywoard = \request('searchObat');
            $data = Obat::where('namaObat', 'like', "%{$keywoard}%")->latest()->get();
            return  view('frontend.Obat.listkategori',compact('data','kategori'));
        }
        else{
            $data = Obat::all()->where('kategori',$kategori);
            return view('frontend.Obat.listkategori',compact('data','kategori'));
        }
    }
}
