<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataCovidController extends Controller
{
    public function index(){
        $responseGetDataIndonesia = Http::get('https://api.kawalcorona.com/indonesia/');
        $responseGetDataProvinsi = Http::get('https://apicovid19indonesia-v2.vercel.app/api/indonesia/provinsi');

        $dataIndonesia = json_decode($responseGetDataIndonesia);
        $dataProvinsi = json_decode($responseGetDataProvinsi);
        return view('frontend.DataCovid.index',compact('dataIndonesia','dataProvinsi'));
    }
}
