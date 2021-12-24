<?php

namespace App\Http\Controllers\Backend;

use Alert;
use App\Http\Controllers\Controller;
use App\Models\KategoriObat;
use App\Models\Obat;
use Illuminate\Http\Request;
use Validator;

use function GuzzleHttp\Promise\all;

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
        return  view('backend.Obat.create',compact('data'));
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
         $data = KategoriObat::all();
        $obatData = Obat::findOrFail($id);
        return view('backend.Obat.edit',compact('data','obatData'));
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
        $data = Obat::findOrFail($id);
        if($request->photoObat == null){
            $data -> update($request->all());
            Alert::toast('Berhasil memperbarui data obat','success');
            return redirect()->route('obat.index');
        } else{
            $getNama = $request->file('photoObat')->getClientOriginalName();
            $post = $request->all();
            $post['photoObat'] = $request->file('photoObat')->storeAs('assets/Obat', $getNama ,'public');
            $data->update($post);
            Alert::toast('Berhasil memperbarui data obat','success');
            return redirect()->route('obat.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Obat::find($id);
        $data->delete($id);
        Alert::toast('Berhasil menghapus data obat','success');
        return redirect()->route('obat.index');
    }
}
