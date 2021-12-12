@extends('frontend.component.layout')

@section('contentFrontEnd')
    <main>
        <div class="searchbar">
            <input type="text" placeholder="Obat Batuk ata vitamin">
            <button>Cari</button>
        </div>
        <div class="drugs-page-container">
            <h2>Obat Flu dan Batuk</h2>

            <div class="card-drugs-container">
                @foreach($data as $item)
                    <a href="{{ route('obatShow_frontend',$item->id) }}" class="card-drugs">
                        <img src="{{Storage::url($item->photoObat)}}" />
                        <h3>{{$item->namaObat}}</h3>
                        <p>{{$item->bentukObat}}</p>
                        <h3>{{$item->golongan}}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </main>
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

        .card-drugs-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: left;
        }

        .card-drugs {
            width: 22%;
            margin: 0 1.5%;
            height: auto;
            min-height: 75px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            padding: 1.5% 0;
            margin-bottom: 3%;
            padding: 3%;
            color: #2c4964;
        }

        .card-drugs img {
            max-width: 100%;
            width: 50%;
            height: auto;
        }

        .card-drugs h3 {
            font-size: 1.5em;
            margin: 5% 0;
            text-align: center;
        }

        .card-drugs p {
            margin: 5% 0 10%;
        }

        .card-drugs button {
            width: 100%;
            height: auto;
            padding: 3% 0;
            color: #2c4964;
            background-color: #fff;
            border: 1px solid #2c4964;
            border-radius: 5px;
            margin-top: 10%;
            cursor: pointer;
        }

        .card-drugs button:hover {
            background-color: #2c4964;
            color: #fff;
            /* box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.2); */
        }

    </style>
@endsection
