<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('layouts.style')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/tmrao508v4qd0k76bb3ztge1vkvrlu25nec5c1fzm5tftz7y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
                <a href="{{ route('artikel.index') }}"> Artikel </a>
            </nav>
        </div>
        <div class="content w-full rounded-lg mx-5 my-5 py-10 px-10" style="background-color: #f1f5f8">
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
