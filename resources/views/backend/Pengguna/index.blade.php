@extends('layouts.app')

@section('css')


@endsection
@section('content')
    <div class="container mt-4 grid grid-cols-1 md:grid-cols-2 lg:flex">
        <h4> Daftar Pengguna </h4>
        <a href="{{ route('pengguna.create') }}" class="bg-gradient-to-r from-blue-500 to-blue-200 p-2 rounded"> Tambahkan
            Pengguna</a>
    </div>
    <div class="grid container grid-cols-1 md:grid-cols-1 gap-4 lg:grid-cols-2 xl:grid-cols-3 w-full mt-10">
        @for ($i = 0; $i < 12; $i++)
            <div class="col-span-1 bg-white p-10 rounded shadow-xl">
                <div class="head flex items-center px-5">
                    <div class="image-head w-1/4 md:w-2/4 xl:w-1/4">
                        <img src="{{ asset('image/profile.jpg') }}" class="w-20 h-20 rounded-full " alt="">
                    </div>
                    <div class="name w-3/4 md:w-2/4 font-semibold  ">
                        <h4 class="text-blue-700"> Tom Cruise </h4>
                        <h4 class="text-sm text-blue-500"> Pengguna</h4>
                    </div>
                </div>
                <div class="description p-5 border-b">
                    <p class="text-sm text-justify">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomi
                    </p>
                    <div class="contanct text-sm mt-4 text-blue-500">
                        <p><i class="fa fa-phone-alt mr-1 md:mr-3"></i>089660776514</p>
                        <p><i class="far fa-envelope mr-1 md:mr-2"></i> agenghermawan16@gmail.com</p>
                    </div>
                </div>
                <div class="button-description flex justify-end p-5">
                    <a href="{{ route('pengguna.show', 1) }}" class="bg-blue-400 rounded text-base px-4 py-2"> Detail </a>
                </div>
            </div>
        @endfor
    </div>
@endsection


@section('OptionalJS')

@endsection
