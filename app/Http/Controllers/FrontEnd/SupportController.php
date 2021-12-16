<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function konfirmasi(){
        return view('frontend.support.konfirmasi');
    }
    public function account(){
        return view('frontend.support.success');
    }
}
