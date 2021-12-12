@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-md shadow-md p-10">
        <div class="header-text">
            <h3 class="font-bold text-2xl"> {{ $data->namaPenyakit }} </h3>
                <div class="md:flex md:justify-between mb-4">
                    <p class="text-sm text-blue-400">Ditulis Oleh : {{ $data->ditulisOleh }}</p>
                    <p class="text-sm text-blue-400">Pada Tanggal : {{ $data->created_at }}</p>
                </div>
        </div>
        <div class="isi md:flex md:flex-wrap gap-5 pt-18">
            <div class="image-detail w-2/5">
                <img src="{{ Storage::url($data->photoPenyakit) }}" class="rounded object-cover w-full"
                     alt="">
            </div>
            <div class="deskripsi text-black mt-5 text-justify">
                <h4 class="my-2 text-lg font-medium"> Isi Penyakit </h4>
                <p class="text-justify"> {!! $data->deskripsiPenyakit !!} </p>
            </div>
        </div>
    </div>
@endsection
