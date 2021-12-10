@extends('layouts.app')

@section('css')


@endsection
@section('content')
    <div class="container mt-4 md:flex justify-between">
        <div class="left-header">
            <h4> Daftar Dokter </h4>
        </div>
        <div class="left-header bg-blue-300">
            <a href="{{ route('pengguna.create') }}"
                class="bg-gradient-to-r md:justify-items-end from-blue-300 to-blue-200 p-2 w-64 rounded">
                Tambahkan
                Dokter</a>
        </div>
    </div>
    <div class="grid container grid-cols-1 md:grid-cols-2 gap-4 lg:grid-cols-3 w-full mt-10">
        @foreach ($data as $item)
            <div class="col-span-1 bg-white p-10 rounded shadow-xl">
                <div class="head flex items-center">
                    <div class="image-head  w-1/4">
                        <img src="{{ asset('image/profile.jpg') }}" class="w-20 h-20 rounded-full " alt="">
                    </div>
                    <div class="name w-3/4   font-semibold  ">
                        <h4 class="text-blue-700"> {{ $item->name }} </h4>
                        <h4 class="text-sm text-blue-500"> Dokter Anak </h4>
                    </div>
                </div>
                <div class="description p-5 border-b">
                    <p class="text-sm">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomi
                    </p>
                    <div class="contanct text-sm mt-4 text-blue-500">
                        <p><i class="fa fa-phone-alt mr-3"></i>{{ $item->telp }}</p>
                        <p><i class="far fa-envelope mr-2"></i> {{ $item->email }}</p>
                        <p><i class="fas fa-door-closed mr-2"></i>Permintaan Sebagai Dokter </p>
                    </div>
                </div>
                <div class="button-description flex justify-end p-2">
                    <a href="{{ route('dokter.edit', 1) }}"
                        class="bg-blue-300 rounded md text-base font-medium text-white mr-2 p-2 w-64 text-center border transition duration-500 ease-in-out transform  hover:scale-110">
                        Request Sebagai Docter
                    </a>
                    <a href="{{ route('dokter.edit', 1) }}"
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
