@extends('layouts.app')
@section('title','Daftar Data Penyakit')
@section('buttonHeader')
    <a href="{{ route('penyakit.index') }}"
       class="bg-blue-200 px-3 py-4 rounded transition transform hover:scale-110  ease-in-out duration-500 ">
        List daftars Penyakit</a>
@endsection
@section('content')
    @include('sweetalert::alert')
    <form action="{{ route('penyakit.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mt-5 md:mt-0 md:col-span-3">
            <form action="#" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6 shadow-md rounded-xl">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="md:col-span-6 col-span-6">
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="namaPenyakit" id="namaPenyakit"
                                        class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" required
                                        placeholder="Nama Penyakit">
                                    @error('namaPenyakit')
                                      <p class="text-red text-xs">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-6">
                            <div class="md:col-span-6 col-span-6">
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input type="text" name="ditulisOleh" id="ditulisOleh"
                                        class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300 text-gray-500"  required
                                        value="{{ Auth::user()->name }}">
                                    @error('ditulisOleh')
                                      <p class="text-red text-xs">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="deskripsiPenyakit" class="block text-sm font-medium text-gray-700">
                                Deskripsi Penyakit
                            </label>
                            <div class="mt-1">
                                <textarea id="deskripsiPenyakit" name="deskripsiSingkat" rows="3"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>
                        <label class="inline-block mb-2 text-gray-700 text-sm font-medium" for="photo">File Upload</label>
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
                                    Attach a file</p>
                            </div>
                            <input type="file" name="photoPenyakit" class="opacity-20" />
                            @error('photoPenyakit')
                                <p class="text-red text-xs">{{$message}}</p>
                            @enderror
                        </label>

                        <div>
                            <label for="deskripsiPenyakit" class="block text-sm font-medium text-gray-700">
                                Deskripsi Singkat
                            </label>
                            <div class="mt-1">
                                <textarea id="deskripsiSingkat" name="deskripsiSingkat" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>

                        <div>
                            <label for="deskripsiPenyakit" class="block text-sm font-medium text-gray-700">
                                Gejala
                            </label>
                            <div class="mt-1">
                                <textarea id="gejala" name="gejala" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>

                        <div>
                            <label for="deskripsiPenyakit" class="block text-sm font-medium text-gray-700">
                                Penyebab
                            </label>
                            <div class="mt-1">
                                <textarea id="penyebab" name="penyebab" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>

                        <div>
                            <label for="deskripsiPenyakit" class="block text-sm font-medium text-gray-700">
                                Faktor Risiko
                            </label>
                            <div class="mt-1">
                                <textarea id="deskripsiPenyakit" name="faktorRisiko" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>


                        <div>
                            <label for="deskripsiPenyakit" class="block text-sm font-medium text-gray-700">
                                Pengobatan
                            </label>
                            <div class="mt-1">
                                <textarea id="pengobatan" name="pengobatan" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>


                        <div>
                            <label for="deskripsiPenyakit" class="block text-sm font-medium text-gray-700">
                                Pencegahan
                            </label>
                            <div class="mt-1">
                                <textarea id="deskripsiPenyakit" name="pencegahan" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>


                        @error('isiPenyakit')
                          <p class="text-red text-xs">{{$message}}</p>
                        @enderror
                        <button type="submit"
                            class="bg-blue-300 hover:scale-110 transform transtition rounded-md shadow-md p-3 text-sm tracking-wide duration-500">
                            Tambahkan Data
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
