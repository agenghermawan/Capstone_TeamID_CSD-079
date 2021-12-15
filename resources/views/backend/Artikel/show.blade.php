@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-md shadow-md md:px-96 py-16    ">
        <div class="header-text">
            <h4 class="text-lg font-semibold tracking-wide text-blue-700" style="font-size: 28px"> {{ $dataArtikel->title }} </h3>
                <div class="md:flex md:justify-between my-5">
                    <p class="text-blue-500">{{ $dataArtikel->kategori }}</p>
                    <p class="text-blue-500">{{ $dataArtikel->created_at }}</p>
                </div>
                <div class="image-detail flex justify-center">
                    <img src="{{ Storage::url($dataArtikel->photo) }}" class="rounded object-cover" height="100px"
                        width="100%" alt="">
                </div>
                <div class="deskripsi text-black mt-5 text-justify">
                    <h4 class="my-2 text-lg font-medium text-blue-600" style="font-size: 22px"> Isi Artikel </h4>
                    <p class="text-justify"> {!! $dataArtikel->isiArtikel !!} </p>
                </div>
        </div>
    </div>
@endsection
