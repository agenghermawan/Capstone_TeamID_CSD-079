@extends('layouts.app')

@section('css')


@endsection
@section('content')
    <div class="container mt-4 grid grid-cols-1 md:grid-cols-2 lg:flex justify-between">
        <h4> Blog Layout </h4>
        <a href="{{ route('artikel.create') }}" class="bg-blue-500 p-3 shadow-2xl rounded"> Tambahkan Artikel</a>
    </div>

    <div class="container content-article">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 mt-4 shadow-2xl ">
            @for ($a = 0; $a < 6; $a++)
                <div class="bg-white p-5 rounded">
                    <div class="flex">
                        <img src="{{ asset('image/profile.jpg') }}" class="rounded-full w-12 h-12" alt="">
                        <div class="px-4">
                            <p> John Travolta</p>
                            <p> Kesehatan 55 Minutes ago</p>
                        </div>
                    </div>
                    <div class="body-article mt-5">
                        <img src="{{ asset('image/artikel.jpg') }}" class="w-100" alt="">
                        <div class="my-2">
                            Dummy text of the printing and typesetting industry <br>
                            It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
