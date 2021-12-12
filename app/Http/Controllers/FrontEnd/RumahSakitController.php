<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Poliklinik;
use App\Models\RumahSakit;
use PHPUnit\Framework\Constraint\Count;

class RumahSakitController extends Controller
{
    public function index (){
        $data = Poliklinik::all();
        return view('frontend.RumahSakit.index',compact('data'));
    }
    public function show ($nama){
       $data = RumahSakit::where('poliklinik', 'like', "%{$nama}%")->get();
       /*Modal::whereIn('column', $ids)->get(); */
       return view('frontend.RumahSakit.show',compact('data','nama'));
    }
    public function detail($id){
        $dataRumahsakit = RumahSakit::where('id',$id)->first();
        $getfieldPoliklinik = $dataRumahsakit->poliklinik;
        $count = count($getfieldPoliklinik);
        $data = [];
            foreach ($getfieldPoliklinik as $item){
                $dataPoliklinik = Poliklinik::where('nama', $item)->get();
                array_push($data,$dataPoliklinik);
            }
        return view('frontend.RumahSakit.detail',compact('data','dataRumahsakit'));
    }
}
