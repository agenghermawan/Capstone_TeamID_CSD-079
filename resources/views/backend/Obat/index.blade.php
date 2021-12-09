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
    <div class="h1 my-5 text-center text-base text-blue-500 font-bold"> Daftar Data Rumah Sakit </div>
    <a href="{{ route('obat.create') }}" class="bg-blue-400 p-3 text-white rounded mb-5"> Tambahkan Data Obat</a>

    <div class="w-full mt-5">
        <table class="min-w-full divide-y divide-gray-200" id="myTable">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3  text-xs text-text-left font-medium text-black uppercase tracking-wider">
                        Nama Obat
                    </th>
                    <th scope="col"
                        class="px-6 py-3  text-xs text-text-left font-medium text-black uppercase tracking-wider">
                        Golongan
                    </th>
                    <th scope="col"
                        class="px-6 py-3  text-xs font-medium text-text-left text-black uppercase tracking-wider">
                        Kategori
                    </th>
                    <th scope="col"
                        class="px-6 py-3  text-xs font-medium text-text-left text-black uppercase tracking-wider">
                        Merk Dagang
                    </th>
                    <th scope="col"
                        class="px-6 py-3  text-xs font-medium text-text-left text-black uppercase tracking-wider">
                        Detail
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 rounded">
                @foreach ($dataObat as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="ml-4">
                                    <div class="text-sm text-center font-medium text-gray-900">
                                        <p class="py-3"> {{ $item->namaObat }} </p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-left">
                            <p class="text-xs text-gray-900"> {{ $item->golongan }} </p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-left">
                            <p class="text-xs text-gray-900"> {{ $item->kategori }} </p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-left text-sm text-gray-500">
                            <p class="text-xs text-gray-900"> {{ $item->merkDagang }} </p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                            <a href="{{ route('obat.show', $item->id) }}" class="rounded py-3 px-3"> <i
                                    class="fas fa-eye text-gray-900"></i> </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
