<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\AfterDoctor;
use App\Mail\RejectedJanji;
use App\Mail\SelesaiBuaJanji;
use App\Mail\TerimaPermintaanJanji;
use App\Models\Dokter;
use App\Models\JanjiTemu;
use App\Models\Poliklinik;
use App\Models\RumahSakit;
use Illuminate\Http\Request;
use Mail;
use App\Mail\SuccessBuatJanji;
use Auth;

class JanjiTemuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role_pengguna == 'Dokter'){
            $getID = Dokter::with('user')->where('user_id',Auth::user()->id)->first();
            $data = JanjiTemu::where('dokter_id', $getID->id)->paginate(8);
            return view('backend.JanjiTemu.index',compact('data','getID'));
        }else{
            $getID = Dokter::with('user')->where('user_id',Auth::user()->id)->first();
            $data = JanjiTemu::all();
            return view('backend.JanjiTemu.index',compact('data','getID'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();
        $dataRumahsakit = RumahSakit::where('id',$data['rumahsakit_id'])->first();
        $dataDokter = Dokter::where('id',$data['dokter_id'])->first();
        $dataPoliklinik = Poliklinik::where('id',$data['poliklinik_id'])->first();
        $dataEmail = $data['email'];
        $EmailDoctor =  $dataDokter->email;

        JanjiTemu::create($data);
        Mail::to($dataEmail)->send(new SuccessBuatJanji($data,$dataRumahsakit,$dataDokter,$dataPoliklinik));

        Mail::to($EmailDoctor)->send(new AfterDoctor($data,$dataRumahsakit,$dataDokter,$dataPoliklinik));

        \Alert::success('kamu berhasil melakukan pengajuan janji dengan dokter silahkan tunggu konfirmasi','success');
        return redirect()->route('success.buatjanji');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = JanjiTemu::where('id',$id)->first();
        $dataRumahSakit = RumahSakit::where('id',$data->rumahsakit_id)->first();
        $dataDokter = Dokter::where('id',$data->dokter_id)->first();
        $dataPoliklinik = Poliklinik::where('id',$data->poliklinik_id)->first();
        return view('backend.JanjiTemu.show',compact('data','dataRumahSakit','dataDokter','dataPoliklinik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data= JanjiTemu::find($id);
        $getEmail = $data->email;

        $dataRumahsakit = RumahSakit::where('id',$data->rumahsakit_id)->first();
        $dataDokter = Dokter::where('id',$data->dokter_id)->first();
        $dataPoliklinik = Poliklinik::where('id',$data->poliklinik_id)->first();

        $data->status = $request->status;
        $data->save();

        if($request->status == 'Permintaan Diterima'){
            Mail::to($getEmail)->send(new TerimaPermintaanJanji($data,$dataRumahsakit,$dataDokter,$dataPoliklinik));
        }elseif($request->status == 'Permintaan Ditolak'){
            Mail::to($getEmail)->send(new RejectedJanji($data,$dataRumahsakit,$dataDokter,$dataPoliklinik));
        }elseif($request->status == 'Selesai'){
            Mail::to($getEmail)->send(new SelesaiBuaJanji($data,$dataRumahsakit,$dataDokter,$dataPoliklinik));
        }
        \Alert::success('Berhasil memperbarui Data','Kami sudah memberikan informasi persetujuan kepada Pasien');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
