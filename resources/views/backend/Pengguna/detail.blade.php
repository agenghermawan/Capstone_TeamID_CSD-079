@extends('layouts.app')

@section('content')

    <div class="text-base font-semibold mt-5 mb-2"> Detail Data Pengguna</div>
    <div class="grid grid-cols-1 gap-3 md:grid-cols-2 xl:grid-cols-3  mt-10">
        <div class="bg-white col-span-1 xl:col-span-1 p-5 h-auto rounded-xl">
            <div class="image-information items-center flex border-b pb-5">
                <div class="image w-1/4">
                    @if(Auth::user()->profile_photo_path == null)
                        <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" class="rounded-full" width="60px" height="60px" alt="">
                    @else
                        <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" alt="" class="rounded-full" width="60px" height="60px">
                    @endif
                </div>
                <div class="name-information w-3/4">
                    <h4 class="font-bold text-gray-500 text-lg"> {{ $data->name }}</h4>
                    <p> {{$data->role_pengguna}} </p>
                </div>
            </div>

            <div class="all-information my-2">
                <p> <i class="fas fa-file-medical-alt mr-2 fa-lg"></i> Informasi
                    Pengguna
                </p>
                <div class="text-sm text-gray-500 mb-4 mt-2">
                    <p> Nama</p>
                    <h4 class="text-medium text-black"> {{ $data->name }}</h4>
                </div>
                <div class="text-sm text-gray-500 mb-4 mt-2">
                    <p> Email</p>
                    <h4 class="text-medium text-black"> {{ $data->email }}</h4>
                </div>
                <div class="text-sm text-gray-500 mb-4 mt-2">
                    <p> Nama</p>
                    <h4 class="text-medium text-black"> {{ $data->alamat }}</h4>
                </div>
                <p> <i class="fas fa-id-card-alt mr-1 fa-lg"></i> Detail
                    Informasi
                </p>
                <div class="text-sm text-gray-500 mb-4 mt-2">
                    <p> Nama</p>
                    <h4 class="text-medium text-black"> {{ $data->telp }}</h4>
                </div>
                <div class="text-sm text-gray-500 mb-4 mt-2">
                    <p> Nama</p>
                    <h4 class="text-medium text-black"> {{ $data->kode_pos }}</h4>
                </div>
                <div class="text-sm text-gray-500 mb-4 mt-2">
                    <p> Nama</p>
                    <h4 class="text-medium text-black"> {{ $data->jenis_kelamin }}</h4>
                </div>
                <div class="text-sm text-gray-500 mb-4 mt-2">
                    <p> Nama</p>
                    <h4 class="text-medium text-black"> {{ $data->umur }}</h4>
                </div>
                <div class="text-sm text-gray-500 mb-4 mt-2">
                    <p> Nama</p>
                    <h4 class="text-medium text-black"> {{ $data->provinsi }}</h4>
                </div>
            </div>

        </div>
        <div class="col-span-1 xl:col-span-2">
            <div class="bg-white p-5 mb-10 rounded-lg">
                <h4 class="text-base font-semibold border-b pb-2 mb-3 mt-2 text-gray-700"> Informasi Pengguna </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:grid-cols-2">
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Nama :</label>
                            <input type="text" name="name"
                                class="rounded shadow-sm w-full border p-2 border-gray-400 border-opacity-25 appearance-none focus:border-gray-500 text-gray-500 text-sm focus:border-opacity-100" required
                                value="{{ $data->name }}">
                            @error('name')
                                <p class="text-sm text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Email :</label>
                            <input type="text" name="email"
                                class="rounded shadow-sm w-full border p-2 border-gray-400 border-opacity-25 appearance-none focus:border-gray-500 text-gray-500 text-sm focus:border-opacity-100"  required
                                value="{{ $data->email }}">
                            @error('email')
                            <p class="text-sm text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:grid-cols-2">
                        <div class="mb-4 col-span-2">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Alamat :</label>
                            <input type="text" name="alamat"
                                class="rounded shadow-sm w-full border p-2 border-gray-400 border-opacity-25 appearance-none focus:border-gray-500 text-gray-500 text-sm focus:border-opacity-100" required
                                value="{{ $data->alamat }}">
                            @error('alamat')
                            <p class="text-sm text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
            </div>
            <div class="bg-white p-5 mb-10 rounded-lg">
                <h4 class="text-base font-semibold border-b pb-2 mb-3 mt-2 text-blue-700"> Informasi Pengguna </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:grid-cols-2">
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Telp :</label>
                            <input type="text" name="telp"
                                class="rounded shadow-sm w-full border p-2 border-gray-400 border-opacity-25 appearance-none focus:border-gray-500 text-gray-500 text-sm focus:border-opacity-100" required
                                value="{{ $data->telp }}">
                            @error('telp')
                            <p class="text-sm text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Kode Pos :</label>
                            <input type="text" name="kode_pos"
                                class="rounded shadow-sm w-full border p-2 border-gray-400 border-opacity-25 appearance-none focus:border-gray-500 text-gray-500 text-sm focus:border-opacity-100" required
                                value="{{ $data->kode_pos }}">
                            @error('kode_pos')
                            <p class="text-sm text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:grid-cols-2">
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Jenis Kelamin :</label>
                            <input type="text" name="jenis_kelamin"
                                class="rounded shadow-sm w-full border p-2 border-gray-400 border-opacity-25 appearance-none focus:border-gray-500 text-gray-500 text-sm focus:border-opacity-100" required
                                value="{{ $data->jenis_kelamin }}">
                            @error('jenis_kelamin')
                            <p class="text-sm text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Umur :</label>
                            <input type="text" name="umur"
                                class="rounded shadow-sm w-full border p-2 border-gray-400 border-opacity-25 appearance-none focus:border-gray-500 text-gray-500 text-sm focus:border-opacity-100" required
                                value="{{ $data->umur }}">
                            @error('umur')
                            <p class="text-sm text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:grid-cols-2">
                        <div class="mb-4 col-span-2">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Provinsi :</label>
                            <input type="text" name="provinsi"
                                class="rounded shadow-sm w-full border p-2 border-gray-400 border-opacity-25 appearance-none focus:border-gray-500 text-gray-500 text-sm focus:border-opacity-100"  required
                                value="{{ $data->provinsi }}">
                            @error('provinsi')
                            <p class="text-sm text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <form action="{{ route('pengguna.destroy',$data->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="rounded p-3 text-blue-400 text-sm"> <i class="fas fa-trash mr-2"></i>
                                Delete Pengguna </button>
                        </form>
                    </div>
            </div>
        </div>
    </div>

@endsection
