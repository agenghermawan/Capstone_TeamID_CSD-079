@extends('layouts.app')


@section('title')
    @if(Auth::user()->role_pengguna == 'Dokter')
       <span class="text-blue-700">  Dashboard Dokter </span>
    @else
        Dashboard Admin
    @endif
@endsection


@section('content')
    @include('sweetalert::alert')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10  mt-4 content-dashboard">
        <div class="left-content-dashboard md:col-span-2">
            <div class="title flex justify-between">
                <h5> General Reports </h5>
                <h5> Relaod Data</h5>
            </div>
            <!-- Chart Top -->
            <div class="content-card grid gap-4 grid-cols-1 md:grid-cols-4 mt-5">
                <div
                    class="card h-100 p-5 bg-white shadow-md transform transtition hover:scale-110 duration-500 from-blue-300 bg-gradient-to-tr to-blue-200">
                    <div class="title-content-card flex justify-between">
                        <img src="{{ asset('icon/Hospital.png') }}" width="30px" height="30px" alt="">
                    </div>
                    <div class="content-card py-5">
                        <h1> {{ $countRumahSakit }} </h1>
                        <p> Rumah Sakit</p>
                    </div>
                </div>
                <div
                    class="card h-100 p-5 bg-white shadow-md transform transtition hover:scale-110 duration-500 from-blue-300 bg-gradient-to-tr to-blue-200">
                    <div class="title-content-card flex justify-between">
                        <img src="{{ asset('icon/user.png') }}" width="30px" height="30px" alt="">
                    </div>
                    <div class="content-card py-5">
                        <h1> {{ $countPengguna }} </h1>
                        <p> Pengguna</p>
                    </div>
                </div>
                <div
                    class="card h-100 p-5 bg-white shadow-md transform transtition hover:scale-110 duration-500 from-blue-300 bg-gradient-to-tr to-blue-200">
                    <div class="title-content-card flex justify-between">
                        <img src="{{ asset('icon/doctor.png') }}" width="30px" height="30px" alt="">
                    </div>
                    <div class="content-card py-5">
                        <h1> {{ $countDokter }} </h1>
                        <p> Dokter</p>
                    </div>
                </div>
                <div
                    class="card h-100 p-5 bg-white shadow-md transform transtition hover:scale-110 duration-500 from-blue-300 bg-gradient-to-tr to-blue-200">
                    <div class="title-content-card flex justify-between">
                        <img src="{{ asset('icon/positive.png') }}" width="30px" height="30px" alt="">
                    </div>
                    <div class="content-card py-5">
                        @foreach ($dataIndonesia as $item)
                            <h1> {{ $item->positif }} </h1>
                        @endforeach
                        <p> Covid </p>
                    </div>
                </div>
            </div>


            @if(Auth::user()->role_pengguna == 'Dokter')
            <div class="grid grid-cols-1 md:grid-cols-3">
                <div class="col-span-1">
                    <div class="p-10 flex">
                        <div class="imageAvatar">
                            @if(Auth::user()->profile_photo_path == null)
                                <img src="{{ asset('image/avatar doktor.jpg') }}" class="md:w-64 md:h-64 w-32 h-32 rounded-full" alt="">
                            @else
                                <img src="{{ Storage::url(Auth::user()->profile_photo_path)  }}" class="md:w-64 md:h-64 w-32 h-32 rounded-full" alt="">
                            @endif
                        </div>
                        <div class="info">
                            <div class="md:p-10">
                                <h1 class="text-2xl font-semibold"> {{$greetings }}   </h1>
                                @if(Auth::user()->role_pengguna ==  'Dokter')
                                    <h1 class="text-lg tracking-wide mt-7"> {{$dataDokter->dokter->fullname}} </h1>
                                    <p class="text-sm text-blue-300"> {{$dataDokter->dokter->telp}}</p>
                                    <div class="button mt-3">
                                        <a href="{{route('janji-dokter.index')}}" class="bg-blue-300 p-3  shadow rounded"> Janji Temu </a>
                                    </div>
                                @else
                                    <h1 class="text-lg tracking-wide mt-7"> Hallo Admin :)</h1>
                                    <h1 class="text-lg tracking-wide mt-7"> {{Auth::user()->name}} </h1>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="w-100 h-100 bg-white mt-5 p-5">
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div
                                        class="
                                                            shadow
                                                            overflow-hidden
                                                            border-b border-gray-200
                                                            sm:rounded-lg
                                                            ">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="
                                                                            px-6
                                                                            py-3
                                                                            text-left text-xs
                                                                            font-medium
                                                                            text-gray-500
                                                                            uppercase
                                                                            tracking-wider
                                                                            ">
                                                        Nama Pasien
                                                    </th>
                                                    <th scope="col"
                                                        class="
                                                                        px-6
                                                                        py-3
                                                                        text-left text-xs
                                                                        font-medium
                                                                        text-gray-500
                                                                        uppercase
                                                                        tracking-wider
                                                                        ">
                                                        Tanggal
                                                    </th>
                                                    <th scope="col"
                                                        class="
                                                                            px-6
                                                                            py-3
                                                                            text-left text-xs
                                                                            font-medium
                                                                            text-gray-500
                                                                            uppercase
                                                                            tracking-wider
                                                                            ">
                                                        Jam Janji
                                                    </th>
                                                    <th scope="col"
                                                        class="
                                                                            px-6
                                                                            py-3
                                                                            text-left text-xs
                                                                            font-medium
                                                                            text-gray-500
                                                                            uppercase
                                                                            tracking-wider
                                                                            ">
                                                        Rumah Sakit
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach ($janjiTemu as $item)
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="ml-4">
                                                                    <div class="text-sm font-medium text-gray-900">
                                                                    {{$item->nama}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-500">
                                                                {{$item->tanggal_janji}}
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-500">
                                                                {{$item->jam_janji}}
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            @php
                                                              $getRumahsakit =  \App\Models\RumahSakit::where('id',$item->rumahsakit_id)->first();
                                                            @endphp
                                                            {{$getRumahsakit -> nama}}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-3">
                    <div class="col-span-1">
                        <div class="p-10 flex">
                            <div class="imageAvatar">
                                @if(Auth::user()->profile_photo_path == null)
                                   <img src="{{ asset('image/avatar doktor.jpg') }}" class="md:w-64 md:h-64 w-32 h-32 rounded-full" alt="">
                                @else
                                    <img src="{{ Storage::url(Auth::user()->profile_photo_path)  }}" class="md:w-64 md:h-64 w-32 h-32 rounded-full" alt="">
                                @endif
                            </div>
                            <div class="info">
                                <div class="md:p-10 pl-10">
                                    <h1 class="text-2xl font-semibold"> {{$greetings }}   </h1>
                                    @if(Auth::user()->role_pengguna ==  'Dokter')
                                        <h1 class="text-lg tracking-wide mt-7"> {{$dataDokter->dokter->fullname}} </h1>
                                        <p class="text-sm text-blue-300"> {{$dataDokter->dokter->telp}}</p>
                                        <h1> Alamat : {{$dataDokter->dokter->alamat}}</h1>

                                        <div class="button">
                                            <a href="{{route('janji-dokter.index')}}"></a>
                                        </div>
                                    @else
                                        <h1 class="text-lg tracking-wide mt-7"> Hallo Admin :)</h1>
                                        <h1 class="text-lg tracking-wide mt-7"> {{Auth::user()->name}} </h1>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="w-100 h-100 bg-white mt-5 p-5">
                            <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div
                                            class="
                                                            shadow
                                                            overflow-hidden
                                                            border-b border-gray-200
                                                            sm:rounded-lg
                                                            ">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="
                                                                            px-6
                                                                            py-3
                                                                            text-left text-xs
                                                                            font-medium
                                                                            text-gray-500
                                                                            uppercase
                                                                            tracking-wider
                                                                            ">
                                                        Nama Pasien
                                                    </th>
                                                    <th scope="col"
                                                        class="
                                                                        px-6
                                                                        py-3
                                                                        text-left text-xs
                                                                        font-medium
                                                                        text-gray-500
                                                                        uppercase
                                                                        tracking-wider
                                                                        ">
                                                        Tanggal
                                                    </th>
                                                    <th scope="col"
                                                        class="
                                                                            px-6
                                                                            py-3
                                                                            text-left text-xs
                                                                            font-medium
                                                                            text-gray-500
                                                                            uppercase
                                                                            tracking-wider
                                                                            ">
                                                        Jam Janji
                                                    </th>
                                                    <th scope="col"
                                                        class="
                                                                            px-6
                                                                            py-3
                                                                            text-left text-xs
                                                                            font-medium
                                                                            text-gray-500
                                                                            uppercase
                                                                            tracking-wider
                                                                            ">
                                                        Rumah Sakit
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach ($getlatestJanji as $item)
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="ml-4">
                                                                    <div class="text-sm font-medium text-gray-900">
                                                                        {{$item->nama}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-500">
                                                                {{$item->tanggal_janji}}
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-500">
                                                                {{$item->jam_janji}}
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            @php
                                                                $getRumahsakit =  \App\Models\RumahSakit::where('id',$item->rumahsakit_id)->first();
                                                            @endphp
                                                            {{$getRumahsakit -> nama}}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

    
        </div>
    </div>
@endsection
