<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sehatku</title>
    @include('layouts.style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.tiny.cloud/1/tmrao508v4qd0k76bb3ztge1vkvrlu25nec5c1fzm5tftz7y/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <style>


    </style>
</head>

<body style="background-color: #f5f6fC">
    <div class="relative min-h-screen flex " style="font-family: 'Inter', sans-serif;">
        <div class="sidebar text-blue-300 w-64 h-100 text-center align-center py-10 md:block "
            style="background-color: #273264; border-radius:0 125px 0 0">
            <div class="icon flex justify-center mt-5">
                <img src="{{ asset('icon/icon.png') }}" class="w-20" alt="">
            </div>
            <nav class="grid gap-5 text-left p-5 text-base">
                <a href="{{ route('dashboard') }}" class="mt-10"> Dashboard </a>
                <a href="{{ route('dokter.index') }}"> Dokter </a>
                <a href="{{ route('rumahSakit.index') }}"> Rumah Sakit </a>
                <a href="{{ route('pengguna.index') }}"> Pengguna </a>
                <a href=""> Janji Temu </a>
                <a href="{{ route('artikel.index') }}"> Artikel </a>
                <a href="{{ route('backendGetDataCovid') }}"> Obat </a>
                <a href="{{ route('backendGetDataCovid') }}"> Penyakit </a>
                <a href="{{ route('backendGetDataCovid') }}"> Covid Info </a>
            </nav>
        </div>
        <div class="content w-full rounded-lg mx-5 my-5 py-10 px-10">
            <div class="nav flex justify-between ">
                <div class="left ">
                    Application > Dashboard
                </div>
                <div class="right flex ">
                    <!--  <img src="https://ui-avatars.com/api/?background=random" class="rounded-full" width="50px"
                            height="50px" alt=""> -->
                </div>
            </div>
            <hr class="my-2">
            @yield('content')
        </div>
    </div>

    @include('layouts.script')
</body>

</html>
