@extends('layouts.app')

@section('title')
    Daftar Konsultasi
@endsection
@section('buttonHeader')
    <div x-data="{ open: false }">
        <button x-on:click="open = ! open" class="bg-gradient-to-r  md:justify-items-end from-blue-300 to-blue-200 p-2 w-64 rounded">Daftar Konsultasi <i class="fas fa-chevron-circle-down"></i></button>
        <div x-show="open" x-transition>
            <uli>
                <li class="bg-white space-y-1 flex flex-col absolute">
                    <a href="{{route('dokter_daftarPermintaan')}}" class="py-2"> Daftar Permintaan </a>
                    <a href="" class="py-2"> Dokter Aktif </a>
                    <a href="{{route('dokter.create')}}" class="py-2"> Tambahkan Dokter</a>
                </li>
            </uli>
        </div>
    </div>
@endsection
@section('content')
    @include('sweetalert::alert')


@endsection


@section('OptionalJS')

@endsection
