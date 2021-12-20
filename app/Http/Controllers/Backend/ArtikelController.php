<?php

namespace App\Http\Controllers\Backend;

use App\Models\Artikel;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Auth::user()->role_pengguna == 'Dokter') {
            $getId = \Auth::user()->id;
            $dataArtikelSendiri = User::with('dokter')->where('id', $getId)->first();
            $getFullname = $dataArtikelSendiri->name;
            return view('backend.Artikel.index', ['data' => Artikel::where('ditulisOleh', $getFullname)->get()]);

        } else{
            $data = Artikel::all();
            return view('backend.Artikel.index', compact('data'));
       }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Artikel.create');
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
            'title' => 'required|max:255',
            'isiArtikel' => 'required',
            'ditulisOleh' => 'required',
            'kategori' => 'required',
            'refrensi' => 'required',
            'photo' => 'nullable',
            'penulis_id' => 'required',
        ])->validate();

        if ($request->photo != null){
            $data['photo']  = $request->file('photo')->store('artikel','public', $request->file('photo')->getClientOriginalName());
        }

        Artikel::create($data);
        \Alert::toast('berhasil menambahkan data artikel','success');
        return back()->with([
            'message' => 'Berhasil ditambahkan'
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
        $dataArtikel = Artikel::findOrFail($id);
        return view('backend.Artikel.show',compact('dataArtikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Artikel::find($id);
        return view('backend.Artikel.edit',compact('data'));
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
        if ($request->photo == null){
           $artikel =  Artikel::find($id);
           $artikel->title = $request->title;
           $artikel->isiArtikel = $request->isiArtikel;
           $artikel->ditulisOleh = $request->ditulisOleh;
           $artikel->kategori = $request->kategori;
           $artikel->refrensi = $request->refrensi;
           $artikel->save();

            \Alert::toast('Berhasil mempebarui Artikel','success');
            return redirect()->route('artikel.index');
        }
        else{
            $data= $request->all();
            Validator::make($data, [
            'photo' => 'required|image'
            ])->validate();
            $findID = Artikel::find($id);
            $data['photo'] = $request->file('photo')->storeAs('assets/Artikel', $request->file('photo')->getClientOriginalName(), 'public');
            $findID->update($data);
            \Alert::toast('Berhasil mempebarui Artikel','success');
            return redirect()->route('artikel.index');
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
        $artikelID = Artikel::find($id);
        $artikelID->delete($id);
        \Alert::toast('berhasil menghapus artikel','success');
        return redirect()->route('artikel.index');
    }
}
