@extends('layouts.app')

@section('css')


@endsection
@section('title','Daftar Data Penyakit')
@section('buttonHeader')
    <a href="{{ route('penyakit.create') }}"
       class="bg-blue-200 px-3 py-4 rounded transition transform hover:scale-110  ease-in-out duration-500 ">
        Tambahkan
        Data Penyakit</a>
@endsection
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 lg:grid-cols-3 gap-3 mt-5">
        @foreach ($dataPenyakit as $item)
            <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
                <img class="rounded-t-lg" src="{{ Storage::url($item->photoPenyakit) }}" alt="" style="height: 254px;object-fit:cover;width:100%">
                <div class="p-5">
                    <a href="#">
                        <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">
                            {{ $item->namaPenyakit }}</h5>
                    </a>
                    <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">{{ $item->deskripsiPenyakit }}</p>
                    <a href="{{ route('penyakit.show', $item->id) }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

@endsection


@section('OptionalJS')

@endsection
