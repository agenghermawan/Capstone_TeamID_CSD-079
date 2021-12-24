@extends('layouts.app')

@section('buttonHeader')
    <div class="bg-white w-full text-sm font-medium text-white bg-blue-300 p-3"> Perbarui Data Pengguna </div>
@endsection

@section('content')
    <form action="{{ route('penyakit.update',$data->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="mt-5 md:mt-0 md:col-span-3">
            <form action="#" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-6">
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input type="text" name="namaPenyakit" id="namaPenyakit"
                                        class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                        placeholder="Nama Penyakit" value="{{$data->namaPenyakit}}">
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-6">
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                    <input type="text" name="ditulisOleh" id="namaPenyakit"
                                           class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                           placeholder="Nama Penyakit" value="{{$data->ditulisOleh}}">
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="deskripsiPenyakit" class="block text-sm font-medium text-gray-700">
                                Deskripsi Singkat Penyakit
                            </label>
                            <div class="mt-1">
                                <textarea id="deskripsiSingkat" name="deskripsiSingkat" rows="3"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{!! $data->deskripsiSingkat !!}</textarea>
                            </div>
                        </div>
                        <label class="inline-block mb-2 text-gray-700 text-sm font-medium" for="photo"> Upload Gambar Penyakit</label>
                        <img src="{{Storage::url($data->photoPenyakit)}}" class="w-14 h-14 rounded-full" alt="">
                        <label
                            class="flex flex-col w-full h-32 border-4 border-gray-200 border-dashed hover:bg-gray-100 hover:border-gray-300">
                            <div class="flex flex-col items-center justify-center pt-7">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-8 h-8 text-gray-400 group-hover:text-gray-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                    Upload gambar penyakit</p>
                            </div>
                            <input type="file" name="photoPenyakit" class="opacity-20" />
                        </label>

                        <div class="space-y-1">
                            <label class="inline-block mb-2 text-gray-700 text-sm font-medium" for="photo"> Gejala </label>
                            <textarea name="gejala" id="editor" cols="20" rows="5">{!! $data->gejala !!}</textarea>
                        </div>


                        <div class="space-y-1">
                            <label class="inline-block mb-2 text-gray-700 text-sm font-medium" for="photo"> Penyebab </label>
                            <textarea name="penyebab" id="editor" cols="20" rows="5">{!! $data->penyebab !!}</textarea>
                        </div>

                        <div class="space-y-1">
                            <label class="inline-block mb-2 text-gray-700 text-sm font-medium" for="photo"> Faktor Risiko </label>
                            <textarea name="faktorRisiko" id="editor" cols="20" rows="5">{!! $data->faktorRisiko !!}</textarea>
                        </div>


                        <div class="space-y-1">
                            <label class="inline-block mb-2 text-gray-700 text-sm font-medium" for="photo"> Pengobatan </label>
                            <textarea name="pengobatan" id="editor" cols="20" rows="5">{!! $data->pengobatan !!}</textarea>
                        </div>

                        <div class="space-y-1">
                            <label class="inline-block mb-2 text-gray-700 text-sm font-medium" for="photo"> Pencegahan </label>
                            <textarea name="pencegahan" id="editor" cols="20" rows="5">{!! $data->pencegahan !!}</textarea>
                        </div>


                        <button type="submit"
                            class="bg-blue-300 hover:scale-110 transform transtition rounded-md shadow-md p-3 text-sm tracking-wide duration-500">
                            Perbarui Data
                            Penyakit </button>
                    </div>
                </div>
            </form>
        </div>
    @endsection

        @section('script')
            <script>
                tinymce.init({
                    selector: 'textarea',
                });
            </script>
@endsection
