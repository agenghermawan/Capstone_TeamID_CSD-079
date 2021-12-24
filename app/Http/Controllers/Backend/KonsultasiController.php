<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Dokter;
use App\Models\jawabanKonsultasi;
use App\Models\konsultasi;
use App\Models\User;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.Konsultasi.index',['data' => konsultasi::with('jawabankonsultasi')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Konsultasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = konsultasi::with('jawabankonsultasi')->where('id',$id)->first();
        $datajawabankonsultasi = jawabanKonsultasi::with('user','konsultasi')->where('konsultasi_id',$id)->first();
        if ($datajawabankonsultasi == null) {
            return view('backend.Konsultasi.show',compact('data','datajawabankonsultasi'));
        }else{
            $idDokter = $datajawabankonsultasi->user->id;
            $datadokter = Dokter::where('user_id', $idDokter)->first();
            return view('backend.Konsultasi.show',compact('data','datajawabankonsultasi','datadokter'));
        }
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
        jawabanKonsultasi::create([
            'konsultasi_id' => $id,
            'jawabanKonsultasi' => $request->jawabanKonsultasi,
            'user_id' => $request->user_id,
        ]);
        \Alert::success('Berhasil Menjawab Konsultasi','Terima kasih');
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
