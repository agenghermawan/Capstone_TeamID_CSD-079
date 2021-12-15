<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Poliklinik;
use Illuminate\Http\Request;
use Validator;

class PoliKlinikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Poliklinik::all();
        return view('backend.poliklinik.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.poliklinik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(),[
            'nama' => 'required',
            'deskripsi' => 'required|max:150',
            'tindakanmedis' => 'required',
        ])->validate();


        Poliklinik::create($request->all());
        \Alert::toast('berhasil menambahkan data poliklinik','success');
        return back()->with([
            'message' => 'Berhasil menambahkan data Poli Klinik',
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
        return view('backend.poliklinik.edit',['data' => Poliklinik::find($id)]);
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
        $findId = Poliklinik::find($id);
        Validator::make($request->all(), [
            'nama' => 'required',
            'deskripsi' => 'required|max:150',
            'tindakanmedis' => 'required',
        ]);

        $findId->update($request->all());
        \Alert::toast('berhasil mempeerbaruin data klinik','success');
        return redirect()->route('poliklinik.index');
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
