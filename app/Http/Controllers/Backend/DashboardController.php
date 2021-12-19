<?php

namespace App\Http\Controllers\Backend;

use App\Models\JanjiTemu;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Dokter;
use App\Models\RumahSakit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class DashboardController extends Controller
{
    public function index(){
        $responseGetDataIndonesia = Http::get('https://api.kawalcorona.com/indonesia/');
        $dataIndonesia = json_decode($responseGetDataIndonesia);
        $countRumahSakit = RumahSakit::all()->count();
        $countPengguna = User::all()->count();
        $countDokter= Dokter::all()->count();
        $mytime = Carbon::now();
        $day = Carbon::now()->format('l');

        if(Auth::user()->role_pengguna == 'Dokter'){
            $dataDokter = User::with('dokter')->where('id',Auth::user()->id)->first();
            $getID = Dokter::where('user_id',Auth::user()->id)->first();
            $janjiTemu = JanjiTemu::where('dokter_id', $getID->id)->get()->take(2);

            $greetings = "";
            $time = date("H");
            $timezone = date("e");
            if ($time < "12") {
                $greetings = "Selamat Pagi";
            } else
                if ($time >= "12" && $time < "17") {
                    $greetings = "Selamat Siang";
                } else
                    if ($time >= "17" && $time < "19") {
                        $greetings = "Selamat Sore";
                    } else
                        if ($time >= "19") {
                            $greetings = "Selamat Malam";
                        }
            return view('backend.dashboard',compact('dataIndonesia','countRumahSakit','countPengguna','countDokter','greetings', 'janjiTemu','dataDokter'));

        }else {
            $getID = User::where('id',Auth::user()->id)->first();
            $janjiTemu = JanjiTemu::where('dokter_id', $getID->id)->get()->take(2);

            $greetings = "";
            $time = date("H");
            $timezone = date("e");
            if ($time < "12") {
                $greetings = "Selamat Pagi";
            } else
                if ($time >= "12" && $time < "17") {
                    $greetings = "Selamat Siang";
                } else
                    if ($time >= "17" && $time < "19") {
                        $greetings = "Selamat Sore";
                    } else
                        if ($time >= "19") {
                            $greetings = "Selamat Malam";
                        }
                    }
                    return view('backend.dashboard',compact('dataIndonesia','countRumahSakit','countPengguna','countDokter','greetings', 'janjiTemu'));
        }
}
