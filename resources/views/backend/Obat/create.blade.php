@extends('layouts.app')

@section('css')

@endsection

@section('content')
   <div class="w-full md:flex-wrap b mt-5">
        <div class="bg-white p-10 md:w-1/2">
            <h3 class="font-bold text-blue-700 border-b pb-2"> Form Obat </h3>

            <div class="form-group md:mt-5 md:flex gap-1">
                <input type="text" class="rounded shadow-md placeholder-blue-500 md:w-1/2 mb-2 text-sm border-blue-400 focus:placeholder-transparent" placeholder="Nama Obat">
                <input type="text" class="rounded shadow-md placeholder-blue-500 md:w-1/2 mb-2 text-sm border-blue-400 focus:placeholder-transparent" placeholder="Kategori">
            </div>

            <div class="image md:mt-5">
                <label class="inline-block mb-2 text-blue-500">Tambahkan Gambar </label>
                <div class="flex items-center justify-center w-full">
                    <label class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-blue-100 hover:border-blue-300">
                        <div class="flex flex-col items-center justify-center pt-7">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                      clip-rule="evenodd" />
                            </svg>
                            <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                Select a photo</p>
                        </div>
                        <input type="file" class="opacity-0" />
                    </label>
                </div>
            </div>

            <div class="text-area md:mt-5">
                <div class="form-group">
                    <label for="" class="inline-block mb-2 text-blue-500"> Isi content Obat </label>
                    <div id="summernote"></div>
                </div>
            </div>
        </div>
   </div>
@endsection
