@extends('layouts.app')

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
                            <img src="{{ asset('image/avatar doktor.jpg') }}" class="w-64 h-64 rounded-full" alt="">
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
                                <img src="{{ asset('image/avatar doktor.jpg') }}" class="w-64 h-64 rounded-full" alt="">
                            </div>
                            <div class="info">
                                <div class="md:p-10">
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

            <!-- Maps Content -->
            <div class="w-100 h-100 grid grid-cols-12 mt-5">
                <div class="col-span-12 bg-white p-5">
                    Lokasi Perusahaan
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.956854657923!2d107.63165751534372!3d-6.895764295017193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7a5573862af%3A0x173078800fac4efc!2sDicoding%20Space!5e0!3m2!1sen!2sid!4v1637827009762!5m2!1sen!2sid"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
