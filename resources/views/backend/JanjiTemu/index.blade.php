@extends('layouts.app')

@section('title')
    Daftar Janji dengan Pasien
@endsection
@section('buttonHeader')
    <div x-data="{ open: false }">
        <button x-on:click="open = ! open" class="bg-gradient-to-r  md:justify-items-end from-blue-300 to-blue-200 p-2 w-64 rounded">Daftar Janji <i class="fas fa-chevron-circle-down"></i></button>
        <div x-show="open" x-transition>
            <uli>
                <li class="bg-white space-y-1 flex flex-col absolute">
                    <a href="{{route('dokter_daftarPermintaan')}}" class="py-2"> Daftar Permintaan </a>
                    <a href="{{route('dokter_daftarPermintaan')}}" class="py-2"> Permintaan diterima</a>
                    <a href="{{route('dokter_daftarPermintaan')}}" class="py-2"> Selesai </a>
                </li>
            </uli>
        </div>
    </div>
@endsection
@section('content')
    @include('sweetalert::alert')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                nama
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Waktu
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Rumah Sakit
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Detail
                            </th>
                        </tr>
                        </thead>
                    @foreach($data as $item)
                            <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        @if($getID->user->profile_photo_path == null)
                                        <img class="h-10 w-10 rounded-full" src="{{asset('image/avatar doktor.jpg')}}" class="rounded-full" alt="">
                                        @else
                                            <img src="{{Storage::url($getID->user->profile_photo_path)}}" class="rounded-full" alt="">
                                        @endif
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{$item->nama}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{$item->alamat}}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$item->tanggal_janji}}</div>
                                <div class="text-sm text-gray-500">{{$item->jam_janji}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                  {{$item->status}}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{$item->kota}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <a href="{{route('janji-dokter.show',$item->id)}}" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('OptionalJS')

@endsection
