@extends('frontend.component.layout')

@section('contentFrontEnd')

    <main class="container-fluid">
        <div class="searchbar mb-5">
            <form action="{{route('artikel_frontend')}}" style="width: 100%" class="d-flex">
                <input type="text" class="form-control shadow fs-3" name="searchArtikel" placeholder="Silahkan cari Artikel yang anda sukai ....">
                <button class="btn btn-primary rounded" type="submit"> <i class="fas fa-search fa-3x"></i> </button>
            </form>
        </div>
        <div style="padding-left: 5%">
            <h2 style="font-size: 3em">Obat dan Vitamin Berdasarkan Kategori</h2>
        </div>
        <div class="row pb-5 mb-4 mt-5" style="padding: 1% 5% 0 5%">
            @foreach($data as $item)
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ Storage::url($item->photo) }}" alt="" class="" width="100%" style="object-fit: cover" height="200px">
                            </div>
                            <div class="col-md-6 fs-3">
                                <h2 class="pt-3"> {{$item->title}}</h2>
                                <div class="fs-3" style="font-size: 24px">
                                    {!!  Illuminate\Support\Str::limit($item->isiArtikel,100) !!}
                                </div>
                                <a href="{{route('artikelShow_frontend',$item->id)}}" class="btn btn-info text-light rounded mt-3"> Read More</a>
                            </div>
                        </div>

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

@endsection
