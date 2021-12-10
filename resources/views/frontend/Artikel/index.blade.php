@extends('frontend.component.layout')

@section('contentFrontEnd')
    <main>
        <div class="searchbar mb-5">
            <input type="text" class="form-control" placeholder="Obat Batuk ata vitamin">
            <button class="btn-primary rounded">Cari</button>
        </div>
        <div class="article-container">
            <div class="article-header">
                <h2>Artikel Populer</h2>
            </div>
            <div class="article-content">
                <div class="card-article">
                    <a href="{{ route('artikelShow_frontend', 1) }}">
                        <img src="{{ asset('image/5a3855d889a208.0996562315136414325638.png') }}" alt="">
                        <h3>Air putih adalah obat segala penyakit</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quisquam consectetur iste minus,
                            consequatur nihil beatae adipisci blanditiis! Totam dolore facilis, sint minima unde beatae
                            porro
                            repellat temporibus quae autem?</p>
                    </a>
                </div>
                <div class="card-article">
                    <img src="{{ asset('image/5a3855d889a208.0996562315136414325638.png') }}" alt="">
                    <h3>Air putih adalah obat segala penyakit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quisquam consectetur iste minus,
                        consequatur nihil beatae adipisci blanditiis! Totam dolore facilis, sint minima unde beatae porro
                        repellat temporibus quae autem?</p>
                </div>
                <div class="card-article">
                    <img src="{{ asset('image/5a3855d889a208.0996562315136414325638.png') }}" alt="">
                    <h3>Air putih adalah obat segala penyakit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quisquam consectetur iste minus,
                        consequatur nihil beatae adipisci blanditiis! Totam dolore facilis, sint minima unde beatae porro
                        repellat temporibus quae autem?</p>
                </div>
                <div class="card-article">
                    <img src="{{ asset('image/5a3855d889a208.0996562315136414325638.png') }}" alt="">
                    <h3>Air putih adalah obat segala penyakit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quisquam consectetur iste minus,
                        consequatur nihil beatae adipisci blanditiis! Totam dolore facilis, sint minima unde beatae porro
                        repellat temporibus quae autem?</p>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('opsionalCss')
    <style>

    </style>
@endsection
