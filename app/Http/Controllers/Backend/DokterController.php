<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\RumahSakit;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use RealRashid\SweetAlert\Facades\Alert;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Auth::user()->role_pengguna == 'Dokter'){
            $dataDiriSendiri = \Auth::user()->id;
            $data = User::whereRelation('dokter', 'status', 'active')
                ->where('id',$dataDiriSendiri)
                ->get();
            return view('backend.Dokter.index',compact('data'));
        }else{
            $data = User::whereRelation('dokter', 'status', 'active')
            ->get();
        return view('backend.Dokter.index',compact('data'));
        };
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $data =  RumahSakit::all();
        return view('backend.Dokter.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'fullname' => 'required',
            'noStr' => 'required',
            'telp' => 'required',
            'user_id' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'rumahSakit' => 'required',
            'sebagaiDokter' => 'required',
        ])->validate();
        Dokter::create($request->all());
        Alert::success('Success Title', 'Ditunggu, Data kamu sedang di verifikasi');
        return redirect()->route('LandingPage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::with('dokter','rumahsakit')->find($id);
        return view('backend.Dokter.edit',compact('data'));
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
        dd($request);
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

    public function daftarPermintaan()
    {
        return view('backend.Dokter.daftarPermintaan',['data' => Dokter::where('status','non-active')->get()]);
    }
    public function Permintaan($id)
    {
        $data = User::with('dokter')->where('id',$id)->first();
        return view('backend.Dokter.Permintaan',compact('data'));
    }
    public function jawabanPermintaan(Request $request, $id)
    {
        $getDokter = Dokter::find($id);
        if ($request->status == 'diterima'){
            $getDokter -> status = 'active';
            $getDokter->save();
        }elseif ($request->status == 'ditolak'){
            $getDokter->status = $request->status;
            $getDokter->save();
        }
        if (\Auth::user()->role_pengguna == 'Dokter'){
            $dataDiriSendiri = \Auth::user()->id;
            $data = User::whereRelation('dokter', 'status', 'active')
                ->where('id',$dataDiriSendiri)
                ->get();
            Alert::toast('Kamu Berhasil Menyetujui sebagai dokter','success');
            return view('backend.Dokter.index',compact('data'));
        }else{
            $data = User::whereRelation('dokter', 'status', 'active')
                ->get();
        Alert::toast('Kamu Berhasil Menyetujui sebagai dokter','success');
            return view('backend.Dokter.index',compact('data'));
        };
    }
}
