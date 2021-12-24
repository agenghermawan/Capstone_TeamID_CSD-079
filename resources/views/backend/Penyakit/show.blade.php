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
            <div class="">
                <div class="deskripsi text-black mt-5 text-justify my-10 ">
                    <h4 class="my-2 text-2xl font-semibold"> Nama Penyakit  </h4>
                    <p class="text-justify"> {!! $data->namaPenyakit !!} </p>
                </div>
                <div class="deskripsi text-black mt-5 text-justify my-10">
                    <h4 class="my-2 text-2xl font-semibold"> Deskripsi Singkat Penyakit  </h4>
                    <p class="text-justify"> {!! $data->deskripsiSingkat !!} </p>
                </div>
            </div>
        </div>
        <div class="p-18  border-gray-500 my-10">
            <h4 class="my-2 text-2xl font-semibold"> Gejala  </h4>
            <p class="text-justify"> {!! $data->gejala !!} </p>
        </div>
        <div class="p-18 border-gray-500 my-10">
            <h4 class="my-2 text-2xl font-semibold"> Penyebab  </h4>
            <p class="text-justify"> {!! $data->penyebab !!} </p>
        </div>
        <div class="p-18  border-gray-500 my-10">
            <h4 class="my-2 text-2xl font-semibold"> Faktor Resiko  </h4>
            <p class="text-justify"> {!! $data->faktorRisiko !!} </p>
        </div>
        <div class="p-18 border-gray-500 my-10">
            <h4 class="my-2 text-2xl font-semibold"> Pengobatan  </h4>
            <p class="text-justify"> {!! $data->pengobatan  !!} </p>
        </div>
        <div class="p-18  border-gray-500 my-10">
            <h4 class="my-2 text-2xl font-semibold"> Pencegahan  </h4>
            <p class="text-justify"> {!! $data->pencegahan !!} </p>
        </div>
        <div class="button mt-5 flex">
            <a href="{{route('penyakit.edit',$data->id)}}" class="p-3 bg-blue-300 rounded mr-2"> Edit </a>

            <form action="{{route('penyakit.destroy',$data->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="p-3 bg-blue-300 rounded"> Delete </button>
            </form>
        </div>
    </div>

@endsection
