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
            $getFullname = $dataArtikelSendiri->dokter->fullname;
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
            'photo' => 'required|image:jpg,png',
        ])->validate();

        $data['photo']  = $request->file('photo')->store('artikel','public', $request->file('photo')->getClientOriginalName());
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
