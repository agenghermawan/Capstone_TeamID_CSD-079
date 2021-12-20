@extends('frontend.component.layout')
@section('contentFrontEnd')
    @include('sweetalert::alert')
    <main>
        <div class="banner-container">
            <div class="banner-text">
                <h1>Welcome to SEHATKU</h1>
                <p class="mb-5">Chat dokter, kunjungi rumah sakit, beli obat, cek lab dan update informasi seputar kesehatan, semua bisa
                    di WebDev</p>
                <a class="btn-appointment" href="{{route('rumahSakit_frontend')}}">Buat Janji </a>
            </div>
            <div class="banner-img">
                <img src="{{ asset('image/PikPng.com_medical-png_832417.png') }}" alt="">
            </div>
        </div>
        <div class="whyUs-container">
            <div class="card-1-whyUs">
                <h2>SEHATKU</h2>
                <p>Upaya kami adalah untuk selalu memberikan perawatan medis terbaik dengan cara yang cepat dan efisien untuk memastikan kepuasan pasien.
                    Sejumlah besar pasien internasional memilih kita karena tim ahli kami yang terdiri dari dokter, staf yang setia, dan infrastruktur canggih setara dengan standar global,
                    menjadikan kami nama yang dipercaya tidak hanya untuk pasien dari dalam negeri, tetapi di seluruh dunia.</p>
                <button>learn more > </button>
            </div>
            <div class="card-2-whyUs">
                <img src="Assets/google-docs.png" alt="">
                <p class="text-dark">Kami percaya perawatan medis berkualitas tinggi di seluruh dunia haruslah menjangkau nyaman, terjangkau, aman, nyaman dan efisien </p>
            </div>
            <div class="card-2-whyUs">
                <img src="Assets/google-docs.png" alt="">
                <p class="text-dark" >Cara kerja yang efisien dan terorganisir memungkinkan kami melayani pasien dengan perawatan kesehatan terbaik. </p>
            </div>
            <div class="card-2-whyUs">
                <img src="Assets/google-docs.png" alt="">
                <p class="text-dark" >Kami berkomitmen untuk memberikan solusi medis bahkan untuk kasus yang paling sulit untuk kepentingan pasien dari seluruh dunia.</p>
            </div>
        </div>

        <div class="Services-container">
            <h2>Services</h2>
            <p>Kami memberikan layanan terbaik disetiap fiturnya dengan pelayanan yang mudah dan aman</p>
            <div class="card-service-container">
                <div class="card-service">
                    <img src="{{ asset('image/chat.png') }}" alt="">
                    <h3>Chat dengan dokter</h3>
                    <p>Tanya Dokter Kapan pun & di Mana pun secara langsung </p>
                </div>
                <div class="card-service">
                    <img src="{{ asset('image/meeting.png') }}" alt="">
                    <h3>Buat janji RS</h3>
                    <p>Cari rumah sakit terdekat dan buat janji dengan langkah mudah</p>
                </div>
                <div class="card-service">
                    <img src="{{ asset('image/info.png') }}" alt="">
                    <h3>Info kesehatan</h3>
                    <p>Menyediakan Informasi terupdate mengenai penyakit, obat, dan pola hidup sehat</p>
                </div>
            </div>
        </div>
        <div class="article-container">
            <div class="article-header">
                <h2>Artikel Populer</h2>
                <a href="{{ route('artikel_frontend') }}">Lihat Semua</a>
            </div>
            <div class="article-content">
                @foreach($dataArtikel as $item)
                    <div class="card-article pb-2">
                        @if($item->photo != null)
                            <img src="{{ Storage::url($item->photo) }}" alt="{{$item->title}}" style="object-fit: cover">
                        @else
                            <img src="{{ asset('image/application.png')}}" alt="{{$item->title}}" style="object-fit: cover" width="100%">
                        @endif
                        <h3>{{$item->title}}</h3>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="content-2-1 mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="text-center title-text">
                <h1 class="text-title fs-1" >3 Keys Benefit</h1>
                <p class="text-caption fs-3" style="margin-left: 3rem; margin-right: 3rem">
                    You can easily manage your business with a powerful tools
                </p>
            </div>

            <div class="grid-padding text-center">
                <div class="row">
                    <div class="col-lg-4 column">
                        <div class="icon">
                            <img src="{{asset('image/Content-2-2.png')}}"
                                 alt="" />
                        </div>
                        <h3 class="icon-title fs-1">Mudah Digunakan</h3>
                        <p class="icon-caption fs-2">
                            Mempermudah dalam melakukan konsultasi <br />
                            kesehatan dan janji dengan dokter pilihan
                        </p>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="icon">
                            <img src="{{asset('image/Content-2-3.png')}}"
                                 alt="" />
                        </div>
                        <h3 class="icon-title fs-1">Analisis secara Real Time</h3>
                        <p class="icon-caption fs-2">
                            Kamu bisa melakukan konsultasi <br />
                            dengan dokter secara langsung
                        </p>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="icon">
                            <img src="{{asset('image/Content-2-4.png')}}"
                                 alt="" />
                        </div>
                        <h3 class="icon-title fs-1">Data Anda Terjamin</h3>
                        <p class="icon-caption fs-2">
                            Privasi data kamu terjaga<br />
                            oleh kami
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-block">
                <div class="card">
                    <div class="d-flex flex-lg-row flex-column align-items-center">
                        <div class="me-lg-3">
                            <img
                                src="{{asset('image/Content-2-1.png')}}"
                                alt="" />
                        </div>
                        <div class="flex-grow-1 text-lg-start text-center card-text">
                            <h3 class="card-title fs-1">
                                Konsultasi cepat dengan dokter kamu
                            </h3>
                            <p class="card-caption fs-3 mt-4">
                               Aplikasi ini Mempermudah dalam melakukan konsultasi
                                kesehatan <br class="d-none d-lg-block" />
                                dan janji dengan dokter pilihan
                            </p>
                        </div>
                        <div class="card-btn-space">
                            <a href="{{route('tanyaDokter.index')}}" class="btn btn-card text-white">Konsultasi Sekarang </a>
                            <a href="{{route('user.index')}}" class="btn btn-outline">Buat Janji Sekarang </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
