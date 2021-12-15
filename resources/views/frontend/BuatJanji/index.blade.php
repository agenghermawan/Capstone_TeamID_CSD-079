@extends('frontend.component.layout')

@section('contentFrontEnd')
    <main>
        <div class="appointment-container">
            <div class="header-appointment">
                <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80"
                    alt="">
                <div class="header-appointment-text">
                    <h1>{{$data->fullname}}</h1>
                    <p>{{$data->sebagaiDokter}}</p>
                </div>
            </div>
            <div class="profile">
                <h2>Profil Dokter</h2>
                <p> {!! $data->deskripsi !!}
                </p>
            </div>
            <div class="location">
                <h2>Lokasi & Jadwal Praktik</h2>
                <div class="location-form">
                    <div class="hospital">
                        <img src="{{Storage::url($rumahsakit->photo)}}"
                            alt="">
                        <div class="hospital-text">
                            <h3>{{$rumahsakit->nama}}</h3>
                            <h4>{{$rumahsakit->alamat}}</h4>
                            <p> {{$rumahsakit->kota}} | {{$rumahsakit->provinsi}} | {{$rumahsakit->kodepos}}</p>
                        </div>
                    </div>

                        <h4 @class(['pt-5'])> Pilih Jadwal </h4>
                    <form action="{{route('create.janji')}}">
                        <div class="input-group my-3">
                            <span class="input-group-text" id="basic-addon1"> <i class="fas fa-calendar-check"></i> </span>
                            <input type="date" class="form-control p-2" name="tanggal_janji" style="height: 44px" placeholder="tanggal_janji" aria-label="tanggal_janji" aria-describedby="basic-addon1">
                        </div>
                        <div class=" my-3">
                            <h4> Pilih Jam untuk janji bersama dokter anda</h4>
                            <select name="jam_janji" id="" class="form-control" required style="height: 44px">
                                <option value="">Pilih Jam</option>
                                <option value="{{$rumahsakit->jamOperasional}}">{{$rumahsakit->jamOperasional}}</option>
                            </select>
                        </div>
                        <input type="hidden" name="dokter_id" value="{{$data->id}}">
                        <input type="hidden" name="rumahsakit_id" value="{{$rumahsakit->id}}">
                        <input type="hidden" name="poliklinik_id" value="{{$poliklinik->id}}">
{{--                        <button @class(['btn btn-primary','p-3','rounded-3']) href="{{route('create.janji',['$data->id','$rumahsakit->id'])}}" > Buat Janji Sekarang </button>--}}
                        <button @class(['btn btn-primary','p-3','rounded-3']) type="submit" > Buat Janji Sekarang </button>
                    </form>

                </div>
            </div>
            <div class="experience">
                <h2>Pengalaman Praktik</h2>
                @if($data->pengalamanPraktik == null)
                    <p> Belum mempunyai Pengalaman Praktik</p>
                @else
                    @foreach($data->pengalamanPraktik as $item)
                     <p>{{$item['pengalamanPraktik']}}</p>
                    @endforeach
                @endif
            </div>
            <div class="history">
                <h2>Riwayat Pendidikan</h2>
                @if($data->riwayatPendidikan == null)
                    <p> Tidak mempunyai Riwayat Pendidikan</p>
                @else
                    @foreach($data->riwayatPendidikan as $item)
                        <p>{{$item['riwayatPendidikan']}}</p>
                    @endforeach
                @endif
            </div>
        </div>
        <aside>
            <button>Buat Janji Konsultasi</button>
            <div class="skill">
                <h2>Tindakan Medis</h2>
                <ul>
                    @foreach($poliklinik->tindakanmedis as $tindakanmedis)
                        <li>{{$tindakanmedis['tindakanmedis']}}</li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </main>
@endsection

@section('opsionalCss')
    <style>
        main {
            padding: 5%;
            padding-top: 2.5%;
            display: flex;
        }

        .appointment-container {
            width: 75%;
            margin-right: 2.5%;
            height: auto;
        }

        .header-appointment {
            display: flex;
            align-items: center;
            margin-bottom: 5%;
        }

        .header-appointment img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10000px;
        }

        .header-appointment-text {
            margin-left: 2.5%;
            color: #2c4964;
        }

        .header-appointment-text>h1 {
            font-size: 3em;
        }

        .header-appointment-text>p {
            font-size: 1.5em;
        }

        .profile {
            margin-bottom: 2.5%;
            color: #2c4964;
        }

        .profile>h2 {
            font-size: 2em;
            margin-bottom: 1%;
        }

        .profile>p {
            font-size: 1.5em;
            line-height: 175%;
        }

        .location {
            margin-bottom: 2.5%;
            color: #2c4964;
        }

        .location>h2 {
            font-size: 2em;
            margin-bottom: 1%;
        }

        .location-form {
            border: 1px solid rgba(0, 0, 0, 0.2);
            padding: 1.5%;
            border-radius: 10px;
        }

        .hospital {
            display: flex;
        }

        .hospital img {
            width: 20%;
            height: auto;
        }

        .hospital-text {
            padding: 2%;
        }

        .hospital-text>h3 {
            font-size: 1.5em;
        }

        .location-form select {
            width: 100%;
            height: 50px;
            border-radius: 5px;
        }

        .experience {
            margin-bottom: 2.5%;
            color: #2c4964;
        }

        .history {
            color: #2c4964;
        }

        .experience>p,
        .history>p {
            border: 1px solid rgba(0, 0, 0, 0.2);
            padding: 2%;
            border-radius: 5px;
            font-size: 1.25em;
        }

        .experience>h2,
        .history>h2 {
            font-size: 2em;
            margin-bottom: 1%;
        }

        aside {
            width: 22.5%;
            height: auto;
        }

        aside>button {
            width: 100%;
            height: 40px;
            cursor: pointer;
            background-color: #2c4964;
            color: #fff;
            border-radius: 5px;
            border: none;
            margin-bottom: 5%;
        }

        .skill {
            width: 100%;
            height: auto;
            padding: 5%;
            border-radius: 10px;
            background-color: #e2e8f0;
            color: #2c4964;
        }

        .skill>h2 {
            font-size: 2em;
            margin-bottom: 5%;
        }

        .skill ul {
            display: flex;
            flex-wrap: wrap;
        }

        .skill ul li {
            width: 100%;
            height: auto;
            font-size: 1.5em;
            margin-bottom: 5%;
        }

    </style>
@endsection
