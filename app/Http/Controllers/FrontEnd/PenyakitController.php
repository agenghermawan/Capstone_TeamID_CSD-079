<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penyakit;

class PenyakitController extends Controller
{
    public function index()
    {
        if (request('searchPenyakit')){
            $keywoard = \request('searchPenyakit');
            $data = Penyakit::where('namaPenyakit', 'like', "%{$keywoard}%")->latest()->get();
            return  view('frontend.Penyakit.index',compact('data'));
        }
        else{
            $data = Penyakit::orderBy('namaPenyakit')->get();
            return  view('frontend.Penyakit.index',compact('data'));
        }
    }
    public function detail($id)
    {
        $data = Penyakit::find($id);
        $rekomendasi = Penyakit::where('id', '!=' ,$id)->orWhereNull('id')->get()->take(3);
        return view('frontend.Penyakit.detail',compact('data','rekomendasi'));
    }
}
