<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        $dataArtikel = Artikel::all()->take(4);
        return view('frontend.home',compact('dataArtikel'));
    }
}
