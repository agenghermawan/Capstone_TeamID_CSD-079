<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    public function index (){
        return view('frontend.RumahSakit.index');
    }
    public function show ($id){
        return view('frontend.RumahSakit.show');
    }
    public function detail($id){
        return view('frontend.RumahSakit.detail');
    }
}
