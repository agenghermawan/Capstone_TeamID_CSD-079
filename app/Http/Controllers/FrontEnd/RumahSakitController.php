<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\Poliklinik;
use App\Models\RumahSakit;
use PHPUnit\Framework\Constraint\Count;

class RumahSakitController extends Controller
{
    public function index (){

        if (request('searchRumahsakit')){
            $keywoard = \request('searchRumahsakit');
            $data = Poliklinik::where('nama', 'like', "%{$keywoard}%")->latest()->get();
            return  view('frontend.rumahsakit.index',compact('data'));
        }
        else{
            $data = Poliklinik::all();
            return  view('frontend.RumahSakit.index',compact('data'));
        }

    }

    public function show ($nama){
       $data = RumahSakit::where('poliklinik', 'like', "%{$nama}%")->get();
       /*Modal::whereIn('column', $ids)->get(); */
       return view('frontend.RumahSakit.show',compact('data','nama'));
    }

    public function detail($id, $nama){
        $dataRumahsakit = RumahSakit::where('id',$id)->first();
        $getfieldPoliklinik = $dataRumahsakit->poliklinik;
        $count = count($getfieldPoliklinik);
        $data = [];
            foreach ($getfieldPoliklinik as $item){
                $dataPoliklinik = Poliklinik::where('nama', $item)->get();
                array_push($data,$dataPoliklinik);
            }
        $dataDokter = Dokter::with('user')->where('rumahsakit_id',$id)->get();
        return view('frontend.RumahSakit.detail',compact('data','dataRumahsakit','dataDokter','nama'));
    }
}
