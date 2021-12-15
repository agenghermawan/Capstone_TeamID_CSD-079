@extends('layouts.app')

@section('css')

@endsection
@section('content')
    @include('sweetalert::alert')
    <form class="w-full bg-white p-10" enctype="multipart/form-data" method="POST"
          action="{{ route('poliklinik.update',$data->id) }}">
        <h1 class="text-base mb-4 tracking-wide text-blue-700 font-bold uppercase border-b pb-2 md:text-center">
            Form Data Poli Klinik
        </h1>
        @method('put')
        @csrf

        @if (session('message'))
            <div class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-blue-100 rounded-lg" role="alert">
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
            <div class="w-full  px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-blue-700 text-xs font-bold mb-2" for="nama">
                    Nama
                </label>
                <input
                    class="rounded w-full text-black-700 border-blue-300 focus:border-none py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500"
                    id="nama" name="nama" type="text" value="{{$data->nama}}">
                @error('nama')
                <p class="text-red-5000 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6 ">
            <div class="w-full px-3 mb-6 md:mb-0 ">
                <label class="block uppercase tracking-wide text-blue-700 text-xs font-bold mb-2" for="deskripsi">
                    Deksripsi
                </label>
                <textarea name="deskripsi" id="deskripsi" cols="30"
                          class="rounded w-full text-black-700 border-blue-300 focus:border-none py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500 "
                          rows="2" required></textarea>
                @error('deskripsi')
                   <p class="text-red-50 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="tindakan border-t border-blue-300 pt-5">
            <h5 class="text-sm font-bold tricking-wide uppercase text-blue-700 mb-2"> Tindakan Medis</h5>
            <div class="repeater">
                <div data-repeater-list="tindakanmedis">
                    <div data-repeater-item>
                        <div class="flex -mx-3 md:mb-6">
                            <div class="w-full md:flex md:flex-wrap px-3 mb-6 md:mb-0">
                                <input REZ
                                       class="rounded w-full  text-black-700 border-blue-300 mr-2 focus:border-none py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500 md:w-3/4"
                                       name="tindakanmedis" type="text"  placeholder="Tindakan Medis">

                                <button data-repeater-delete type="button"
                                        class="rounded md:1/4 text-blue-700 border-blue-300 focus:border-none py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500"
                                        value="Delete" /> <i class="fas fa-trash mr-1"></i> Hapus </button>
                            </div>
                        </div>
                    </div>
                </div>
                <button data-repeater-create type="button" value="Add"
                        class="rounded md:1/4 text-blue-700 border-blue-300 focus:border-none py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500" />
                <i class="fas fa-plus-square mr-1"></i> Tambahkan tindakan medis </button>
            </div>
        </div>
        <button
            class="from-blue-400 to-blue-100 bg-gradient-to-l  rounded-lg p-2 mt-5 w-full text-white shadow-2xl md:w-52 xl:w-30 lg:w-40 transform transtition hover:scale-105 duration-500"
            type="submit"> Submit </button>
    </form>
@endsection
