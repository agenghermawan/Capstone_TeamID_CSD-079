@extends('frontend.component.layout')

@section('contentFrontEnd')
    <div class="container">
        <main>
            <div class="detail-article-container">
                <h1>{{$data->title}}</h1>
                <div class="article-category">
                    <a href="#">{{$data->kategori}}</a>
                </div>
                <div class="article-info">
                    <p>Ditinjau oleh: <b>dr. {{$data->ditulisOleh}}</b></p>
                    <p>{{$data->created_at}}</p>
                </div>
                <img class="article-banner" src="{{ Storage::url($data->photo)}}" alt="" width="100%" height="400px" style="object-fit: cover">
                <p class="article-content" style="font-size: 28px">
                    {!! $data->isiArtikel !!}
                </p>
            </div>
            <aside>
                <h1>Artikel Terkait</h1>
                <div class="article-content">
                    <a href="#" class="card-article">
                        <img src="{{ asset('image/boxed-water-is-better-XXQW_4VqrA0-unsplash.jpg') }}" alt="">
                        <h3>Air putih adalah obat segala penyakit</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quisquam consectetur iste minus,
                            consequatur nihil beatae adipisci blanditiis! </p>
                    </a>
                    <div class="card-article">
                        <img src="{{ asset('image/boxed-water-is-better-XXQW_4VqrA0-unsplash.jpg') }}" alt="">
                        <h3>Air putih adalah obat segala penyakit</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quisquam consectetur iste minus,
                            consequatur nihil beatae adipisci blanditiis! </p>
                    </div>
                    <div class="card-article">
                        <img src="{{ asset('image/boxed-water-is-better-XXQW_4VqrA0-unsplash.jpg') }}" alt="">
                        <h3>Air putih adalah obat segala penyakit</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quisquam consectetur iste minus,
                            consequatur nihil beatae adipisci blanditiis! </p>
                    </div>
                    <div class="card-article">
                        <img src="{{ asset('image/boxed-water-is-better-XXQW_4VqrA0-unsplash.jpg') }}" height="400px" alt="">
                        <h3>Air putih adalah obat segala penyakit</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quisquam consectetur iste minus,
                            consequatur nihil beatae adipisci blanditiis! </p>
                    </div>
                </div>
            </aside>
        </main>
    </div>

@endsection

@section('opsionalCss')

@endsection
