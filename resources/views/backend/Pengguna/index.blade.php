@extends('layouts.app')

@section('css')


@endsection
@section('content')
    <div class="container mt-4 grid grid-cols-1 md:grid-cols-2 lg:flex">
        <a href="{{ route('pengguna.create') }}" class="bg-gradient-to-r from-blue-300 to-blue-200 p-2 rounded"> Daftar
            Pengguna</a>
    </div>
    <div class="grid container grid-cols-1 md:grid-cols-1 gap-4 lg:grid-cols-2 xl:grid-cols-3 w-full mt-10">
        @foreach ($data as $item)
            <div class="col-span-1 bg-white p-10 rounded shadow-xl">
                <div class="head flex items-center px-5">
                    <div class="image-head w-1/4 md:w-2/4 xl:w-1/4">
                        @if(Auth::user()->profile_photo_path == null)
                            <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" class="rounded-full" width="60px" height="60px" alt="">
                        @else
                            <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" alt="" class="rounded-full" width="60px" height="60px">
                        @endif
                    </div>
                    <div class="name w-3/4 md:w-2/4 font-semibold  ">
                        <h4 class="text-blue-700"> {{ $item->name }} </h4>
                        <h4 class="text-sm text-blue-500"> Pengguna </h4>
                    </div>
                </div>
                <div class="description p-5 border-b">
                    <p class="text-sm text-justify">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomi
                    </p>
                    <div class="contanct text-sm mt-4 text-blue-500">
                        <p><i class="fa fa-phone-alt mr-1 md:mr-3"></i>{{ $item->telp }}</p>
                        <p><i class="far fa-envelope mr-1 md:mr-2"></i> {{ $item->email }}</p>
                    </div>
                </div>
                <div class="button-description flex justify-end p-5">
                    <a href="{{ route('pengguna.show', $item->id) }}" class="bg-blue-300 rounded text-base px-4 py-2">
                        Detail </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection


@section('OptionalJS')

@endsection
