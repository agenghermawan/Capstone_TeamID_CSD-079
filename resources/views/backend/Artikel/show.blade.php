@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-md shadow-md p-10">
        <div class="header-text">
            <h4> {{ $dataArtikel->title }} </h3>
                <div class="md:flex md:justify-between my-5">
                    <p>{{ $dataArtikel->kategori }}</p>
                    <p>{{ $dataArtikel->created_at }}</p>
                </div>
                <div class="image-detail">
                    <img src="{{ Storage::url($dataArtikel->photo) }}" class="rounded object-cover" height="100px"
                        width="100%" alt="">
                </div>
                <div class="deskripsi text-black mt-5 text-justify">
                    <h4 class="my-2 text-lg font-medium"> Isi Artikel </h4>
                    <p class="text-justify"> {!! $dataArtikel->isiArtikel !!} </p>
                </div>
        </div>
    </div>
@endsection
