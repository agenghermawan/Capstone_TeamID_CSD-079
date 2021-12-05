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
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <style>


    </style>
</head>

<body style="background-color: #f5f6fC">
    <div class="relative min-h-screen flex" style="font-family: 'Inter', sans-serif;">
        <div class="sidebar text-blue-300 w-64 h-100 text-center align-center py-10 hidden md:inline-block "
            style="background-color: #273264; border-radius:0 100px 0 0">
            <div class="icon flex justify-center mt-5">
                <img src="{{ asset('icon/icon.png') }}" class="w-20" alt="">
            </div>
            <nav class="grid gap-5 text-left p-5 text-base">
                <a href="{{ route('dashboard') }}" class="mt-10 ">
                    <i class="fas fa-briefcase-medical mr-2"></i>
                    Dashboard </a>
                <a href="{{ route('dokter.index') }}"> <i class="fas fa-hospital-user mr-2"></i> Dokter </a>
                <a href="{{ route('rumahSakit.index') }}"> <i class="fas fa-hospital mr-2"></i> Rumah Sakit </a>
                <a href="{{ route('pengguna.index') }}"><i class="fas fa-user mr-2"></i> Pengguna </a>
                <a href=""><i class="fas fa-handshake mr-2"></i> Janji Temu </a>
                <a href="{{ route('artikel.index') }}"><i class="fas fa-newspaper mr-2"></i> Artikel </a>
                <a href="{{ route('obat.index') }}"><i class="fas fa-capsules mr-2"></i> Obat </a>
                <a href="{{ route('penyakit.index') }}"><i class="fas fa-procedures mr-2"></i> Penyakit </a>
                <a href="{{ route('backendGetDataCovid') }}"><i class="fas fa-virus mr-2"></i> Covid Info </a>
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
