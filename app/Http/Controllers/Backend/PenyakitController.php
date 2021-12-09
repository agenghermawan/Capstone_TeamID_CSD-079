<?php

namespace App\Http\Controllers\Backend;

use App\Models\Penyakit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.Penyakit.index');
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
        dd($request);
        $penyakit = new Penyakit();
        $penyakit->id = 0;
        $penyakit -> exists = true;
        $penyakit -> $request->namaPenyakit;
        $penyakit -> $request->deskripsiPenyakit;
        $penyakit -> $request->isiPenyakit;
        $penyakit -> $request->photoPenyakit;
        $image = $penyakit -> addMediaFromRequest('photoPenyakit')->toMediaCollection('images');
        return response()->json([
            'url' => $image->getUrl()
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.Penyakit.edit');
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
