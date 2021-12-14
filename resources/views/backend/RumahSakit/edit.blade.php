@extends('layouts.app')

@section('css')

@endsection
@section('content')
    @include('sweetalert::alert')
    <form class="w-full bg-white p-10" enctype="multipart/form-data" method="POST"
          action="{{ route('rumahSakit.store') }}">
        <h1 class="text-base mb-4 tracking-wide text-gray-700 font-bold uppercase border-b pb-2 md:text-center">
            Form Data Rumah Sakit
        </h1>
        @method('POST')
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if (session('message'))
            <div class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-gray-100 rounded-lg" role="alert">
                <p> {{ session('message') }}</p>
                <span class="absolute inset-y-0 right-0 flex items-center mr-4">
                    <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
        @endif
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block  tracking-wide text-gray-700 text-sm mb-2" for="nama">
                    Nama
                </label>
                <input
                    class="rounded w-full text-black-700 border-gray-300 focus:border-gray-300 py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500 @error('nama') is-invalid @enderror"
                    id="nama" name="nama" type="text">
                @error('nama')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block  tracking-wide text-gray-700 text-sm mb-2" for="alamat">
                    Alamat
                </label>
                <input
                    class="rounded w-full text-black-700 border-gray-300 focus:border-gray-300 py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500 @error('alamat') is-invalid @enderror"
                    id="alamat" name="alamat" type="text">
                @error('alamat')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6 ">
            <div class="w-full md:w-1/3 px-3 mb-6">
                <label for="provinsi" class="block text-gray-700 text-sm  mb-2  tracking-wide">Provinsi</label>
                <input type="text" name="provinsi"
                       class="rounded  border-gray-300 w-full focus:border-gray-300 transform transtition hover:scale-105 duration-500 ease-in-out focus:bg-white">
                @error('provinsi')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6">
                <label for="kodepos" class="block text-gray-700 text-sm mb-2  tracking-wide">Kode
                    Pos</label>
                <input type="text" name="kodepos"
                       class="rounded  border-gray-300 w-full focus:border-gray-300 transform
                transtition hover:scale-105 duration-500 ease-in-out focus:bg-white @error('kodepos') is-invalid @enderror">

                @error('kodepos')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6">
                <label for="kota" class="block text-gray-700 text-sm mb-2 tracking-wide">Kota</label>
                <input type="text" name="kota"
                       class="rounded  border-gray-300 w-full focus:border-none
                transform transtition hover:scale-105 duration-500 ease-in-out focus:bg-white @error('kota') is-invalid @enderror">
                @error('kota')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="w-full md:w-1/3 mb-6">
            <div class="mt-1 flex items-center">
                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </span>
                <input type="file" name="photo"
                       class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block tracking-wide text-gray-700 text-sm mb-2" for="tentang">
                    Tentang
                </label>

                <textarea name="tentang" id="" cols="30" rows="2"
                          class="rounded w-full
                text-black-700 border-gray-300 focus:border-gray-300 py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500 @error('tentang') is-invalid @enderror"></textarea>

                @error('tentang')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror

            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block  tracking-wide text-gray-700 text-sm mb-2" for="notelp">
                    TELP
                </label>
                <input
                    class="rounded w-full  text-black-700 border-gray-300 focus:border-gray-300 py-3 px-4 mb-3
                    focus:bg-white transform transition hover:scale-105 duration-500 @error('notelp') is-invalid @enderror"
                    id="notelp" name="notelp" type="text" placeholder="">
                @error('notelp')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block  tracking-wide text-gray-700 text-sm mb-2" for="lokasiGmaps">
                    Url Maps
                </label>
                <input
                    class="rounded w-full  text-black-700 border-gray-300 focus:border-gray-300 py-3
                    px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500 @error('lokasiGmaps') is-invalid @enderror"
                    id="lokasiGmaps" type="text" name="lokasiGmaps" placeholder="">
                @error('lokasiGmaps')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block  tracking-wide text-gray-700 text-sm mb-2" for="jamOperasional">
                    Jam Operasional
                </label>
                <input
                    class="rounded w-full  text-black-700 border-gray-300 focus:border-gray-300 py-3 px-4 mb-3
                    focus:bg-white transform transition hover:scale-105 duration-500 @error('jamOperasional') is-invalid @enderror"
                    id="jamOperasional" name="jamOperasional" type="text" placeholder="10:00 - 20:00">
                @error('jamOperasional')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <h5 class="text-xs tracking-wide font-bold text-gray-700 "> Fasilitas </h5>
        <div class="fasilitas border-b border-gray-300 mb-6">
            <div class="flex flex-wrap -mx-3 my-6">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label for="fasilitas" class="inline-flex items-center">
                        <input type="checkbox" id="fasilitas" name="fasilitas[]" value="Farmasi"
                               class="rounded border-gray-200">
                        <span class="ml-2 text-sm tracking-wide text-gray-700" id="fasilitas"> Farmasi </span>
                    </label>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label for="" class="inline-flex items-center">
                        <input type="checkbox" id="fasilitas" name="fasilitas[]" value="Intalasi Berjalan"
                               class="rounded border-gray-200">
                        <span class="ml-2 text-sm tracking-wide text-gray-700"> Intalasi Berjalan </span>
                    </label>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label for="" class="inline-flex items-center">
                        <input type="checkbox" id="fasilitas" name="fasilitas[]" value="Kafetaria"
                               class="rounded border-gray-200">
                        <span class="ml-2 text-sm tracking-wide text-gray-700"> Kafetaria </span>
                    </label>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 my-6">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label for="" class="inline-flex items-center">
                        <input type="checkbox" id="fasilitas" name="fasilitas[]" value="Instalasi Rawat Inap "
                               class="rounded border-gray-200">
                        <span class="ml-2 text-sm tracking-wide text-gray-700"> Instalasi Rawat Inap </span>
                    </label>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label for="" class="inline-flex items-center">
                        <input type="checkbox" id="fasilitas" name="fasilitas[]" value="Ambulans"
                               class="rounded border-gray-200">
                        <span class="ml-2 text-sm tracking-wide text-gray-700"> Ambulans </span>
                    </label>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label for="" class="inline-flex items-center">
                        <input type="checkbox" id="fasilitas" name="fasilitas[]" value="ATM"
                               class="rounded border-gray-200">
                        <span class="ml-2 text-sm tracking-wide text-gray-700"> ATM </span>
                    </label>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 my-6">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label for="" class="inline-flex items-center">
                        <input type="checkbox" id="fasilitas" name="fasilitas[]" value="Area Parkir"
                               class="rounded border-gray-200">
                        <span class="ml-2 text-sm tracking-wide text-gray-700"> Area parkir </span>
                    </label>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label for="" class="inline-flex items-center">
                        <input type="checkbox" id="fasilitas" name="fasilitas[]" value="Intalasi Radiologi"
                               class="rounded border-gray-200">
                        <span class="ml-2 text-sm tracking-wide text-gray-700"> Intalasi Radiologi </span>
                    </label>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label for="" class="inline-flex items-center">
                        <input type="checkbox" id="fasilitas" name="fasilitas[]" value="Unit Gawat Darurat (UGD)"
                               class="rounded border-gray-200">
                        <span class="ml-2 text-sm tracking-wide text-gray-700"> Unit Gawat Darurat (UGD) </span>
                    </label>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 my-6">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label for="" class="inline-flex items-center">
                        <input type="checkbox" id="fasilitas" name="fasilitas[]" value="Instalasi Laboratorium"
                               class="rounded border-gray-200">
                        <span class="ml-2 text-sm tracking-wide text-gray-700"> Instalasi Laboratorium </span>
                    </label>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label for="Ruang Tunggu " class="inline-flex items-center">
                        <input type="checkbox" id="Ruang Tunggu " name="fasilitas[]" value="Ruang Tunggu"
                               class="rounded border-gray-200">
                        <span class="ml-2 text-sm tracking-wide text-gray-700"> Ruang Tunggu </span>
                    </label>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label for="IGD" class="inline-flex items-center">
                        <input type="checkbox" id="IGD" name="fasilitas[]" value="Instalasi Gawat Darurat (IGD)"
                               class="rounded border-gray-200">
                        <span class="ml-2 text-sm tracking-wide text-gray-700"> Instalasi Gawat Darurat (IGD) </span>
                    </label>
                </div>
            </div>
        </div>

        <h5 class="text-xs tracking-wide font-bold text-gray-700 "> Poli klinik</h5>
        <div class="poliklinik border-b border-gray-300">
            @foreach ($dataPoliklinik as $item)
                <div class="flex flex-wrap -mx-3 my-6">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label for="poliklinik" class="inline-flex items-center">
                            <input type="checkbox" id="poliklinik" name="poliklinik[]" value="{{ $item->nama }}"
                                   class="rounded border-gray-200">
                            <span class="ml-2 text-sm tracking-wide text-gray-700" id="fasilitas"> {{ $item->nama }}
                            </span>
                        </label>
                    </div>
                </div>
            @endforeach


            <button
                class="from-gray-400 to-gray-100 bg-gradient-to-l  rounded-lg p-2 mt-5 w-full text-white shadow-2xl md:w-52 xl:w-30 lg:w-40 transform transtition hover:scale-105 duration-500"
                type="submit"> Submit </button>
        </div>
    </form>
@endsection
