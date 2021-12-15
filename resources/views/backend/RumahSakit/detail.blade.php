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
    <div class="bg-white p-10 shadow-lg rounded-xl">
        <h4 class="font-sm text-base mb-4 font-semibold"> {{$data->nama}}</h4>
        <div class="image grid grid-cols-1 gap-5 md:grid-cols-2">
            <img src="{{ Storage::url($data->photo)}}" class="w-full h-80 object-cover" height="400px" alt="">
            <div class="border-b">
                <iframe class="rounded shadow-lg "
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4501488816986!2d106.82132961534131!3d-6.335688695414971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69edd3edb84d21%3A0x58e186ff58dc127!2sRumah%20Sakit%20Umum%20Zahirah!5e0!3m2!1sen!2sid!4v1638525047855!5m2!1sen!2sid"
                        width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <p class="text-sm mt-4 subpixel-antialiased text-blue-600">{{$data->alamat}}</p>
            </div>
        </div>


        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 border-b border-blue-200">
            <div class="pt-10 pb-10 pr-10">
                <h4 class="mb-4 text-blue-500 font-bold"> Tentang </h4>
                <p class="text-base text-justify ">{!! $data->tentang !!}</p>
            </div>
            <div class="p-10">
                <div class="grid grid-cols-1 md:grid-cols-2 text-sm ">
                    <div class="fasilitas">
                        <h4 class="font-bold text-blue-500 mb-4"> Fasilitas </h4>
                        <ul class="list-disc">
                            @foreach($data->fasilitas as $item)
                                <li> {{$item}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="fasilitas">
                        <h4 class="font-bold text-blue-500 mb-4"> Fasilitas </h4>
                        <ul class="list-disc">
                            @foreach($data->poliklinik as $item)
                                <li> {{$item}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full mt-5">
            <h4 class="text-center font-bold text-blue-700"> Daftar Dokter</h4>
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
                            <a href="{{ route('rumahSakit.show', 1) }}" class="rounded bg-blue-300 p-2"> Detail </a>
                        </td>
                    </tr>
                @endfor

                </tbody>
            </table>
        </div>

    </div>
@endsection
