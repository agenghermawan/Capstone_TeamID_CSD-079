<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\jawabanKonsultasi;
use App\Models\konsultasi;
use Illuminate\Http\Request;
use Auth;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.Konsultasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.Konsultasi.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Validator::make($request->all(),[
            'judulKonsultasi' => 'required',
            'judulKonsultasi' => 'required',
            'ditulisOleh' => 'required'
        ])->validate();

        konsultasi::create($request->all());
        \Alert::success('Berhasil','anda berhasil melakukan konsultasi silahkan menunggu balasan dari dokter');
        return back();
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
            return view('frontend.Profile.detail',compact('data','datajawabankonsultasi'));
        }else{
            $idDokter = $datajawabankonsultasi->user->id;
            $datadokter = Dokter::where('user_id', $idDokter)->first();
            return view('frontend.Profile.detail',compact('data','datajawabankonsultasi','datadokter'));
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
        //
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
