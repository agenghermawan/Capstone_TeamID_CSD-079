<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        if(request('searchArtikel')){
            $keywoard = \request('searchArtikel');
            $data = Artikel::where('title', 'like', "%{$keywoard}%")->latest()->get();
            return  view('frontend.Artikel.index',compact('data'));
        }
        else{
            $data = Artikel::all();
            return  view('frontend.Artikel.index',compact('data'));
        }
    }
    public function show($id){
        $data = Artikel::findOrFail($id);
        $artikelTerkait = Artikel::all()->take(4);
        return view('frontend.Artikel.detail',compact('data','artikelTerkait'));
    }
}
