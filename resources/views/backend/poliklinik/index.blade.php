@extends('layouts.app')

@section('css')
    <style>
        #myTable {
            border: none;
            border-collapse: separate;
            border-spacing: 0 1em;
            text-align: left;
        }

        #myTable thead th,
        #myTable thead td {
            padding: 20px;
            border: none;
        }

        #myTable_paginate .paginate_button {
            background-color: lightblue;
            border: none;
            border-radius: 20px;
        }

        #myTable_length select {
            border-radius: 10px;
            background-color: lightblue;
        }

        #myTable_filter input {
            margin-left: 15px;
            border-radius: 10px;
            background-color: lightblue;
        }

    </style>
@endsection

@section('content')
    <div class="h1 my-5 md:text-center text-lg font-bold text-blue-300"> Daftar Data Rumah Sakit </div>
    <div class="md:flex md:justify-between ">
        <div class="left-header mb-8">
            <a href="{{ route('poliklinik.create') }}" class="bg-blue-300 p-3 text-white rounded mb-5 text-base"> Tambahkan
                Data
                Poli Klinik
            </a>
        </div>
    </div>

    <div class="w-full md:grid md:grid-cols-2">
        @foreach ($data as $item)
            <div class="bg-white p-10 shadow-md rounded-md">
                <h4 class="font-lg font-semibold"> {{ $item->nama }}</h4>
                  {!!$item->deskripsi !!}
                <div x-data="{ open: false }">
                    <button @click="open = ! open" class="bg-blue-100 rounded-lg text-sm p-2">Lihat Tindakan Medis</button>
                    <span x-show="open">
                        <div class="grid md:grid-cols-4 text-sm text-center pt-5">
                            @foreach ($item->tindakanmedis as $item)
                                <p class="text-center"> {{ $item['tindakanmedis'] }} </p>
                            @endforeach
                        </div>
                    </span>
                </div>
            </div>
        @endforeach
    </div>
@endsection
