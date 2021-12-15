@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-md shadow-md 2xl:px-96 2xl:py-16">
        <div class="image mb-4 flex">
            <div>
                @if(Auth::user()->profile_photo_path == null)
                    <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" class="rounded-full" width="60px" height="60px" alt="">
                @else
                    <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" class="rounded-full" width="60px" height="60px" alt="">
                @endif
            </div>
            <h1 class="ml-5" style="font-size: 24px"> {{$dataArtikel->ditulisOleh}}</h1>
        </div>
        <div class="header-text">
            <h4 class="text-lg font-semibold tracking-wide text-blue-700" style="font-size: 48px"> {{ $dataArtikel->title }} </h3>
                <div class="md:flex md:justify-between my-5">
                    <p class="text-blue-500">{{ $dataArtikel->kategori }}</p>
                    <p class="text-blue-500">{{ $dataArtikel->created_at }}</p>
                </div>
                <div class="image-detail flex justify-center">
                    <img src="{{ Storage::url($dataArtikel->photo) }}" class="rounded object-cover" height="100px"
                        width="100%" alt="">
                </div>
                <div class="deskripsi text-black mt-5 text-justify">
                    <p class="text-justify"> {!! $dataArtikel->isiArtikel !!} </p>
                </div>
        </div>
        <div class="flex">
            <a href="{{route('artikel.edit',$dataArtikel->id)}}" class="bg-blue-300 rounded p-3 shadow-md mr-2"> Edit </a>
            <form action="{{route('artikel.destroy',$dataArtikel->id)}}" method="post">
                @csrf
                @method('delete')
                 <button class="bg-blue-300 rounded p-3 shadow-md"> Delete </button>
            </form>

        </div>
    </div>
@endsection
