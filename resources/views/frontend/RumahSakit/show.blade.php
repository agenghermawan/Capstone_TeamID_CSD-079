@extends('frontend.component.layout')

@section('contentFrontEnd')
    <main>
        <div class="searchbar">
            <form action="{{route('rumahSakit_show_frontend',$nama)}}" style="width: 100%" class="d-flex">
                <input type="text" class="form-control shadow fs-3" name="searchRumahSakit" placeholder="Silahkan cari Rumah Sakit Terdekat Anda (Kota , Alamat , Provinsi)   ....">
                <button class="btn btn-primary rounded" type="submit"> <i class="fas fa-search fa-3x"></i> </button>
            </form>
        </div>

        <div class="hospital-page-container">
            <h2>Telusuri Rumah Sakit</h2>
                    <div class="row ">
                        @foreach($data as $item)
                        <div class="col-md-3 mb-4">
                            <div class="card shadow rounded" style="width: 100%;">
                                <img
                                    src="{{Storage::url($item->photo)}}" class="rounded" style="border-radius:35px" height="300px" />
                                <div class="card-body">
                                    <h5 class="card-title fs-2">{{$item->nama}}</h5>
                                    <p class="fs-3"> {{$nama}}</p>
                                    <p class="card-text fs-4">{{ \Illuminate\Support\Str::limit($item->tentang, 100, '...') }}</p>
                                    <a href="{{ route('rumahSakit_detail_frontend', [$item->id, $nama]) }}" class="btn btn-primary rounded shadow px-4 fs-2 py-2">Detail</a>
                                </div>
                            </div>
                        </div>
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
            justify-content: left;
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
            padding-left: 5%;
            padding-top: 2%;
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
