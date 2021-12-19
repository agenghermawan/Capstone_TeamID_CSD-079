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
                <h3>Lorem Ipsum</h3>
                <p>Kami percaya perawatan medis berkualitas tinggi di seluruh dunia haruslah menjangkau nyaman, terjangkau, aman, nyaman dan efisien </p>
            </div>
            <div class="card-2-whyUs">
                <img src="Assets/google-docs.png" alt="">
                <h3>Lorem Ipsum</h3>
                <p>Cara kerja yang efisien dan terorganisir memungkinkan kami melayani pasien dengan perawatan kesehatan terbaik. </p>
            </div>
            <div class="card-2-whyUs">
                <img src="Assets/google-docs.png" alt="">
                <h3>Lorem Ipsum</h3>
                <p>Kami berkomitmen untuk memberikan solusi medis bahkan untuk kasus yang paling sulit untuk kepentingan pasien dari seluruh dunia.</p>
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
                <div class="card-article">
                    <img src="{{ asset('image/boxed-water-is-better-XXQW_4VqrA0-unsplash.jpg') }}" alt="">
                    <h3>Air putih adalah obat segala penyakit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quisquam consectetur iste minus,
                        consequatur nihil beatae adipisci blanditiis! Totam dolore facilis, sint minima unde beatae porro
                        repellat temporibus quae autem?</p>
                </div>
                <div class="card-article">
                    <img src="{{ asset('image/boxed-water-is-better-XXQW_4VqrA0-unsplash.jpg') }}" alt="">
                    <h3>Air putih adalah obat segala penyakit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quisquam consectetur iste minus,
                        consequatur nihil beatae adipisci blanditiis! Totam dolore facilis, sint minima unde beatae porro
                        repellat temporibus quae autem?</p>
                </div>
                <div class="card-article">
                    <img src="{{ asset('image/boxed-water-is-better-XXQW_4VqrA0-unsplash.jpg') }}" alt="">
                    <h3>Air putih adalah obat segala penyakit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quisquam consectetur iste minus,
                        consequatur nihil beatae adipisci blanditiis! Totam dolore facilis, sint minima unde beatae porro
                        repellat temporibus quae autem?</p>
                </div>
                <div class="card-article">
                    <img src="{{ asset('image/boxed-water-is-better-XXQW_4VqrA0-unsplash.jpg') }}" alt="">
                    <h3>Air putih adalah obat segala penyakit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quisquam consectetur iste minus,
                        consequatur nihil beatae adipisci blanditiis! Totam dolore facilis, sint minima unde beatae porro
                        repellat temporibus quae autem?</p>
                </div>
            </div>
        </div>
        <div class="drugs-container">
            <h2>Obat dan Vitamin</h2>
            <p>Dapatkan informasi seputar kandungan, aturan, petunjuk penggunaan obat dan vitamin di sini</p>
            <div class="card-drugs-container">
                <div class="card-drugs">
                    <img
                        src="https://img.icons8.com/external-itim2101-blue-itim2101/64/000000/external-drug-medical-and-health-itim2101-blue-itim2101.png" />
                    <h3>Flu dan Batuk</h3>
                </div>
                <div class="card-drugs">
                    <img
                        src="https://img.icons8.com/external-itim2101-blue-itim2101/64/000000/external-drug-medical-and-health-itim2101-blue-itim2101.png" />
                    <h3>Flu dan Batuk</h3>
                </div>
                <div class="card-drugs">
                    <img
                        src="https://img.icons8.com/external-itim2101-blue-itim2101/64/000000/external-drug-medical-and-health-itim2101-blue-itim2101.png" />
                    <h3>Flu dan Batuk</h3>
                </div>
                <div class="card-drugs">
                    <img
                        src="https://img.icons8.com/external-itim2101-blue-itim2101/64/000000/external-drug-medical-and-health-itim2101-blue-itim2101.png" />
                    <h3>Flu dan Batuk</h3>
                </div>
                <div class="card-drugs">
                    <img
                        src="https://img.icons8.com/external-itim2101-blue-itim2101/64/000000/external-drug-medical-and-health-itim2101-blue-itim2101.png" />
                    <h3>Flu dan Batuk</h3>
                </div>
                <a href="{{ route('obat_frontend') }}" class="card-drugs">
                    <h3>Lihat Semua</h3>
                </a>
            </div>
        </div>
    </main>
@endsection
