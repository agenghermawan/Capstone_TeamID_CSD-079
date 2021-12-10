@extends('frontend.component.layout')

@section('contentFrontEnd')
    @include('sweetalert::alert')
    <main>
        <div class="banner-container">
            <div class="banner-text">
                <h1>Welcome to SEHATKU</h1>
                <p>Chat dokter, kunjungi rumah sakit, beli obat, cek lab dan update informasi seputar kesehatan, semua bisa
                    di WebDev</p>
                <button class="btn-appointment">Buat Janji </button>
            </div>
            <div class="banner-img">
                <img src="{{ asset('image/PikPng.com_medical-png_832417.png') }}" alt="">
            </div>
        </div>
        <div class="whyUs-container">
            <div class="card-1-whyUs">
                <h2>Why Choose Webdev</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Duis aute irure dolor in reprehenderit Asperiores dolores sed et. Tenetur quia eos.
                    Autem tempore quibusdam vel necessitatibus optio ad corporis. </p>
                <button>learn more > </button>
            </div>
            <div class="card-2-whyUs">
                <img src="Assets/google-docs.png" alt="">
                <h3>Lorem Ipsum</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, eum repellendus officia rerum
                    exercitationem nulla sed. </p>
            </div>
            <div class="card-2-whyUs">
                <img src="Assets/google-docs.png" alt="">
                <h3>Lorem Ipsum</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, eum repellendus officia rerum
                    exercitationem nulla sed. </p>
            </div>
            <div class="card-2-whyUs">
                <img src="Assets/google-docs.png" alt="">
                <h3>Lorem Ipsum</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, eum repellendus officia rerum
                    exercitationem nulla sed. </p>
            </div>
        </div>

        <div class="Services-container">
            <h2>Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Duis aute irure dolor in reprehenderit Asperiores dolores sed et. Tenetur quia eos. Autem
                tempore quibusdam vel necessitatibus optio ad corporis. </p>
            <div class="card-service-container">
                <div class="card-service">
                    <img src="{{ asset('image/google-docs.png') }}" alt="">
                    <h3>Lorem Ipsum</h3>
                    <p>Illum aperiam neque et officia magnam officiis. </p>
                </div>
                <div class="card-service">
                    <img src="{{ asset('image/google-docs.png') }}" alt="">
                    <h3>Lorem Ipsum</h3>
                    <p>Illum aperiam neque et officia magnam officiis. </p>
                </div>
                <div class="card-service">
                    <img src="{{ asset('image/google-docs.png') }}" alt="">
                    <h3>Lorem Ipsum</h3>
                    <p>Illum aperiam neque et officia magnam officiis. </p>
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
