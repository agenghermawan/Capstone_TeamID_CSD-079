@extends('frontend.component.layout')


@section('contentFrontEnd')
    <main>
        <div class="container">
            <div class="detail-hospital-container">
                <h1>7AM PM Covid Test 19 Klinik Cipinang Bali</h1>
                <div class="detail-hospital-content">
                    <div class="banner">
                        <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aG9zcGl0YWx8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60"
                            alt="">
                        <div class="address">
                            <h2>Alamat</h2>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15805.028483636099!2d112.62265473604201!3d-7.9723570915617135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629041a87b3e7%3A0xee3005a907e7bb08!2sRSUD%20Dr.%20SAIFUL%20ANWAR%20MALANG!5e0!3m2!1sen!2sid!4v1639059305028!5m2!1sen!2sid"
                                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <p>No.2, Jl. Jaksa Agung Suprapto, Klojen, Kec. Klojen, Kota Malang, Jawa Timur</p>
                        </div>
                    </div>
                    <div class="info">
                        <div class="about">
                            <h2>Tentang</h2>
                            <p>Rumah Sakit Umum Daerah Dr Saiful Anwar adalah Rumah Sakit Umum Daerah Kelas A milik
                                Pemerintah
                                Daerah Provinsi Jawa Timur yang sebelumnya bernama Rumah Sakit Celaket dan berubah menjadi
                                Rumah
                                Sakit Saiful Anwar tahun 1979. Memiliki Visi menjadi Rumah Sakit berstandar kelas dunia
                                pilihan
                                masyarakat. Dengan Misi terwujudnya pelayanan kesehatan dan pendidikan berstandar
                                internasional
                                dengan mengutamakan keselamatan pasien dan berfokus pada kepuasan pelanggan.</p>
                        </div>
                        <div class="facility">
                            <h2>Fasilitas</h2>
                            <ul>
                                <li>Instalasi Gizi</li>
                                <li>Unit Perawatan Intensif</li>
                                <li>Farmasi</li>
                                <li>Unit Gawat Darurat (UGD)</li>
                                <li>Instalasi Laboratorium</li>
                                <li>Instalasi Rawat Inap</li>
                                <li>Instalasi Rawat Jalan</li>
                            </ul>
                        </div>
                    </div>
                    <div class="employee">
                        <div class="polyclinic">
                            <h2>Poliklinik</h2>
                            <div class="card-polyclinic-container">
                                <div class="card-polyclinic">
                                    <img src="https://halodoc-sumba.s3-ap-southeast-1.amazonaws.com/Bintan_Department/fca47837-6879-4926-b554-dba9536c6f06.png"
                                        alt="">
                                    <div class="card-polyclinic-text">
                                        <h3>Anak</h3>
                                        <p>16 Tindakan Medis</p>
                                    </div>
                                </div>
                                <div class="card-polyclinic">
                                    <img src="https://halodoc-sumba.s3-ap-southeast-1.amazonaws.com/Bintan_Department/fca47837-6879-4926-b554-dba9536c6f06.png"
                                        alt="">
                                    <div class="card-polyclinic-text">
                                        <h3>Anak</h3>
                                        <p>16 Tindakan Medis</p>
                                    </div>
                                </div>
                                <div class="card-polyclinic">
                                    <img src="https://halodoc-sumba.s3-ap-southeast-1.amazonaws.com/Bintan_Department/fca47837-6879-4926-b554-dba9536c6f06.png"
                                        alt="">
                                    <div class="card-polyclinic-text">
                                        <h3>Anak</h3>
                                        <p>16 Tindakan Medis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="doctor">
                            <h2>Dokter</h2>
                            <div class="card-doctor-container">
                                <div class="card-doctor">
                                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80"
                                        alt="">
                                    <div class="card-doctor-body">
                                        <div class="card-doctor-text">
                                            <h3>Dr. Frankstein</h3>
                                            <p>Kedokteran Jiwa dan Psikiatri</p>
                                        </div>
                                        <a href="{{ route('buatjanji_frontend') }}">Buat Janji</a>
                                    </div>
                                </div>
                                <div class="card-doctor">
                                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80"
                                        alt="">
                                    <div class="card-doctor-body">
                                        <div class="card-doctor-text">
                                            <h3>Dr. Frankstein</h3>
                                            <p>Kedokteran Jiwa dan Psikiatri</p>
                                        </div>
                                        <a href="{{ route('buatjanji_frontend') }}">Buat Janji</a>
                                    </div>
                                </div>
                                <div class="card-doctor">
                                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80"
                                        alt="">
                                    <div class="card-doctor-body">
                                        <div class="card-doctor-text">
                                            <h3>Dr. Frankstein</h3>
                                            <p>Kedokteran Jiwa dan Psikiatri</p>
                                        </div>
                                        <a href="{{ route('buatjanji_frontend') }}">Buat Janji</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@section('opsionalCss')
    <style>
        .detail-hospital-container>h1 {
            font-size: 3em;
            color: #2c4964;
            margin-bottom: 1%;
        }

        .detail-hospital-content {}

        .banner {
            display: flex;
            justify-content: space-between;
        }

        .banner img {
            max-width: 100%;
            width: 60%;
            height: auto;
        }

        .address {
            width: 35%;
            color: #2c4964;
        }

        .address>h2 {
            font-size: 2em;
            margin-bottom: 3%;
        }

        .address iframe {
            width: 100%;
            height: 250px;
            margin-bottom: 2.5%;
        }

        .address>p {
            font-size: 1.25em;
        }

        .info {
            display: flex;
            justify-content: space-between;
            margin: 2.5% 0;
            color: #2c4964;
        }

        .about {
            width: 49%;
            height: auto;
        }

        .about>h2 {
            font-size: 2em;
            margin-bottom: 1%;
        }

        .about>p {
            font-size: 1.5em;
            line-height: 175%;
            text-align: justify;
        }

        .facility {
            width: 49%;
            height: auto;
        }

        .facility>h2 {
            font-size: 2em;
            margin-bottom: 1%;
        }

        .facility>ul {
            display: flex;
            flex-wrap: wrap;
        }

        .facility ul li {
            width: 40%;
            margin: 1% 5%;
            font-size: 1.5em;
        }

        .employee {
            display: flex;
            justify-content: space-between;
        }

        .polyclinic {
            width: 48%;
            height: auto;
            color: #2c4964;
        }

        .polyclinic>h2 {
            font-size: 2em;
            margin-bottom: 2%;
        }

        .card-polyclinic-container {
            display: flex;
            flex-direction: column;
        }

        .card-polyclinic {
            display: flex;
            border-radius: 10px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            margin-bottom: 2.5%;
            overflow: hidden;
        }

        .card-polyclinic img {
            width: 20%;
            height: 125px;
            object-fit: cover;
        }

        .card-polyclinic-text {
            width: 80%;
            height: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-left: 2.5%;
        }

        .card-polyclinic-text>h3 {
            font-size: 1.75em;
            margin-bottom: 1%;
        }

        .card-polyclinic-text>p {
            font-size: 1.25em;
        }

        .doctor {
            width: 48%;
            height: auto;
            color: #2c4964;
        }

        .doctor>h2 {
            font-size: 2em;
            margin-bottom: 2%;
        }

        .card-doctor-container {
            display: flex;
            flex-direction: column;
        }

        .card-doctor {
            display: flex;
            align-items: center;
            border-radius: 10px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            margin-bottom: 2.5%;
            overflow: hidden;
        }

        .card-doctor img {
            max-width: 100%;
            width: 20%;
            height: 125px;
            object-fit: cover;
        }

        .card-doctor-body {
            width: 80%;
            display: flex;
            /* align-items: center; */
            margin-left: 2.5%;
        }

        .card-doctor-text {
            width: 80%;
            height: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .card-doctor-text>h3 {
            font-size: 1.75em;
            margin-bottom: 1%;
        }

        .card-doctor-text>p {
            font-size: 1.25em;
        }

        .card-doctor-body>a {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1% 3%;
            cursor: pointer;
            color: #2c4964;
            background-color: #e2e8f0;
        }


        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
            .detail-hospital-container>h1 {
                font-size: 2em;
                margin: 5% 0;
            }

            .banner {
                flex-direction: column;
            }

            .banner img {
                width: 100%;
            }

            .address {
                width: 100%;
                margin: 5% 0;
            }

            .address>h2 {
                font-size: 1.75em;
            }

            .address iframe {
                display: none;
            }

            .address>p {
                font-size: 1.5em;
            }

            .info {
                flex-direction: column;
                margin-bottom: 5%;
            }

            .about {
                width: 100%;
                margin-bottom: 5%;
            }

            .about>h2 {
                font-size: 1.75em;
            }

            .facility {
                width: 100%;
            }

            .employee {
                flex-direction: column;
            }

            .polyclinic {
                width: 100%;
                margin-bottom: 2.5%;
            }

            .card-polyclinic {
                margin-bottom: 5%;
            }

            .card-polyclinic img {
                width: 40%;
            }

            .card-polyclinic-text {
                width: 60%;
            }

            .doctor {
                width: 100%;
            }

            .card-doctor {
                margin-bottom: 5%;
            }

            .card-doctor img {
                width: 40%;
            }

            .card-doctor-body {
                flex-direction: column;
            }

            .card-doctor-body>button {
                width: 50%;
                margin: 7.5% 0;
            }
        }

        /* Mobile landscape */
        @media only screen and (min-width: 481px) and (max-width: 767px) {
            .detail-hospital-container>h1 {
                font-size: 2em;
                margin: 5% 0;
            }

            .banner {
                flex-direction: column;
            }

            .banner img {
                width: 100%;
            }

            .address {
                width: 100%;
                margin: 5% 0;
            }

            .address>h2 {
                font-size: 1.75em;
            }

            .address iframe {
                display: none;
            }

            .address>p {
                font-size: 1.5em;
            }

            .info {
                flex-direction: column;
                margin-bottom: 5%;
            }

            .about {
                width: 100%;
                margin-bottom: 5%;
            }

            .about>h2 {
                font-size: 1.75em;
            }

            .facility {
                width: 100%;
            }

            .employee {
                flex-direction: column;
            }

            .polyclinic {
                width: 100%;
                margin-bottom: 2.5%;
            }

            .card-polyclinic {
                margin-bottom: 5%;
            }

            .card-polyclinic img {
                width: 40%;
            }

            .card-polyclinic-text {
                width: 60%;
            }

            .doctor {
                width: 100%;
            }

            .card-doctor {
                margin-bottom: 5%;
            }

            .card-doctor img {
                width: 40%;
            }

            .card-doctor-body {
                flex-direction: column;
            }

            .card-doctor-body>button {
                width: 50%;
                margin: 7.5% 0;
            }
        }

        /* tablet ipad (potrait) */
        @media (min-width: 768px) and (max-width: 1023px) {
            .card-polyclinic img {
                width: 40%;
            }

            .card-polyclinic-text {
                width: 60%;
            }

            .card-doctor img {
                width: 40%;
            }

            .card-doctor-body {
                flex-direction: column;
            }

            .card-doctor-body>button {
                width: 50%;
                margin: 7.5% 0;
            }

    </style>
@endsection
