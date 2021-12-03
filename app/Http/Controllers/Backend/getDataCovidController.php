<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Stream\Stream;

class getDataCovidController extends Controller
{
    public function index(){
        $responseGetDataIndonesia = Http::get('https://api.kawalcorona.com/indonesia/');
        $responseGetDataProvinsi = Http::get('https://apicovid19indonesia-v2.vercel.app/api/indonesia/provinsi');

        $dataIndonesia = json_decode($responseGetDataIndonesia);
        $dataProvinsi = json_decode($responseGetDataProvinsi);
        return view('backend.Covid.index',compact('dataIndonesia','dataProvinsi'));
    }
}
