<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('backend.Pengguna.index',compact('data'))->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);
        return view('backend.Pengguna.detail',compact('data'));
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
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'profile_photo_path' => 'required|image',
            'jenis_kelamin' => 'required',
            'email' => 'required|email',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        if ($validator->fails()) {
            \Alert::error('Gagal memperbarui profile');
            return redirect()->back()->withErrors($validator)
                ->withInput();
        }

        $findId = User::findOrFail($id);
        $data['profile_photo_path'] = $request->file('profile_photo_path')->storeAs('asset/user',$request->file('profile_photo_path')->getClientOriginalName(),'public');
        $findId->update($data);
        \Alert::toast('Berhasil Memperbarui Data','success');
        return back()->with([
            'message' => 'Berhasil Di Update'
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
        $data = User::find($id);
        $data -> delete($id);
        return redirect()->route('pengguna.index');
    }
}
