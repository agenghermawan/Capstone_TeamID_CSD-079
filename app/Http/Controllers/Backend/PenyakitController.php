<?php

namespace App\Http\Controllers\Backend;

use App\Models\Penyakit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPenyakit = Penyakit::all();
        return view('backend.Penyakit.index',compact('dataPenyakit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Penyakit.create');
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
        \Validator::make($data,[
            'deskripsiSingkat' => 'required',
            'ditulisOleh' => 'required',
            'gejala' => 'required',
            'penyebab' => 'required',
            'faktorRisiko' => 'required',
            'pengobatan' => 'required',
            'pencegahan' => 'required',
            'photoPenyakit' => 'required|image:jpg,png',

        ])->validate();
        $data['photoPenyakit'] = $request->file('photoPenyakit')->store('assets/photoPenyakit','public',$request->file('photoPenyakit')->getClientOriginalName());
        Penyakit::create($data);
        \Alert::toast('berhasil menambahkan data penyakit','success');
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
        $data = Penyakit::findOrFail($id);
        return view('backend.Penyakit.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Penyakit::findOrFail($id);
        return view('backend.Penyakit.edit')->with([
            'data' => $data
        ]);
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
        if ($request->photoPenyakit == null){
            $artikel =  Penyakit::find($id);
            $artikel->namaPenyakit = $request->namaPenyakit;
            $artikel->deskripsiSingkat = $request->deskripsiSingkat;
            $artikel->ditulisOleh = $request->ditulisOleh;
            $artikel->gejala = $request->gejala;
            $artikel->penyebab = $request->penyebab;
            $artikel->faktorRisiko = $request->faktorRisiko;
            $artikel->pengobatan = $request->pengobatan;
            $artikel->pencegahan = $request->pencegahan;
            $artikel->save();

            \Alert::toast('Berhasil mempebarui Artikel','success');
            return redirect()->route('penyakit.index');
        }
        else{
            $data= $request->all();
                Validator::make($data, [
                    'photoPenyakit' => 'required|image'
                ])->validate();
            $findID = Penyakit::find($id);
            $data['photoPenyakit'] = $request->file('photoPenyakit')->storeAs('assets/Penyakit', $request->file('photoPenyakit')->getClientOriginalName(), 'public');
                 $findID->update($data);
            \Alert::toast('Berhasil mempebarui Artikel','success');
            return redirect()->route('penyakit.index');
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
        $data = Penyakit::find($id);
        $data->delete($id);
        \Alert::success('berhasil menghapus data penyakit','success');
        return redirect()->route('penyakit.index');
    }
}
