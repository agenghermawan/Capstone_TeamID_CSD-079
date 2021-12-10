@extends('frontend.component.layout')

@section('contentFrontEnd')
    <main>
        <div class="appointment-container">
            <div class="header-appointment">
                <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80"
                    alt="">
                <div class="header-appointment-text">
                    <h1>Dr.Frankstein</h1>
                    <p>Kedokteran Jiwa dan Psikiatri</p>
                </div>
            </div>
            <div class="profile">
                <h2>Profil Dokter</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo perspiciatis temporibus voluptatem
                    accusantium distinctio. Eius, optio ipsum corrupti magni et fugiat quo praesentium vitae pariatur ad
                    totam nam cumque explicabo! <br><br>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis ex non suscipit vitae sit perferendis nam
                    ipsum id vel. Necessitatibus quo sit veniam facilis, mollitia omnis delectus aliquam repellendus
                    quisquam?
                </p>
            </div>
            <div class="location">
                <h2>Lokasi & Jadwal Praktik</h2>
                <div class="location-form">
                    <div class="hospital">
                        <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aG9zcGl0YWx8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60"
                            alt="">
                        <div class="hospital-text">
                            <h3>7AM PM Covid Test 19 Klinik Cipinang Bali</h3>
                        </div>
                    </div>
                    <select name="" id="" class="form-control">
                        <option value="">Sabtu, 11 Desember 2021</option>
                        <option value="">Sabtu, 11 Desember 2021</option>
                        <option value="">Sabtu, 11 Desember 2021</option>
                        <option value="">Sabtu, 11 Desember 2021</option>
                    </select>
                </div>
            </div>
            <div class="experience">
                <h2>Pengalaman Praktik</h2>
                <p>Dokter Jiwa dan Psikiatri - 7AM PM Covid Test 19 Klinik Cipinang Bali</p>
            </div>
            <div class="history">
                <h2>Riwayat Pendidikan</h2>
                <p>Sp.A - Dokter Spesialis Jiwa dan Psikiatri - Universitas Indonesia</p>
            </div>
        </div>
        <aside>
            <button>Buat Janji Konsultasi</button>
            <div class="skill">
                <h2>Tindakan Medis</h2>
                <ul>
                    <li>Konsultasi Psikologi</li>
                    <li>Konsultasi Psikologi</li>
                    <li>Konsultasi Psikologi</li>
                    <li>Konsultasi Psikologi</li>
                    <li>Konsultasi Psikologi</li>
                    <li>Konsultasi Psikologi</li>
                    <li>Konsultasi Psikologi</li>
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
            margin-top: 2.5%;
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
            margin-left: 10%;
        }

        .skill ul li {
            width: 100%;
            height: auto;
            font-size: 1.5em;
            margin-bottom: 5%;
        }

    </style>
@endsection
