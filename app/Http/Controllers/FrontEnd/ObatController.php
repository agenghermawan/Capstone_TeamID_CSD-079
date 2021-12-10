<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index(){
        return view('frontend.Obat.index');
    }
    public function show($id){
        return view('frontend.Obat.detail');
    }
    public function kategori(){
        return view('frontend.Obat.listkategori');
    }
}
