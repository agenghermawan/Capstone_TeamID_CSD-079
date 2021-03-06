<?php

namespace App\Http\Controllers\Auth;

use App\Models\RumahSakit;
use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        Validator::make($request->all() ,[
             'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telp' => ['required', 'string', 'unique:users'],
            'role_pengguna' => ['required', 'string'],
            'password' => ['required'],
        ])->validate();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'telp' => $request->telp,
            'role_pengguna' => $request->role_pengguna,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        Auth::login($user);
        if ($request->role_pengguna == 'Dokter'){
            \Alert::success('Berhasil Mendaftar Silahkan lanjutkan pendaftaran anda','success');
            return redirect(RouteServiceProvider::HOME);

        }else{
            \Alert::success('Berhasil Mendaftar','success');
            return redirect(RouteServiceProvider::HOME);
        }
    }

    public function callbacDocter(){
        return view('frontend.callbackDoctor',['data' => RumahSakit::all()]);
    }
}
