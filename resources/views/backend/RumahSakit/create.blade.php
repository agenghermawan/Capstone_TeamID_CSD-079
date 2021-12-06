@extends('layouts.app')

@section('css')

@endsection
@section('content')

    <h1 class="my-5">
        Form Data Rumah Sakit
    </h1>
    <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>


    <form class="w-full bg-white p-10" enctype="multipart/form-data" method="POST" action="{{route('rumahSakit.store')}}">
        @method('POST')
        @csrf
        @if(session('message'))
            <div class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-blue-100 rounded-lg" role="alert">
                <p> {{ session('message') }}</p>
                <span class="absolute inset-y-0 right-0 flex items-center mr-4">
    <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
  </span>
            </div>
        @endif
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-blue-700 text-xs font-bold mb-2" for="nama">
                    Nama
                </label>
                <input
                    class="rounded w-full bg-blue-200 text-black-700 border-none focus:border-none py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-50 @error('nama') is-invalid @enderror"
                    id="nama" name="nama" type="text">
                @error('nama')
                   <p class="text-red-500 text-xs italic">{{$message}}</p>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="alamat">
                    Alamat
                </label>
                <input
                    class="rounded w-full bg-blue-200 text-black-700 border-none focus:border-none py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500 @error('alamat') is-invalid @enderror"
                    id="alamat" name="alamat" type="text">
                @error('alamat')
                   <p class="text-red-500 text-xs italic">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6 ">
            <div class="w-full md:w-1/3 px-3">
                <label for="provinsi" class="block text-gray-700 text-xs font-bold mb-2 uppercase tracking-wide">Provinsi</label>
                <input type="text" name="provinsi" class="rounded bg-blue-200 border-none w-full focus:border-none transform transtition hover:scale-105 duration-500 ease-in-out focus:bg-white">
                @error('provinsi')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
                @enderror
            </div>

            <div class="w-full md:w-1/3 px-3">
                <label for="kodepos" class="block text-gray-700 text-xs font-bold mb-2 uppercase tracking-wide">Kode Pos</label>
                <input type="text" name="kodepos" class="rounded bg-blue-200 border-none w-full focus:border-none transform
                transtition hover:scale-105 duration-500 ease-in-out focus:bg-white @error('kodepos') is-invalid @enderror">

                @error('kodepos')
                  <p class="text-red-500 text-xs italic">{{$message}}</p>
                @enderror
            </div>

            <div class="w-full md:w-1/3 px-3">
                <label for="kota" class="block text-gray-700 text-xs font-bold mb-2 uppercase tracking-wide">Kota</label>
                <input type="text" name="kota" class="rounded bg-blue-200 border-none w-full focus:border-none
                transform transtition hover:scale-105 duration-500 ease-in-out focus:bg-white @error('kota') is-invalid @enderror">
                @error('kota')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="tentang">
                    Tentang
                </label>
                <textarea name="tentang" id="" cols="30" rows="2" class="rounded w-full bg-blue-200
                text-black-700 border-none focus:border-none py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500 @error('tentang') is-invalid @enderror"></textarea>
                @error('tentang')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="notelp">
                    TELP
                </label>
                <input
                    class="rounded w-full bg-blue-200 text-black-700 border-none focus:border-none py-3 px-4 mb-3
                    focus:bg-white transform transition hover:scale-105 duration-500 @error('notelp') is-invalid @enderror"
                    id="notelp" name="notelp" type="text" placeholder="">
                @error('notelp')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
                @enderror
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="lokasiGmaps">
                    Url Maps
                </label>
                <input
                    class="rounded w-full bg-blue-200 text-black-700 border-none focus:border-none py-3
                    px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500 @error('lokasiGmaps') is-invalid @enderror"
                    id="lokasiGmaps" type="text" name="lokasiGmaps" placeholder="http://">
                @error('lokasiGmaps')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
                @enderror
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="jamOperasional">
                    Jam Operasional
                </label>
                <input
                    class="rounded w-full bg-blue-200 text-black-700 border-none focus:border-none py-3 px-4 mb-3
                    focus:bg-white transform transition hover:scale-105 duration-500 @error('jamOperasional') is-invalid @enderror"
                    id="jamOperasional" name="jamOperasional" type="text" placeholder="10:00 - 20:00">
                @error('jamOperasional')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
                @enderror
            </div>
        </div>
        <button
            class="from-blue-400 to-blue-100 bg-gradient-to-l  rounded-lg p-2 mt-5 w-full text-white shadow-2xl md:w-52 xl:w-30 lg:w-40 transform transtition hover:scale-105 duration-500"
            type="submit"> Submit </button>
    </form>
@endsection
