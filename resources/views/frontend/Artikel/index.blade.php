@extends('frontend.component.layout')

@section('contentFrontEnd')

    <main class="container">
        <div class="searchbar mb-5">
            <input type="text" class="form-control" placeholder="Obat Batuk ata vitamin">
            <button class="btn-primary rounded">Cari</button>
        </div>
            <h1 class="font-weight-bold mb-2">Daftar Artikel</h1>
            <h3 class="font-italic text-muted mb-5">Silahkan cari Artikel yang anda sukai</h3>
        <div class="row pb-5 mb-4 mt-5">
            @foreach($data as $item)
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="card shadow-sm border-0 rounded">
                    <a href="{{route('artikelShow_frontend',$item->id)}}">
                    <div class="card-body p-0"><img src="{{ Storage::url($item->photo) }}" alt="" class="w-100 card-img-top">
                        <div class="p-4">
                            <h5 class="mb-0">{{$item->title}}</h5>
                            <p class="small text-muted">{{$item->kategori}}</p>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                                <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            @endforeach

        </div>

        {{--<div class="article-container">
            <div class="article-header">
                <h2>Artikel Populer</h2>
            </div>
            <div class="article-content">
                <div class="col-md-12">
                    <div class="row">
                        @foreach($data as $item )
                            <div class="card-article">
                                <a href="{{ route('artikelShow_frontend', $item->id) }}">
                                    <img src="{{ Storage::url($item->photo)  }}" alt="">
                                    <h3>{{$item->title}}</h3>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>--}}
    </main>
@endsection

@section('opsionalCss')
    <style>

    </style>
@endsection
