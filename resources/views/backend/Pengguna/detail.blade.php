@extends('layouts.app')

@section('content')

    <div class="text-base font-semibold mt-5 mb-2"> Detail Data Pengguna</div>
    <div class="grid grid-cols-1 gap-3 md:grid-cols-2 xl:grid-cols-3  mt-10">
        <div class="bg-white col-span-1 xl:col-span-1 p-5 h-auto rounded-xl">
            <div class="image-information items-center flex border-b pb-5">
                <div class="image w-1/4">
                    <img src="{{ asset('image/profile.jpg') }}" class="w-24 h-24 rounded-full" alt="">
                </div>
                <div class="name-information w-3/4 ">
                    <h4 class="font-bold text-gray-500 text-lg"> {{ $data->name }}</h4>
                    <p> Pengguna </p>
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
                <form action="">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:grid-cols-2">
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Nama :</label>
                            <input type="text" name="name"
                                class="rounded shadow-sm w-full border p-2 border-gray-400 border-opacity-25 appearance-none focus:border-gray-500 text-gray-500 text-sm focus:border-opacity-100"
                                value="{{ $data->name }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Email :</label>
                            <input type="text" name="email"
                                class="rounded shadow-sm w-full border p-2 border-gray-400 border-opacity-25 appearance-none focus:border-gray-500 text-gray-500 text-sm focus:border-opacity-100"
                                value="{{ $data->email }}">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:grid-cols-2">
                        <div class="mb-4 col-span-2">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Alamat :</label>
                            <input type="text" name="alamat"
                                class="rounded shadow-sm w-full border p-2 border-gray-400 border-opacity-25 appearance-none focus:border-gray-500 text-gray-500 text-sm focus:border-opacity-100"
                                value="{{ $data->alamat }}">
                        </div>
                    </div>
                </form>
            </div>
            <div class="bg-white p-5 mb-10 rounded-lg">
                <h4 class="text-base font-semibold border-b pb-2 mb-3 mt-2 text-blue-700"> Informasi Pengguna </h4>
                <form action="{{ route('pengguna.update', $data->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:grid-cols-2">
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Telp :</label>
                            <input type="text" name="telp"
                                class="rounded shadow-sm w-full border p-2 border-gray-400 border-opacity-25 appearance-none focus:border-gray-500 text-gray-500 text-sm focus:border-opacity-100"
                                value="{{ $data->telp }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Kode Pos :</label>
                            <input type="text" name="kode_pos"
                                class="rounded shadow-sm w-full border p-2 border-gray-400 border-opacity-25 appearance-none focus:border-gray-500 text-gray-500 text-sm focus:border-opacity-100"
                                value="{{ $data->kode_pos }}">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:grid-cols-2">
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Jenis Kelamin :</label>
                            <input type="text" name="jenis_kelamin"
                                class="rounded shadow-sm w-full border p-2 border-gray-400 border-opacity-25 appearance-none focus:border-gray-500 text-gray-500 text-sm focus:border-opacity-100"
                                value="{{ $data->jenis_kelamin }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Umur :</label>
                            <input type="text" name="umur"
                                class="rounded shadow-sm w-full border p-2 border-gray-400 border-opacity-25 appearance-none focus:border-gray-500 text-gray-500 text-sm focus:border-opacity-100"
                                value="{{ $data->umur }}">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:grid-cols-2">
                        <div class="mb-4 col-span-2">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Provinsi :</label>
                            <input type="text" name="provinsi"
                                class="rounded shadow-sm w-full border p-2 border-gray-400 border-opacity-25 appearance-none focus:border-gray-500 text-gray-500 text-sm focus:border-opacity-100"
                                value="{{ $data->provinsi }}">
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <button class="bg-blue-300 rounded shadow-md p-2 w-32 text-center text-white" type="submit">
                            Perbarui Data</button>
                        <a href="" class="rounded p-3 text-blue-400 text-sm"> <i class="fas fa-trash mr-2"></i>
                            Delete Data </a>
                    </div>
                </form>
            </div>
        </div>



    </div>

@endsection
