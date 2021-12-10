@extends('layouts.app')

@section('content')
    @include('sweetalert::alert')
    <div class="grid grid-cols-3 gap-10  mt-4 content-dashboard">
        <div class="col-span-2 left-content-dashboard">
            <div class="title flex justify-between">
                <h5> General Reports </h5>
                <h5> Relaod Data</h5>
            </div>
            <!-- Chart Top -->
            <div class="content-card grid gap-4 grid-cols-4 mt-5">
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
            <!-- Chart -->
            <div class="report grid grid-cols-12 gap-4 mt-5">
                <div class="col-span-8 ">
                    Report Data
                    <div class="bg-white w-100  mt-5">
                        <div class="shadow-lg rounded-lg overflow-hidden">
                            <div class="py-3 px-5 ">Bar chart</div>
                            <canvas class="p-10" id="chartBar"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    Weekly Top
                    <div class="bg-white w-100 h-100 mt-5">
                        <div class="shadow-lg rounded-lg overflow-hidden">
                            <div class="py-3 px-5">Informasi Covid</div>
                            <canvas class="p-10" id="chartDoughnut"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Maps Content -->
            <div class="w-100 h-100 grid grid-cols-12 mt-5">
                <div class="col-span-12 bg-white p-5">
                    Official Store
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.956854657923!2d107.63165751534372!3d-6.895764295017193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7a5573862af%3A0x173078800fac4efc!2sDicoding%20Space!5e0!3m2!1sen!2sid!4v1637827009762!5m2!1sen!2sid"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
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
                                                Name
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
                                                Title
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
                                                Email
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
                                                Role
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @for ($i = 0; $i < 6; $i++)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                Flora Wu
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">
                                                        Software engineer, IT
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">
                                                        flora.wu@example.com
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    Admin
                                                </td>
                                                <td
                                                    class="
                                                                    px-6
                                                                    py-4
                                                                    whitespace-nowrap
                                                                    text-right text-sm
                                                                    font-medium
                                                                    ">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Right -->
        <div class="right-content-dashboard">
            <h1> Transaction </h1>
            <div class="card-transaction bg-white mt-5 flex p-5">
                <div class="grid grid-cols-12 md:w-100">
                    <div class="transaction-left col-span-10 flex">
                        <img src="{{ asset('image/profile.jpg') }}" class="rounded w-12 h-12" alt="">
                        <div class="text pl-4">
                            <h5> Ageng Hermawan</h5>
                            <h5> 25 Sept 2000 </h5>
                        </div>
                    </div>
                    <div class="transaction-right col-span-2">
                        <p> 201 Pasien</p>
                    </div>
                </div>
            </div>
            <div class="card-transaction bg-white mt-5 flex p-5">
                <div class="grid grid-cols-12 md:w-100">
                    <div class="transaction-left col-span-10 flex">
                        <img src="{{ asset('image/profile.jpg') }}" class="rounded w-12 h-12" alt="">
                        <div class="text pl-4">
                            <h5> Ageng Hermawan</h5>
                            <h5> 25 Sept 2000 </h5>
                        </div>
                    </div>
                    <div class="transaction-right col-span-2">
                        <p> 201 Pasien</p>
                    </div>
                </div>
            </div>
            <div class="card-transaction bg-white mt-5 flex p-5">
                <div class="grid grid-cols-12 md:w-100">
                    <div class="transaction-left col-span-10 flex">
                        <img src="{{ asset('image/profile.jpg') }}" class="rounded w-12 h-12" alt="">
                        <div class="text pl-4">
                            <h5> Ageng Hermawan</h5>
                            <h5> 25 Sept 2000 </h5>
                        </div>
                    </div>
                    <div class="transaction-right col-span-2">
                        <p> 201 Pasien</p>
                    </div>
                </div>
            </div>
            <div class="card-transaction bg-white mt-5 flex p-5">
                <div class="grid grid-cols-12 md:w-100">
                    <div class="transaction-left col-span-10 flex">
                        <img src="{{ asset('image/profile.jpg') }}" class="rounded w-12 h-12" alt="">
                        <div class="text pl-4">
                            <h5> Ageng Hermawan</h5>
                            <h5> 25 Sept 2000 </h5>
                        </div>
                    </div>
                    <div class="transaction-right col-span-2">
                        <p> 201 Pasien</p>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-to-r from-blue-500 mt-5 p-5 text-white text-center">
                <a href="" class="mt-"> View More</a>
            </div>
            <div class="card-notes bg-white w-100 mt-5 p-5">
                Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s.
            </div>
            <div class="card-docter mt-10">
                <h1> Daftar Dokter</h1>
                @for ($i = 0; $i < 5; $i++)
                    <div class=" bg-white mt-4 p-5 grid grid-cols-12">
                        <div class="col-span-2">
                            <img src="{{ asset('image/dokter.png') }}" alt="">
                        </div>
                        <div class="col-span-6">
                            <h5> Caca Monica </h5>
                            <h6> Dokter Anak</h6>
                        </div>
                        <div class="col-span-4">
                            <h5> Umur : 21 Tahun</h5>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
