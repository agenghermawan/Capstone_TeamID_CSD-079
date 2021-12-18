@extends('layouts.app')

@section('css')


@endsection
@section('content')
    @include('sweetalert::alert')
    <div class=" mt-4 grid grid-cols-1 md:grid-cols-2 lg:flex justify-between">
        <h4> Form Artikel </h4>
        <a href="{{ route('artikel.index') }}" class="bg-blue-500 p-3 shadow-2xl rounded"> Daftar Artikel</a>
    </div>
    <form action="{{ route('artikel.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 mt-4 lg:gap-4">
            <div class="content-form-article sm:col-span-2 col-span-1 bg-white p-5 text-sm text-gray-700 rounded-md">
                @if (session('message'))
                    <div class="bg-white">
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                @endif
                    <div class="form-group lg:p-5">
                        <label for="title" class="block text-sm text-gray-700"> Title </label>
                        <input type="text" name="title"
                            class="bg-white p-3 w-full rounded-lg text-gray-700 text-sm border-gray-300 ">
                        @error('title')
                        <p class="text-sm text-red-500"> {{$message}} </p>
                        @enderror
                    </div>

                <div class="form-group lg:p-5">
                    <p class="mb-2"> Isi Artikel </p>
                    <textarea name="isiArtikel" id="editor" style="height: 400px" class="rounded" rows="10"></textarea>
                    @error('isiArtikel')
                        <p class="text-sm text-red-500">{{$message}} </p>
                    @enderror
                </div>
                <div class="form-group xl:p-5">
                    <label class="inline-block mb-2 text-gray-500" for="photo">Upload Gambar Artikel</label>
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
                        <input type="file" name="photo" class="opacity-20" />
                    </label>
                    @error('photo')
                       <p class="text-sm text-red-500">  {{$message}} </p>
                    @enderror
                </div>
            </div>
            <div class="col-span-2 bg-white md:pl-10 md:pr-10 pl-3 pr-3  lg:mt-0 rounded-md" style="height: 350px">
                <div class="form-group my-2">
                    <label for="" class="text-gray-700 text-sm"> Ditulis :</label>
                    <input type="text" name="ditulisOleh" class="w-full  text-gray-700 text-sm border-gray-300 rounded mt-2"
                        value="{{ Auth::user()->name }}" placeholder="Ditulis Oleh">
                    @error('ditulisOleh')
                    <p class="text-sm text-red-500">{{$message}} </p>
                    @enderror
                </div>

                <div class="form-group my-2">
                    <label for="" class="text-gray-700 text-sm"> Kategori :</label>
                    <input type="text" name="kategori" class="w-full  text-gray-700 text-sm border-gray-300 rounded mt-2"
                        value="" placeholder="Kategori">
                    @error('kategori')
                      <p class="text-sm text-red-500">{{$message}} </p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="" class="text-gray-700 text-sm"> Refrensi :</label>
                    <input type="text" name="refrensi" class="w-full  text-gray-700 text-sm border-gray-300 rounded mt-2"
                        value="" placeholder="Refrensi">
                    @error('refrensi')
                     <p class="text-sm text-red-500">{{$message}} </p>
                    @enderror
                </div>
                <button type="submit" class="rounded  bg-gradient-to-r my-4 p-3 shadow-2xl bg-blue-300 text-sm"> Submit
                </button>
            </div>
        </div>
    </form>
@endsection

@section('texteditor')
    <script>
        tinymce.init({
            selector: 'textarea',
        });
    </script>
@endsection

