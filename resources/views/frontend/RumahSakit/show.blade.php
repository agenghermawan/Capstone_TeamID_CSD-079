@extends('frontend.component.layout')

@section('contentFrontEnd')
    <main>
        <div class="searchbar">
            <input type="text" placeholder="Obat Batuk ata vitamin">
            <button>Cari</button>
        </div>
        <div class="hospital-page-container">
            <h2>Laboratorium</h2>
            <div class="card-hospital-container">
                <a href="{{ route('rumahSakit_detail_frontend', 1) }}" class="card-hospital">
                    <img
                        src="https://images.unsplash.com/photo-1551076805-e1869033e561?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aG9zcGl0YWx8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60" />
                    <div class="card-hospital-content">
                        <h3>7AM PM Covid Test 19 Klinik Cipinang Bali</h3>
                        <h4>Klinik</h4>
                        <p>Tanjung Priok, Jakarta Utara</p>
                    </div>
                </a>
                <a href="{{ route('rumahSakit_detail_frontend', 1) }}" class="card-hospital">
                    <img
                        src="https://images.unsplash.com/photo-1551076805-e1869033e561?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aG9zcGl0YWx8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60" />
                    <div class="card-hospital-content">
                        <h3>7AM PM Covid Test 19 Klinik Cipinang Bali</h3>
                        <h4>Klinik</h4>
                        <p>Tanjung Priok, Jakarta Utara</p>
                    </div>
                </a>
                <a href="{{ route('rumahSakit_detail_frontend', 1) }}" class="card-hospital">
                    <img
                        src="https://images.unsplash.com/photo-1551076805-e1869033e561?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aG9zcGl0YWx8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60" />
                    <div class="card-hospital-content">
                        <h3>7AM PM Covid Test 19 Klinik Cipinang Bali</h3>
                        <h4>Klinik</h4>
                        <p>Tanjung Priok, Jakarta Utara</p>
                    </div>
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
            width: 47%;
            margin: 0 1.5%;
            height: 175px;
            min-height: 75px;
            display: flex;
            justify-content: center;
            /* align-items: center; */
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            /* padding: 1.5% 0; */
            margin-bottom: 3%;
            /* padding: 3%; */
            color: #2c4964;
        }

        .card-hospital img {
            max-width: 100%;
            width: 40%;
            height: auto;
            object-fit: cover;
        }

        .card-hospital-content {
            padding: 5%;
        }

        .card-hospital-content>h3 {
            font-size: 1.5em;
            margin: 5% 0;
        }

        .card-hospital-content>h4 {
            margin: 5% 0 10%;
        }

        .card-hospital button {
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

        .card-hospital button:hover {
            background-color: #2c4964;
            color: #fff;
            /* box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.2); */
        }


        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
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
                width: 100%;
                margin-bottom: 5%;
            }

            .card-hospital img {
                height: 125px;
            }

            .card-hospital h3 {
                font-size: 1.2em;
            }
        }

        /* Mobile landscape */
        @media only screen and (min-width: 481px) and (max-width: 767px) {
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

            .card-hospital img {
                height: 150px;
            }
        }

        /* tablet ipad (potrait) */
        @media (min-width: 768px) and (max-width: 1023px) {
            .searchbar input {
                width: 90%;
            }

            .searchbar button {
                width: 10%;
            }

            .hospital-page-container h2 {
                font-size: 2em;
            }

            .card-hospital img {
                height: 150px;
            }
        }

    </style>
@endsection
