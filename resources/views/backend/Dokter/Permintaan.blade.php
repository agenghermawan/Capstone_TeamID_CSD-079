@extends('layouts.app')

@section('title')
    Permintaan Dokter
@endsection
@section('buttonHeader')
    <div x-data="{ open: false }">
        <button x-on:click="open = ! open" class="bg-gradient-to-r  md:justify-items-end from-blue-300 to-blue-200 p-2 w-64 rounded">Daftar Dokter</button>
        <div x-show="open" x-transition>
            <uli>
                <li class="bg-white space-y-1 flex flex-col absolute">
                    <a href="{{route('dokter_daftarPermintaan')}}" class="py-2"> Daftar Permintaan </a>
                    <a href="{{route('dokter.index')}}" class="py-2"> Dokter Aktif </a>
                    <a href="{{route('dokter.create')}}" class="py-2"> Tambahkan Dokter</a>
                </li>
            </uli>
        </div>
    </div>
@endsection
@section('content')
    @include('sweetalert::alert')
    <div class="flex flex-col mt-6">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block w-1/2 py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                    <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            @if ($data->profile_photo_path == null)
                                                <img src="{{ asset('image/avatar doktor.jpg') }}" class="w-10 h-10 rounded-full" alt="">
                                            @else
                                                <img src="{{ asset('image/profile.jpg') }}" class="w-10 h-10 rounded-full " alt="">
                                            @endif
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">Nama Dokter</div>
                                            <div class="text-sm font-medium text-gray-900 ">Email</div>
                                            <div class="text-sm font-medium text-gray-900 ">Telp</div>
                                            <div class="text-sm font-medium text-gray-900 ">Alamat</div>
                                            <div class="text-sm font-medium text-gray-900 ">NoStr</div>
                                            <div class="text-sm font-medium text-gray-900 ">Kota</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$data->dokter->fullname}}</div>
                                    <div class="text-sm text-gray-500">{{$data->dokter->email}}</div>
                                    <div class="text-sm text-gray-500">{{$data->dokter->telp}}</div>
                                    <div class="text-sm text-gray-500">{{$data->dokter->alamat}}</div>
                                    <div class="text-sm text-gray-500">{{$data->dokter->noStr}}</div>
                                    <div class="text-sm text-gray-500">{{$data->dokter->kota}}</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="deskripsi py-2 align-middle sm:px-6 lg:px-8">
                       <p class="text-sm text-gray-500 block">Deskripsi </p>
                        @if($data->dokter->deskripsi == null)
                            <p class="text-sm mt-2 text-gray-500 block">
                                Belum ada deskripsi
                            </p>
                        @else
                            <p class="text-sm  mt-2 text-gray-500 block">
                                {{$data->dokter->deskripsi}}
                            </p>
                        @endif
                    </div>
                    <div class="class pt-10">
                        <form action="{{route('jawaban_permintaan',$data->dokter->id)}}" class="flex flex-wrap md:justify-center gap-2" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" name="status" class="w-1/3 p-3 bg-blue-300 text-white text-sm rounded-xl shadow-md  tracking-wide transform transform hover:scale-110 animate-bounce duration-300" value="diterima"> Diterima </button>
                            <button type="submit" name="status" class="w-1/3 p-3 bg-red-700 text-white text-sm  rounded-xl shadow-md tracking-wide transform transform hover:scale-110 animate-bounce duration-300" value="diterima"> Ditolak </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('OptionalJS')

@endsection
