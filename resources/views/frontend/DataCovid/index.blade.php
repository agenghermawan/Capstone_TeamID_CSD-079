@extends('frontend.component.layout')


@section('contentFrontEnd')
    <main>
        <div class="covid-container">
            <h1>Data Covid 19 di Indonesia</h1>
            <p>Update 21 Dec 2021 16:00</p>
            <div class="covid-card-container">
            @foreach($dataIndonesia as $item)
                <div class="row ">
                    <div class="col-md-3 p-5 text-dark card opacity-50">
                        <div class="covid-card-number">
                            <h2> {{ $item->positif }}</h2>
                        </div>
                        <h3>KASUS KONFIRMASI</h3>
                    </div>
                    <div class="col-md-3  card p-5 text-dark opacity-50">
                        <div class="covid-card-number">
                            <h2>{{$item->sembuh}}</h2>
                        </div>
                        <h3>KASUS SEMBUH</h3>
                    </div>
                    <div class="col-md-3 card p-5 text-dark opacity-50">
                        <div class="covid-card-number">
                            <h2>{{$item->meninggal}}</h2>
                        </div>
                        <h3>KASUS MENINGGAL</h3>
                    </div>
                    <div class="col-md-3 card text-dark p-5 opacity-50">
                        <div class="covid-card-number">
                            <h2>{{$item->dirawat}}</h2>
                        </div>
                        <h3>KASUS AKTIF</h3>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </main>
@endsection

@section('opsionalCss')
    <style>
        main {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url(https://images.unsplash.com/photo-1592671963996-0b4616e9f042?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1738&q=80);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            color: #f1f7fc;
        }

        .covid-container {
            padding: 5%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 90vh;
        }

        .covid-container>h1 {
            text-align: center;
            font-size: 4em;
        }

        .covid-container>p {
            text-align: center;
            font-size: 1.5em;
        }

        .covid-card-container {
            width: 80%;
            height: auto;
            margin-top: 5%;
            display: flex;
            justify-content: space-evenly;
        }

        .covid-card {
            width: 22%;
            height: 150px;
            padding: 3%;
            color: #2c4964;
            background-color: #f1f7fc;
            border-radius: 10px;
        }

        .covid-card-number {
            display: flex;
        }

        .covid-card-number>h2 {
            font-size: 3em;
            margin-right: 2%;
        }

        .covid-card-number>p {
            margin-bottom: 5%;
            font-size: 1.5em;
        }

        .covid-card>h3 {
            font-size: 1.5em;
        }

        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
            .covid-container > h1 {
                font-size: 3em;
                margin-top: 10%;
            }

            .covid-card-container {
                flex-direction: column;
            }

            .covid-card {
                width: 100%;
                margin-bottom: 5%;
            }
        }

        /* Mobile landscape */
        @media only screen and (min-width: 481px) and (max-width: 767px) {
            .covid-container > h1 {
                font-size: 3em;
                margin-top: 10%;
            }

            .covid-card-container {
                flex-direction: column;
            }

            .covid-card {
                width: 100%;
                margin-bottom: 5%;
            }
        }

        /* tablet ipad (potrait) */
        @media (min-width: 768px) and (max-width: 1023px) {
            .covid-container > h1 {
                font-size: 3em;
                margin-top: 10%;
            }

            .covid-card-container {
                flex-wrap: wrap;
            }

            .covid-card {
                width: 47%;
                margin: 0 1.5%;
                margin-bottom: 2.5%;
            }
        }
    </style>
@endsection
