<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
     public function index()
    {
        $data = Artikel::all();
        return  view('frontend.Artikel.index',compact('data'));
    }
    public function show($id){
        $data = Artikel::findOrFail($id);
        return view('frontend.Artikel.detail',compact('data'));
    }
}
