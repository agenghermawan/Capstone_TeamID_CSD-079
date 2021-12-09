<?php

namespace App\Http\Controllers\Backend;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PenyakitController extends Controller
{
    public function index()
    {
        return  view('frontend.Penyakit');
    }
}
