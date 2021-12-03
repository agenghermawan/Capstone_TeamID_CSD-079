@extends('layouts.app')

@section('content')

    <div class="text-base font-semibold mt-5 mb-2"> Detail Data Pengguna</div>
    <div class="grid grid-cols-1 gap-3 md:grid-cols-2 xl:grid-cols-3  mt-10">
        <div class="bg-white col-span-1 xl:col-span-1 p-5 h-64 rounded-xl">
            <div class="image-information items-center flex border-b pb-5">
                <div class="image w-1/4">
                    <img src="{{ asset('image/profile.jpg') }}" class="w-24 h-24 rounded-full" alt="">
                </div>
                <div class="name-information w-3/4 ">
                    <p> Ageng Hermawan</p>
                    <p> Pengguna </p>
                </div>
            </div>
            <div class="list mt-4">
                <ul>
                    <li class="p-2 text-blue-500"> <a href=""> <i class="fas fa-file-medical-alt mr-2 fa-lg"></i> Display
                            Information
                        </a></li>
                    <li class="p-2  text-blue-500"> <a href=""> <i class="fas fa-id-card-alt mr-1 fa-lg"></i> Personal
                            Information
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-span-1 xl:col-span-2">
            <div class="bg-white p-5 mb-10 rounded-lg">
                <h4 class="text-base font-semibold border-b pb-2 mb-3 mt-2 text-blue-700"> Informasi Pengguna </h4>
                <form action="">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:grid-cols-3">
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Nama :</label>
                            <input type="text"
                                class="rounded shadow-sm w-full border p-2 border-blue-400 border-opacity-25 appearance-none focus:border-blue-500 focus:border-opacity-100">
                        </div>
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Nama :</label>
                            <input type="text"
                                class="rounded shadow-sm w-full border p-2 border-blue-400 border-opacity-25 appearance-none focus:border-blue-500 focus:border-opacity-100">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:grid-cols-3">
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Nama :</label>
                            <input type="text"
                                class="rounded shadow-sm w-full border p-2 border-blue-400 border-opacity-25 appearance-none focus:border-blue-500 focus:border-opacity-100">
                        </div>
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Nama :</label>
                            <input type="text"
                                class="rounded shadow-sm w-full border p-2 border-blue-400 border-opacity-25 appearance-none focus:border-blue-500 focus:border-opacity-100">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:grid-cols-3">
                        <div class="mb-4 col-span-2">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Nama :</label>
                            <textarea name="" id="" cols="30" rows="3"
                                class="rounded shadow-sm w-full border p-2 border-blue-400 border-opacity-25 appearance-none focus:border-blue-500 focus:border-opacity-100"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="bg-white p-5 mb-10 rounded-lg">
                <h4 class="text-base font-semibold border-b pb-2 mb-3 mt-2 text-blue-700"> Informasi Pengguna </h4>
                <form action="">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:grid-cols-2">
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Nama :</label>
                            <input type="text"
                                class="rounded shadow-sm w-full border p-2 border-blue-400 border-opacity-25 appearance-none focus:border-blue-500 focus:border-opacity-100">
                        </div>
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Nama :</label>
                            <input type="text"
                                class="rounded shadow-sm w-full border p-2 border-blue-400 border-opacity-25 appearance-none focus:border-blue-500 focus:border-opacity-100">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:grid-cols-2">
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Nama :</label>
                            <input type="text"
                                class="rounded shadow-sm w-full border p-2 border-blue-400 border-opacity-25 appearance-none focus:border-blue-500 focus:border-opacity-100">
                        </div>
                        <div class="mb-4">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Nama :</label>
                            <input type="text"
                                class="rounded shadow-sm w-full border p-2 border-blue-400 border-opacity-25 appearance-none focus:border-blue-500 focus:border-opacity-100">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 xl:grid-cols-2">
                        <div class="mb-4 col-span-2">
                            <label for="" class="block mb-2 text-xs text-gray-700"> Nama :</label>
                            <textarea name="" id="" cols="20" rows="3"
                                class="rounded shadow-sm w-full border p-2 border-blue-400 border-opacity-25 appearance-none focus:border-blue-500 focus:border-opacity-100"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <a href="" class="bg-blue-600 rounded shadow-md p-2 w-32 text-center text-white"> Perbarui Data </a>
                        <a href="" class="rounded p-3 text-blue-400 text-sm"> <i class="fas fa-trash mr-2"></i>
                            Delete Data </a>
                    </div>
                </form>
            </div>
        </div>



    </div>

@endsection
