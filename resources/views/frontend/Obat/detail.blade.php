@extends('frontend.component.layout')

@section('contentFrontEnd')
    <main>

        <img src="{{Storage::url($data->photoObat)}}" alt="">
        <div class="detail-drugs-container">
            <h1>{{$data -> namaObat}}</h1>
            <p><b>{{$data->bentukObat}}</b></p>
            <p>*termasuk obat {{$data->golongan}}</p>

            <div class="info category">
                <h2>Kategori</h2>
                <p>{{$data->kategori}}</p>
            </div>

            <div class="info description">
                <h2>Deskripsi</h2>
                <p>{{$data->deskripsi}}</p>
            </div>

            <div class="info indication">
                <h2>Manfaat</h2>
                <p>{{$data->manfaat}}</p>
            </div>

            <div class="info composition">
                <h2>Komposisi</h2>
                <p>{{$data->golongan}}</p>
            </div>

            <div class="info dose">
                <h2>Dosis dan aturan</h2>
                <p>{{$data->dosisdanaturan}}</p>
            </div>

            <div class="info how-to-use">
                <h2>Efek Samping</h2>
                <p>{{$data->efekSamping}}</p>
            </div>

            <div class="info manufacture">
                <h2>Manufaktur</h2>
                <p>{{$data->merkDagang}}</p>
            </div>

            <div class="info registration-number">
                <h2>Interaksi</h2>
                <p>{{$data->interaksi}}</p>
            </div>
        </div>
        <aside>
            <h1>Rekomendasi Obat lain</h1>
            <div class="card-recommendation-container">
                @foreach($dataRekomendasi as $item)
                    <div class="card-recommendation">
                        <img src="{{Storage::url($item->photo)}}" alt="">
                        <h2>{{$item->nama}}</h2>
                            <p>Rp.200000</p>
                        <button>Detail</button>
                    </div>
                @endforeach
            </div>
        </aside>
    </main>
@endsection

@section('opsionalCss')
    <style>
        main {
            padding: 5%;
            display: flex;
        }

        main img {
            max-width: 100%;
            width: 20%;
            height: fit-content;
            margin: 0 5%;
        }

        .detail-drugs-container {
            width: 45%;
            height: auto;
            color: #2c4964;
        }

        .detail-drugs-container>h1 {
            font-size: 3em;
            margin-bottom: 5%;
        }

        .detail-drugs-container>p:first-of-type {
            font-size: 2em;
            margin-bottom: 1%;
        }

        .detail-drugs-container>p:last-of-type {
            margin-bottom: 10%;
        }

        .info {
            margin: 2.5% 0;
            padding-bottom: 2.5%;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        }

        .info h2 {
            font-size: 2em;
            margin-bottom: 2%;
        }

        .info p {
            font-size: 1.5em;
            line-height: 175%;
        }

        aside {
            width: 25%;
            height: auto;
            padding: 0 2.5%;
        }

        aside h1 {
            text-align: center;
            color: #2c4964;
            margin-bottom: 5%;
        }

        .card-recommendation-container {
            display: flex;
            flex-direction: column;
        }

        .card-recommendation {
            width: 90%;
            height: auto;
            box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.2);
            /* border-bottom: 1px solid rgba(0, 0, 0, 0.2); */
            color: #2c4964;
            padding: 10% 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 5%;
            border-radius: 5px;
        }

        .card-recommendation>img {
            width: 40%;
        }

        .card-recommendation>h2 {
            margin: 5% 0;
        }

        .card-recommendation p {
            margin-bottom: 5%;
        }

        .card-recommendation>button {
            width: 60%;
            padding: 2% 0;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 2.5px;
            cursor: pointer;
        }

        .card-recommendation>button:hover {
            background-color: #2c4964;
            color: #fff;
        }

    </style>
@endsection
