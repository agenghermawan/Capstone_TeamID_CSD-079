<?php

namespace App\Http\Controllers\Backend;

use Alert;
use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\Poliklinik;
use App\Models\RumahSakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RumahSakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RumahSakit::all();
        return view('backend.RumahSakit.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataPoliklinik = Poliklinik::all();
        return view('backend.RumahSakit.create',compact('dataPoliklinik'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Validator::make($data, [
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'tentang' => 'required',
            'provinsi' => 'required',
            'kodepos' => 'required|integer',
            'kota' => 'required',
            'notelp' => 'required',
            'lokasiGmaps' => 'required',
            'jamOperasional' => 'required',
            'fasilitas' => 'required',
            'photo' => 'required|image:jpg,png',
        ])->validate();

        $getnamaPhoto = $request->file('photo')->getClientOriginalName();
        $data['photo'] = $request->file('photo')->storeAs('assets/rumahsakit',$getnamaPhoto,'public');
        RumahSakit::create($data);
        Alert::toast('Data rumah sakit berhasil ditambahkan', 'success');
        return back()->with([
            'message'=> 'Data Rumah Sakit Berhasil di tambahkan',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = RumahSakit::findOrFail($id);
        $dataDokter = Dokter::where('rumahsakit_id',$data->id)->get();
        return view('backend.RumahSakit.detail',compact('data','dataDokter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataPoliklinik = Poliklinik::all();
        $data = RumahSakit::findOrFail($id);
        return view('backend.RumahSakit.edit',compact('dataPoliklinik','data'));
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
        $rumahsakit = RumahSakit::find($id);
        $data = $request->all();
        Validator::make($data, [
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'tentang' => 'required',
            'provinsi' => 'required',
            'kodepos' => 'required|integer',
            'kota' => 'required',
            'notelp' => 'required',
            'lokasiGmaps' => 'required',
            'jamOperasional' => 'required',
            'fasilitas' => 'required',
        ])->validate();
        $rumahsakit->update($data);
        Alert::toast('Data rumah sakit berhasil diperbarui', 'success');
        return back()->with([
            'message'=> 'Data Rumah Sakit Berhasil di tambahkan',
        ]);
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
