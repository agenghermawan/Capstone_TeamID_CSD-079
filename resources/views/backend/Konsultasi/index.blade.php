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
    <div class="grid container grid-cols-1 md:grid-cols-2 gap-4 lg:grid-cols-3 w-full mt-10">
        @foreach($data as $item)
            <a href="{{route('konsultasi-dokter.show',$item->id)}}">
                    <div class="bg-white p-5 shadow-md md:flex rounded transition transform hover:scale-105 ease-in-out duration-500">
                    <div class="img">
                        <img src="https://ui-avatars.com/api/?name={{$item->ditulisOleh}}" class="rounded-full" width="60px" height="60px" alt="">
                    </div>
                    <div class="ml-3 md:w-64">
        {{--                @if(empty($item->jawabankonsultasi))--}}
        {{--                    <h1 class="">{{$item->judulKonsultasi}} ini konsultasinya belum dij awab <span> <i class="fas fa-times-circle"> </i></span></h1>--}}
        {{--                @elseif(empty($item->jawabankonsultasi))--}}
        {{--                     <h1 class="">{{$item->judulKonsultasi}} <span> <i class="fas fa-check-circle"> </i></span></h1>--}}
        {{--                @endif--}}
                         <h1 class="">{{$item->judulKonsultasi}} <span> <i class="fas fa-check-circle"> </i></span></h1>
                        <p class="text-sm text-blue-500"> {{$item->ditulisOleh}}  </p>
                    </div>
                    <div class="ml-3  justify-end w-full md:text-right">
                        <span class="text-xs text-blue-300"> {{$item->created_at->diffForHumans()}}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection


@section('OptionalJS')

@endsection
