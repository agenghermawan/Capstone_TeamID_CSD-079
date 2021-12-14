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
    @include('sweetalert::alert')
    <div class="h1 my-5 md:text-center text-lg font-bold text-blue-500"> Daftar Data Rumah Sakit </div>
    <div class="md:flex md:justify-between ">
        <div class="left-header mb-8">
            <a href="{{ route('rumahSakit.create') }}" class="bg-blue-300 p-3 text-white rounded mb-5"> Tambahkan Data
                Rumah
                Sakit</a>
        </div>
        <div class="right-header">
            <a href="{{ route('poliklinik.create') }}" class="bg-blue-300 p-3 text-white rounded mb-5"> Tambahkan Data Poli
                Klinik
            </a>
        </div>
    </div>
    <div class="w-full mt-5">
        <table class="min-w-full divide-y divide-gray-200" id="myTable">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3  text-xs text-center font-medium text-black uppercase tracking-wider">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3  text-xs text-center font-medium text-black uppercase tracking-wider">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3  text-xs font-medium text-center text-black uppercase tracking-wider">
                        Total Poli Klinik
                    </th>
                    <th scope="col" class="px-6 py-3  text-xs font-medium text-center text-black uppercase tracking-wider">
                        No Telp
                    </th>
                    <th scope="col" class="px-6 py-3  text-xs font-medium text-center text-black uppercase tracking-wider">
                        Detail
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($data as $item)
                    <tr class="p-15">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="ml-4">
                                    <div class="text-sm text-center font-medium text-gray-900">
                                        <p class="py-3"> {{ $item->nama }} </p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <p class="text-xs text-gray-400"> {{ $item->provinsi }} </p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <p class="text-xs text-gray-400"> {{ $item->kodepos }} </p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                            <p class="text-xs text-gray-400"> {{ $item->jamOperasional }} </p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <a href="{{ route('rumahSakit.show', $item->id) }}" class="rounded bg-blue-200 p-2 mr-2"> Detail </a>
                            <a href="{{ route('rumahSakit.edit', $item->id) }}" class="rounded bg-blue-200 p-2"> Edit </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
