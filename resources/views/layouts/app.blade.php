<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <style>
        @yield('css')
    </style>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    @extends('layouts.script')
</head>

<body class="font-sans antialiased" style="background-color: #1c3faa">
    <div class="relative min-h-screen flex bg-gradient-to-bl from-blue-700 to-blue-500" style="font-family: Poppins">
        <div
            class="sidebar text-white w-64 h-100 text-center align-center py-10 bg-gradient-to-bl from-blue-700 to-blue-500 ">
            <div class="icon flex justify-center ">
                <img src="{{ asset('icon/icon.png') }}" class="w-20" alt="">
            </div>
            <nav class="grid gap-10 text-left p-10">
                <a href="{{ route('dashboard') }}" class="mt-10"> Dashboard </a>
                <a href=""> Dokter </a>
                <a href="{{ route('rumahSakit.index') }}"> Rumah Sakit </a>
                <a href=""> Pasien </a>
                <a href=""> Janji Temu </a>
            </nav>
        </div>
        <div class="content  w-full rounded-lg mx-5 my-5 py-10 px-10" style="background-color: #f1f5f8">
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
</body>

</html>
