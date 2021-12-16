@extends('frontend.component.layout')

@section('contentFrontEnd')
    <div class="container" style="padding:1% 10% 2% 10%">
        <main>
            <div class="detail-article-container">
                <h1>{{$data->title}}</h1>
                <div class="article-category">
                    <a href="#">
                        <h5> {{$data->kategori}} </h5>
                    </a>
                </div>
                <div class="article-info">
                    <p>Ditinjau oleh: <b>dr. {{$data->ditulisOleh}}</b></p>
                    <p>{{  $data->created_at->diffForHumans()}}</p>
                </div>
                <img class="article-banner" src="{{ Storage::url($data->photo)}}" alt="" width="100%" height="400px" style="object-fit: cover">
                <p class="article-content">
                    {!! $data->isiArtikel !!}
                </p>
            </div>
            <aside class="py-5">
                <h1>Artikel Terkait</h1>
                <div class="row">
                    @foreach($artikelTerkait as $item)
                        <div class="col-md-3  shadow-md">
                            <a href="{{route('artikelShow_frontend',$item->id)}}">
                                <img src="{{ Storage::url($item->photo) }}" alt="{{$item->title}}" width="100%">
                                <h3>{{$item->title}}</h3>
                                <p>
                                    Kategori : {{$item->kategori}}
                                </p>
                                <a href="" class="btn btn-info rounded shadow text-light"> Read more</a>
                            </a>
                        </div>
                    @endforeach
                </div>
            </aside>
        </main>
    </div>
@endsection

@section('opsionalCss')
    <style>
        .article-content {
            display: flex;
            flex-wrap: wrap;
            justify-content:space-evenly;
        }
    </style>

@endsection
