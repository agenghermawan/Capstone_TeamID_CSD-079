@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-md shadow-md p-10">
        <div class="header-text">
            <h4> {{ $data->namaPenyakit }} </h3>
                <div class="md:flex md:justify-between my-5">
                    <p>{{ $data->ditulisOleh }}</p>
                    <p>{{ $data->created_at }}</p>
                </div>
                <div class="image-detail">
                    <img src="{{ Storage::url($data->photoPenyakit) }}" class="rounded object-cover" height="100px"
                        width="100%" alt="">
                </div>
                <div class="deskripsi text-black mt-5 text-justify">
                    <h4 class="my-2 text-lg font-medium"> Isi Penyakit </h4>
                    <p class="text-justify"> {!! $data->deskripsiPenyakit !!} </p>
                </div>
        </div>
    </div>
@endsection
