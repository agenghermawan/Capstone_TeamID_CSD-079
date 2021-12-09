@extends('layouts.app')

@section('css')


@endsection
@section('content')
    <div class="container mt-4  grid-cols-1 md:grid-cols-2 lg:flex flex justify-between">
        <h4> Daftar Data Penyakit </h4>
        <a href="{{ route('penyakit.create') }}"
            class="bg-blue-200 px-3 py-4 rounded transition transform hover:scale-110  ease-in-out duration-500 ">
            Tambahkan
            Data Penyakit</a>
    </div>

    <div class="grid md:grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-3">
        @for ($i = 0; $i < 12; $i++)
            <div class="md:flex md:w-full bg-white mt-5 rounded-md shadow-md">
                <div class="image">
                    <img src="{{ asset('image/penyakit.jpg') }}" class="h-full w-full object-cover" alt="">
                </div>
                <div class="p-10 bg-blue-50">
                    <a href="{{ route('penyakit.edit', 1) }}"
                        class="block mt-1 text-lg leading-tight font-medium text-black hover:no-underline">Finding
                        customers
                        for your new business</a>
                    <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five
                        ideas you can use to find your first customers.</p>
                </div>
            </div>
        @endfor
    </div>

@endsection


@section('OptionalJS')

@endsection
