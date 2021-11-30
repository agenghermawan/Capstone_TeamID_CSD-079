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

    </style>


@endsection
@section('content')
    <div class="h1 my-5"> Daftar Data Rumah Sakit </div>
    <a href="{{ route('rumahSakit.create') }}" class="bg-blue-700 p-3 text-white rounded mb-5"> Tambahkan Data Rumah
        Sakit</a>

    <div class="w-full mt-5">
        <table id="myTable" class="w-full">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Views</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white">
                    <td>Intro to CSS</td>
                    <td>Adam</td>
                    <td>858</td>
                </tr>
                <tr class="bg-white">
                    <td>Intro to CSS</td>
                    <td>Adam</td>
                    <td>858</td>
                </tr>
            </tbody>
    </div>

@endsection
