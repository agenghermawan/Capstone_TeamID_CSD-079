@extends('frontend.component.layout')


@section('contentFrontEnd')
    <main>
        <div class="covid-container">
            <h1>Data Covid 19 di Indonesia</h1>
            <p>Update 07 Dec 2021 16:00</p>
            <div class="covid-card-container">
            @foreach($dataIndonesia as $item)
                <div class="covid-card">
                    <div class="covid-card-number">
                        <h2> {{ $item->positif }}</h2>
                        <p>(+261)</p>
                    </div>
                    <h3>KASUS KONFIRMASI</h3>
                </div>
                <div class="covid-card">
                    <div class="covid-card-number">
                        <h2>{{$item->sembuh}}</h2>
                        <p>(96,5%)</p>
                    </div>
                    <h3>KASUS SEMBUH</h3>
                </div>
                <div class="covid-card">
                    <div class="covid-card-number">
                        <h2>{{$item->meninggal}}</h2>
                        <p>(3,4%)</p>
                    </div>
                    <h3>KASUS MENINGGAL</h3>
                </div>
                <div class="covid-card">
                    <div class="covid-card-number">
                        <h2>{{$item->dirawat}}</h2>
                        <p>(0,1%)</p>
                    </div>
                    <h3>KASUS AKTIF</h3>
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

    </style>
@endsection
