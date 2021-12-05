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
    <a href="{{ route('rumahSakit.create') }}" class="bg-blue-400 p-3 text-white rounded mb-5"> Tambahkan Data Obat</a>

    <div class="w-full mt-5">
        <table class="min-w-full divide-y divide-gray-200" id="myTable">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col"
                    class="px-6 py-3  text-xs text-center font-medium text-gray-500 uppercase tracking-wider">
                    Nama
                </th>
                <th scope="col"
                    class="px-6 py-3  text-xs text-center font-medium text-gray-500 uppercase tracking-wider">
                    Alamat
                </th>
                <th scope="col"
                    class="px-6 py-3  text-xs font-medium text-center text-gray-500 uppercase tracking-wider">
                    Total Poli Klinik
                </th>
                <th scope="col"
                    class="px-6 py-3  text-xs font-medium text-center text-gray-500 uppercase tracking-wider">
                    No Telp
                </th>
                <th scope="col"
                    class="px-6 py-3  text-xs font-medium text-center text-gray-500 uppercase tracking-wider">
                    Detail
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @for ($i = 0; $i < 15; $i++)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="ml-4">
                                <div class="text-sm text-center font-medium text-gray-900">
                                    Dki Jakarta
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-center">
                        <p class="text-xs text-gray-400"> Orang </p>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-center">
                        <p class="text-xs text-gray-400"> Orang </p>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                        <p class="text-xs text-gray-400"> Orang </p>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                        <a href="{{ route('obat.show', 1) }}" class="rounded bg-blue-300 p-2"> Detail </a>
                    </td>
                </tr>
            @endfor

            </tbody>
        </table>
    </div>

@endsection