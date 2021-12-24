@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <div class="bg-white p-10 gap-5 grid grid-rows-1 shadow-md text-justify overflow-auto">
        <div class="header col-span-1 grid gap-2 col-rows-1">
            <h4 class="font-bold text-xl text-blue-400"> {{ $detailDataObat->namaObat }}</h4>
            <h5 class="mt-2">
                {!! $detailDataObat->deskripsi !!}
            </h5>
        </div>
        <div class="image bg-clip-content md:flex">
            <div class="md:flex-shrink-0">
                <img src="{{ Storage::url($detailDataObat->photoObat) }}" class="rounded flex-initial md:h-64" alt="">
            </div>
            <div class="produk md:p-5 md:ml-2">
             
                <ul class="list-outside bg-rose-200 list-disc tracking-tighter">
                    <p class="mt-2 ">
                        {!! $detailDataObat->productObat !!}
                    </p>
                </ul>
            </div>
        </div>
   

        <div class="dosis grid gap-2">
            <h5 class="font-bold"> Dosis dan Aturan Pakai {{ $detailDataObat->namaObat }} </h5>
            <p> {!! $detailDataObat->dosisdanaturan!!}</p>
        </div>


        <div class="interaksi grid gap-2">
            <h5 class="font-bold"> Interaksi {{ $detailDataObat->namaObat }} dengan Obat Lain </h5>
            <p> {!! $detailDataObat->interaksi !!}</p>
        </div>

        <div class="efek">
            <h5 class="font-bold"> Efek Samping dan Bahaya {{ $detailDataObat->namaObat }} </h5>
            <p> {!! $detailDataObat->efekSamping !!} </p>

        </div>

        <div class="kategori space-6-2">
            <div class="Golongan border-b py-2">
                <h4 class="font-bold"> Nama Obat </h4>
                <p class="text-sm text-blue-700"> {{ $detailDataObat->namaObat }} </p>
            </div>
            <div class="Deskripsi border-b py-2">
                <h4 class="font-bold"> Golongan </h4>
                <p class="text-sm text-blue-700"> {{ $detailDataObat->golongan }} </p>
            </div>
            <div class="golongan border-b py-2">
                <h4> Kategori </h4>
                <p class="text-sm text-blue-700"> {{ $detailDataObat->kategori }} </p>
            </div>
            <div class="golongan border-b py-2">
                <h4> Bentuk Obat </h4>
                <p class="text-sm text-blue-700"> {{ $detailDataObat->bentukObat }} </p>
            </div>
        </div>

    </div>

@endsection
