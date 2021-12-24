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
@section('title')
   Daftar Kategori Obat
@endsection

@section('content')

    <div class="grid-cols-1 grid lg:grid-cols-7 mt-5">
            <a href="{{ route('obat.create') }}" class="bg-blue-400 p-3 text-white rounded mb-5 mr-2"> Tambahkan Data Obat</a>
            <a href="{{ route('kategori-obat.create') }}" class="bg-blue-400 p-3 text-white rounded mb-5"> Tambahkan Kategori Obat</a>
    </div>
    <div class="w-full mt-5">
        <table class="min-w-full divide-y divide-gray-200" id="myTable">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3  text-xs text-center  font-medium text-black uppercase tracking-wider">
                        Kategori Obat
                    </th>
                    <th scope="col"
                        class="px-6 py-3  text-xs text-center  font-medium text-black uppercase tracking-wider">
                        Deskripsi
                    </th> <th scope="col"
                        class="px-6 py-3  text-xs  text-center  font-medium text-black uppercase tracking-wider">
                        Gambar
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 rounded">
            @foreach($data as $item)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-center ">
                        <p class="text-sm text-gray-900"> {{ $item->nama }} </p>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-center">
                        <p class="text-sm text-gray-900"> {{ $item->deskripsi }} </p>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-center">
                            <img src="{{Storage::url($item->photo)}}" class="w-24" alt="KategoriObat">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
