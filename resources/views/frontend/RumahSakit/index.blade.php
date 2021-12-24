@extends('frontend.component.layout')

@section('contentFrontEnd')
    <main>
        <div class="header-hospital-page">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('image/4855148.jpg')}}" class="rounded shadow" width="100%" alt="">
                </div>
                <div class="col-md-6">
                    <h1 style="font-size: 48px">Kunjungan ke Rumah Sakit Lebih Mudah</h1>
                    <p style="font-size:24px">Cari rumah sakit dan buat janji dengan langkah mudah</p>
                    <form action="{{route('rumahSakit_frontend')}}" style="width: 100%" class="d-flex mt-5">
                        <input type="text" class="form-control shadow fs-3 p-4" name="searchPoliklinik" placeholder="Silahkan cari Poliklinik yang anda butuhkan ....">
                        <button class="btn btn-primary rounded" type="submit"> <i class="fas fa-search fa-3x"></i> </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="hospital-page-container">
            <h2>Telusuri Berdasarkan Poliklinik</h2>
            <div class="card-hospital-container">
                @foreach($data as $item)
                    <div class="card-hospital">
                        <img src=""/>
                        <h3>{{$item -> nama}}</h3>
                        <p>{{ Illuminate\Support\Str::limit($item->deskripsi, 60, '...') }}</p>
                        <a href="{{ route('rumahSakit_show_frontend', $item->nama) }}" >Lihat Rumah Sakit</a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection


@section('opsionalCss')
    <style>
        .header-hospital-page {
            padding: 5% 5% 2.5% 5%;
            background-color: #f1f7fc;
            color: #2c4964;
        }

        .header-hospital-page>h1 {
            font-size: 4em;
            margin-bottom: 2%;
        }

        .header-hospital-page>p {
            font-size: 1.5em;
            margin-bottom: 2.5%;
        }

        .searchbar {
            display: flex;
        }

        .hospital-page-container {
            padding: 5%;
            padding-top: 2.5%;
            color: #2c4964;
        }

        .hospital-page-container h2 {
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

        .card-hospital-container {
            display: flex;
            flex-wrap: wrap;
        }

        .card-hospital {
            width: 22%;
            margin: 0 1.5%;
            /* height: auto; */
            height: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 75px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding: 1.5% 0;
            margin-bottom: 3%;
            color: #2c4964;
            padding: 2%;
        }

        .card-hospital h3 {
            font-size: 2em;
            margin-bottom: 5%;
        }

        .card-hospital p {
            font-size: 1.5em;
            text-align: justify;
            line-height: 200%;
            margin-bottom: 5%;
        }

        .card-hospital a {
            display: flex;
            justify-content: center;
            text-align: center;
            background-color: #2c4964;
            color: #fff;
            border: none;
            width: 100%;
            padding: 4% 5%;
            border-radius: 5px;
            cursor: pointer;
        }

        .card-hospital a:hover {
            box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
        }

        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
            .header-hospital-page {
                padding-bottom: 5%;
            }

            .header-hospital-page>h1 {
                font-size: 3em;
                margin: 5% 0;
            }

            .header-hospital-page>p {
                margin-bottom: 7.5%;
            }

            .searchbar input {
                width: 85%;
            }

            .searchbar button {
                width: 15%;
            }

            .hospital-page-container h2 {
                font-size: 1.6em;
                margin: 5% 0;
            }

            .card-hospital {
                width: 47%;
            }

            .card-hospital h3 {
                font-size: 1.2em;
            }
        }

        /* Mobile landscape */
        @media only screen and (min-width: 481px) and (max-width: 767px) {
            .header-hospital-page {
                padding-bottom: 5%;
            }

            .header-hospital-page>h1 {
                font-size: 3em;
            }

            .header-hospital-page>p {
                margin-bottom: 5%;
            }

            .searchbar input {
                width: 90%;
            }

            .searchbar button {
                width: 10%;
            }

            .hospital-page-container h2 {
                font-size: 2em;
            }

            .card-hospital {
                width: 47%;
            }
        }

        /* tablet ipad (potrait) */
        @media (min-width: 768px) and (max-width: 1023px) {
            .header-hospital-page>h1 {
                font-size: 3em;
            }

            .searchbar input {
                width: 90%;
            }

            .searchbar button {
                width: 10%;
            }

            .hospital-page-container h2 {
                font-size: 2em;
            }

            .card-hospital {
                width: 30%;
                margin: 0 1.65%;
                margin-bottom: 3%;
            }
        }

    </style>
@endsection
