@extends('layouts.app')

@section('css')


@endsection
@section('content')
    <h4 class="mt-4 text-base font-semibold py-2"> Data Dokter </h4>

    <div class="bg-white grid rounded grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-7">
        <div class="col-span-1 flex items-center border-r">
            <div class="image w-1/4 ">
                <img src="{{ asset('image/profile.jpg') }}" class="w-24 h-24 rounded-full" alt="">
            </div>
            <div class="name">
                <h4> Ageng Hermawan </h4>
                <h4> Dokter Anak </h4>
            </div>
        </div>
        <div class="col-span-1 border-r px-4">
            <h4 class="text-sm font-normal"> Kontak Detail </h4>
            <ul class="list-none mt-2 text-sm font-normal text-blue-400">
                <li> agenghermawan16@gmail.com </li>
                <li> agenghermawan16@gmail.com </li>
                <li> agenghermawan16@gmail.com </li>
            </ul>
        </div>
        <div class="col-span-1 flex items-center justify-center text-center">
            <div class="p-5">
                <h5 class="text-blue-700"> 20K </h5>
                <p class="text-blue-400"> Pasien </p>
            </div>
            <div class="p-5">
                <h5 class="text-blue-700"> 20K </h5>
                <p class="text-blue-400"> Pasien </p>
            </div>
            <div class="p-5">
                <h5 class="text-blue-700"> 20K </h5>
                <p class="text-blue-400"> Pasien </p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-3 md:grid-cols-2 xl:grid-cols-2 mt-4">
        <div class="left-element-detail bg-white col-span-1 p-10">
            <p class=" text-base text-blue-500 "> <i class="fas fa-user-shield"></i> Profile </p>
            <div class="form mt-4 text-blue-600 grid grid-cols-1 md:grid-cols-2 gap-4 xl:grid-cols-2">
                <div class="form-group">
                    <label for="nama" class="block text-sm text-blue-400"> Nama : </label>
                    <input type="text" class="border-blue-300 w-full bg-blue-50 rounded mt-2">
                </div>
                <div class="form-group">
                    <label for="nama" class="block text-sm text-blue-400"> Nama : </label>
                    <input type="text" class="border-blue-300 bg-blue-50 w-full rounded mt-2">
                </div>
            </div>
            <div class="form mt-4 text-blue-600 grid grid-cols-1 md:grid-cols-2 gap-4 xl:grid-cols-2">
                <div class="form-group">
                    <label for="nama" class="block text-sm text-blue-400"> Nama : </label>
                    <input type="text" class="border-blue-300  bg-blue-50 w-full rounded mt-2">
                </div>
                <div class="form-group">
                    <label for="nama" class="block text-sm text-blue-400"> Nama : </label>
                    <input type="text" class="border-blue-300 bg-blue-50 w-full rounded mt-2">
                </div>
            </div>
            <div class="form mt-4 text-blue-600 grid grid-cols-1 ">
                <div class="form-group">
                    <label for="" class="block text-sm text-blue-400"> Description :</label>
                    <textarea name="" class="rounded w-full bg-blue-50 border-blue-300 mt-2" id="" rows="2"></textarea>
                </div>
            </div>
            <div class="form mt-4 text-blue-600 grid grid-cols-1 ">
                <div class="form-group">
                    <button class="rounded p-2 from-blue-300 bg-gradient-to-b to-purple-200 shadow-lg text-white w-32">
                        Submit
                    </button>
                </div>
            </div>
        </div>

        <div class="left-element-detail col-span-1 w-full bg-white pt-10 border">
            <p class="text-base text-blue-500 mt-4 ml-10"><i class="fas fa-hospital"></i> Daftar Rumah Sakit </p>
            <div class="content p-10">
                <div class="space-y-4">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="border-l-4 border-blue-500 border-opacity-100 border-solid  pl-4 flex w-full flex-wrap">
                            <div class="item w-full md:w-1/2 text-base text-blue-400">
                                <h4 class="text-blue-600"> Rumah Sakit Cilandak </h4>
                                <p> 10:00 - 12:00 </p>
                            </div>
                            <div class="detail w-full md:w-1/2 xl:flex xl:justify-end">
                                <button
                                    class="rounded p-2 from-blue-300 bg-gradient-to-b to-purple-200 shadow-lg text-white w-32">
                                    Detail
                                </button>
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-5">
        <div class="bg-white col-span-1 rounded shadow-sm p-10">
            <h1 class="mb-5 text-blue-500"> Daftar Pasien Terkahir </h1>
            @for ($i = 0; $i < 3; $i++)
                <div class="content flex w-full mb-5 ">
                    <div class="w-full flex  md:w-3/4">
                        <div class="image">
                            <img src="{{ asset('image/profile.jpg') }}" class="w-12 h-12 rounded-full" alt="">
                        </div>
                        <div class="text pl-4">
                            <h4> Ageng Hermawan </h4>
                            <p> 10:00 - 12:00</p>
                        </div>
                    </div>
                    <div class="w-full   md:1/4 flex justify-end">
                        <h4> Detail </h4>
                    </div>
                </div>
            @endfor
        </div>
        <div class="bg-white col-span-1 rounded shadow-sm p-10">
            <h4 class="text-blue-500"> Informasi Lainnya </h4>
            <div class="mt-3 text-blue-900">
                <p class="text-justify text-sm"> Seorang Dokter Spesialis Penyakit Kulit
                    dan
                    Kelamin yang aktif
                    melayani pasien di RS Trimitra dan RS EMC Sentul. dr. Adelia Wulandari, Sp.KK mendapatkan gelar
                    spesialisnya setelah menamatkan pendidikan di Universitas Sriwijaya, Palembang.

                    Beliau yang tergabung dalam Perhimpunan Dokter Spesialis Kulit dan Kelamin Indonesia (PERDOSKI) dan
                    Ikatan Dokter Indonesia (IDI) sebagai anggota ini dapat memberikan layanan konsultasi seputar penyakit
                    kulit dan kelamin.</p>
            </div>
        </div>
    </div>

@endsection
