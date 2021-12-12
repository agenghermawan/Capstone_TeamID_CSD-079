@extends('layouts.app')

@section('css')

@endsection

@section('content')
    @include('sweetalert::alert')
    <form action="{{ route('kategori-obat.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="w-full md:flex b mt-5 shadow-lg">
            <div class="bg-white p-10 md:w-1/2">
                @if (session('message'))
                    <p class="text-sm text-red"> {{ session('message') }} </p>
                @endif
                <h3 class="font-bold text-blue-700 border-b pb-2"> Form Obat </h3>
                <div class="form-group md:mt-5 md:flex gap-1">
                    <input type="text"
                           class="rounded shadow-sm w-full md:w-1/2 mb-2 text-sm border-gray-300 focus:border-gray-500 focus:placeholder-transparent" required
                           placeholder="Nama Kategori Obat" name="nama">
                    @error('nama')
                        <p class="text-red-500 font-light italic"> {{$message}} </p>
                    @enderror
                    <input type="text"
                           class="rounded shadow-sm w-full  md:w-1/2 mb-2 text-sm border-gray-300 focus:border-gray-500 focus:placeholder-transparent" required
                           placeholder="Deskripsi" name="deskripsi">
                    @error('deskripsi')
                        <p class="text-red-500 font-light italic"> {{$message}} </p>
                    @enderror
                </div>
                    <div class="form-group md:mt-5 md:flex gap-1">
                        <label for="photo" class="mb-4"></label>
                        <input type="file"
                               class="rounded shadow-sm w-full md:w-1/2 mb-2 text-sm border-gray-300 focus:border-gray-500 focus:placeholder-transparent" required
                               placeholder="" name="photo">
                        @error('file')
                        <p class="text-red-500 font-light italic"> {{$message}} </p>
                        @enderror
                    </div>
                    <div class="form-group md:mt-5 md:flex gap-1">
                       <button type="submit" class="px-3 py-3 bg-blue-300 font-sm tracking-wide rounded transition transform hover:scale-105 duration-300"> Submit Kategori </button>
                    </div>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#anjuranLainnya'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
