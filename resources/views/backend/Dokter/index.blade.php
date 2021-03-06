@extends('layouts.app')

@section('title')
    @if(Auth::user()->role_pengguna == 'Dokter')
       <span class="text-blue-700">  Data Kamu </span>
    @else
        Daftar Data Dokter
    @endif
@endsection
@section('buttonHeader')
    <div x-data="{ open: false }">
        <button x-on:click="open = ! open" class="bg-gradient-to-r  md:justify-items-end from-blue-300 to-blue-200 p-2 w-64  text-white rounded">Daftar Dokter</button>
        @if(Auth::user()->role_pengguna == 'Admin')
        <div x-show="open" x-transition>
            <uli>
                <li class="bg-white space-y-1 flex flex-col absolute">
                    <a href="{{route('dokter_daftarPermintaan')}}" class="py-2"> Daftar Permintaan </a>
                    <a href="" class="py-2"> Dokter Aktif </a>
                </li>
            </uli>
        </div>
       @endif
    </div>
@endsection
@section('content')
    @include('sweetalert::alert')
    <div class="grid container grid-cols-1 md:grid-cols-2 gap-4 lg:grid-cols-3 w-full mt-10">
        @foreach ($data as $item)
            <div class="col-span-1 bg-white p-10 rounded shadow-xl">
                <div class="head flex items-center">
                    <div class="image-head  w-1/4">
                        @if ($item->profile_photo_path == null)
                            <img src="{{ asset('image/avatar doktor.jpg') }}" class="w-20 h-20 rounded-full" alt="avatar">
                        @else
                            <img src="{{ Storage::url($item->profile_photo_path) }}" class="w-20 h-20 rounded-full " alt="{{$item->name}}">
                        @endif
                    </div>
                    <div class="name w-3/4 font-semibold">
                        <h4 class="text-blue-700"> {{ $item->dokter->fullname }} </h4>
                        <h4 class="text-sm text-blue-500"> {{$item->dokter->sebagaiDokter}} </h4>
                    </div>
                </div>
                <div class="description pt-5 pb-5 border-b">
                    @if ($item->dokter->deskripsi == null)
                        <p class="text-sm"> Belum ada deskripsi dokter
                        </p>
                    @else
                        <p class="text-sm"> {{ $item->dokter->deskripsi }}
                        </p>
                    @endif
                    <div class="contanct text-sm mt-4 text-blue-500">
                        <p><i class="fa fa-phone-alt mr-3"></i>{{ $item->dokter->telp }}</p>
                        <p><i class="far fa-envelope mr-2"></i> {{ $item->dokter->email }}</p>
                        @if (empty($item->dokter))
                            <p><i class="far fa-envelope mr-2"></i> Belum Mengajukan Sebagai Doktor </p>
                        @elseif(empty($item->dokter) == null)
                            <p><i class="far fa-envelope mr-2"></i> {{ $item->dokter->status }} </p>
                        @endif
                    </div>
                </div>
                <div class="button-description flex justify-end p-2">
                    @if (empty($item->dokter) == null)
                        @if ($item->dokter->status == 'non-active')
                            <a href="{{ route('dokter.edit', 1) }}"
                                class="bg-blue-300 rounded md text-base font-medium text-white mr-2 p-2 w-64 text-center border transition duration-500 ease-in-out transform  hover:scale-110">
                                Terima Permintaan
                            </a>
                        @endif
                    @endif
                    <a href="{{ route('dokter.edit', $item->dokter->id) }}"
                        class="bg-blue-300 rounded md text-base font-medium text-white mr-2 p-2 w-32 text-center border transition duration-500 ease-in-out transform  hover:scale-110">
                        Detail
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection


@section('OptionalJS')

@endsection
