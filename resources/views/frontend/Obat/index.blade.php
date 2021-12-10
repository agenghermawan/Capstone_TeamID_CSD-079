@extends('frontend.component.layout')

@section('contentFrontEnd')
    <main>
        <div class="searchbar">
            <input type="text" placeholder="Obat Batuk ata vitamin">
            <button>Cari</button>
        </div>
        <div class="drugs-page-container">
            <h2>Obat dan Vitamin Berdasarkan Kategori</h2>

            <div class="card-drugs-container">
                <a href="{{ route('obatKategori_frontend') }}" class="card-drugs">
                    <img
                        src="https://img.icons8.com/external-itim2101-blue-itim2101/64/000000/external-drug-medical-and-health-itim2101-blue-itim2101.png" />
                    <h3>Flu dan Batuk</h3>
                </a>
                <a class="card-drugs">
                    <img
                        src="https://img.icons8.com/external-itim2101-blue-itim2101/64/000000/external-drug-medical-and-health-itim2101-blue-itim2101.png" />
                    <h3>Flu dan Batuk</h3>
                </a>
                <a class="card-drugs">
                    <img
                        src="https://img.icons8.com/external-itim2101-blue-itim2101/64/000000/external-drug-medical-and-health-itim2101-blue-itim2101.png" />
                    <h3>Flu dan Batuk</h3>
                </a>
                <a class="card-drugs">
                    <img
                        src="https://img.icons8.com/external-itim2101-blue-itim2101/64/000000/external-drug-medical-and-health-itim2101-blue-itim2101.png" />
                    <h3>Flu dan Batuk</h3>
                </a>
                <a class="card-drugs">
                    <img
                        src="https://img.icons8.com/external-itim2101-blue-itim2101/64/000000/external-drug-medical-and-health-itim2101-blue-itim2101.png" />
                    <h3>Flu dan Batuk</h3>
                </a>
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

        .searchbar button {
            width: 5%;
            height: 50px;
        }

        .card-drugs-container {
            display: flex;
            flex-wrap: wrap;
        }

        .card-drugs {
            width: 22%;
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
            height: auto;
        }

        .card-drugs h3 {
            font-size: 1.5em;
        }

        .card-drugs:hover {
            box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.2);
        }

    </style>
@endsection
