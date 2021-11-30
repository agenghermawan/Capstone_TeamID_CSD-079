@extends('layouts.app')

@section('css')


@endsection
@section('content')
    <div class="container mt-4 grid grid-cols-1 md:grid-cols-2 lg:flex justify-between">
        <h4> Form Artikel </h4>
        <a href="{{ route('artikel.index') }}" class="bg-blue-500 p-3 shadow-2xl rounded"> Daftar Artikel</a>
    </div>


    <div class="grid-cols-1 grid md:grid-cols-2 xl:grid-cols-3 mt-10">
        <div class="col-span-1 xl:col-span-2 p-5">
            <form action="">
                <input type="text" class="bg-white p-3 w-full rounded shadow-2xl border-none focus:border-blue-400" placeholder="title">

                <div class="content-form-article mt-5 bg-white shadow-2xl p-5">
                    <div class="form-group p-5">
                        <p class="my-5"> Isi Artikel </p>
                        <textarea id="editor"></textarea>
                    </div>
                    <div class="form-group p-5">
                        <label class="inline-block mb-2 text-gray-500">File Upload</label>
                        <label
                            class="flex flex-col w-full h-32 border-4 border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300">
                            <div class="flex flex-col items-center justify-center pt-7">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                    Attach a file</p>
                            </div>
                            <input type="file" class="opacity-20" />
                        </label>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-span-1 bg-white p-5 mt-5 shadow-2xl max-h-96">
            <div class="form-group my-2">
                <label for="" > Ditulis :</label>
                <input type="text" class="w-full bg-gray-200 border-none rounded mt-2" value="" placeholder="Ditulis Oleh">
            </div>
            <div class="form-group my-2">
                <label for="" > Tanggal :</label>
                <input type="date" class="w-full bg-gray-200 border-none rounded mt-2" value="" placeholder="Ditulis Oleh">
            </div>
            <div class="form-group my-2">
                <label for="" > Kategori :</label>
                <input type="text" class="w-full bg-gray-200 border-none rounded mt-2" value="" placeholder="Kategori">
            </div>
            <div class="form-group mt-2">
                <label for="" > Refrensi :</label>
                <input type="text" class="w-full bg-gray-200 border-none rounded mt-2" value="" placeholder="Kategori">
            </div>
        </div>

    </div>


@endsection


@section('OptionalJS')

@endsection
