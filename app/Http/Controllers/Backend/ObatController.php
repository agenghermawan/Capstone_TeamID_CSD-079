<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\KategoriObat;
use App\Models\Obat;
use Illuminate\Http\Request;
use Validator;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataObat = Obat::all();
        return view('backend.Obat.index',compact('dataObat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = KategoriObat::all();
        return  view('backend.obat.create',compact('data'));
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
        Validator::make($data,[
            "namaObat" => "required",
            "golongan" => "required",
            "kategori" => "required",
            "bentukObat" => "required",
            "photoObat" => "required|image:jpg,png,webp",
            "merkDagang" => "required",
            "manfaat" => "required",
            "deskripsi" => "required",
            "productObat" => "required",
            "dosisdanaturan" => "required",
            "interaksi" => "required",
            "efekSamping" => "required",
        ]);

        $data['photoObat'] = $request->file('photoObat')->store('assets/Obat','public',$request->file('photoObat')->getClientOriginalName());
        Obat::create($data);
        \Alert::toast('berhasil menambahkan data obat','success');
        return back()->with([
            'message' => 'Berhasil Ditambahkan',
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
        $detailDataObat = Obat::findOrFail($id);
        return view('backend.Obat.detail',compact('detailDataObat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
