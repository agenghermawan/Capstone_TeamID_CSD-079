@extends('frontend.component.layout')

@section('contentFrontEnd')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <input type="text" class="form-control p-3 rounded-lg shadow fs-3" placeholder="Silahkan cari informasi Penyakit yang anda butuhkan ... "> <i class="bi bi-search"></i>
            </div>
            <div class="col-md-2">
                <button class="form-control p-3 fs-3 rounded-lg shadow"> Cari </button>
            </div>
        </div>
        <hr class="my-5">
        <div class="row mt-5">
            <div class="col-md-8">
                <div class="col-md-3">
                    <div class="border text-center p-3">
                        <h2 class="nav-link"> Sakit Mata </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-5">
                    <h2> Tanya tentang kesehatan ?</h2>
                    <a class="btn btn-info rounded p-3 fs-3 shadow rounded-lg"> Tanya Sekarang </a>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('opsionalCss')
    <style>
        .searchbar {
            padding: 5%;
            padding-bottom: 0;
            display: flex;
        }

        .drugs-page-container {
            padding: 5%;
            padding-top: 2.5%;
            color: #2c4964;
        }

        .drugs-page-container h2 {
            font-size: 3em;
            margin-bottom: 2.5%;
        }

        .searchbar input {
            width: 95%;
            height: 50px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            padding-left: 15px;
        }

        .searchbar button {
            width: 5%;
            height: 50px;
        }

        .searchbar button {
            width: 5%;
            height: 50px;
        }

        .card-drugs-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: left;
        }

        .card-drugs {
            width: 25%;
            margin: 0 1.5%;
            height: auto;
            min-height: 75px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            padding: 1.5% 0;
            margin-bottom: 3%;
            color: #2c4964;
        }

        .card-drugs img {
            max-width: 100%;
            width: 25%;
            height: 64px;
        }

        .card-drugs h3 {
            font-size: 1.5em;
        }

        .card-drugs:hover {
            box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.2);
        }

    </style>
@endsection
