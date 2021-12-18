<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penyakit;

class PenyakitController extends Controller
{
    public function index()
    {
        $data = Penyakit::orderBy('namaPenyakit')->get();
        return  view('frontend.Penyakit.index',compact('data'));
    }
    public function detail($id)
    {
        $data = Penyakit::find($id);
        $rekomendasi = Penyakit::where('id', '!=' ,$id)->orWhereNull('id')->get();
        return view('frontend.Penyakit.detail',compact('data','rekomendasi'));
    }
}
