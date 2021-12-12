@extends('layouts.app')

@section('css')


@endsection
@section('content')
    <div class="container mt-4 grid grid-cols-1 md:grid-cols-2 lg:flex justify-between">
        <h4> Blog Layout </h4>
        <a href="{{ route('artikel.create') }}" class="bg-blue-500 p-3 shadow-2xl rounded"> Tambahkan Artikel</a>
    </div>

    <div class="container content-article">
        <div class="grid grid-cols-1 p-5 md:grid-cols-2 lg:grid-cols-3 gap-2 mt-4  ">
            @foreach ($data as $item)
                <div class="bg-white p-5 rounded-md">
                    <a href="{{ route('artikel.show', $item->id) }}" class="transtition transform hover:scale-110">
                        <div class="flex">
                            <img src="{{ asset('image/profile.jpg') }}" class="rounded-full object-cover w-12 h-12" alt="">
                            <div class="px-4">
                                <p> {{ $item->ditulisOleh }}</p>
                                @if ($item->created_at == null)
                                    <p> {{ $item->created_at }}</p>
                                @else
                                    <p> {{ $item->updated_at }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="body-article mt-5">
                            <img src="{{ Storage::url($item->photo) }}" class="w-full rounded-md" alt="">
                            <div class="my-2 text-sm tracking-wide">
                                {!! Str::limit($item->isiArtikel, 200) !!}
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection