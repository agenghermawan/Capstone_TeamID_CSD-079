@extends('frontend.component.layout')

@section('contentFrontEnd')

    <main class="container-fluid">
        <div class="searchbar mb-5">
            <form action="{{route('artikel_frontend')}}" style="width: 100%" class="d-flex">
                <input type="text" class="form-control shadow fs-3" name="searchArtikel" placeholder="Silahkan cari Artikel yang anda sukai ....">
                <button class="btn btn-primary rounded" type="submit"> <i class="fas fa-search fa-3x"></i> </button>
            </form>
        </div>
        <div class="row pb-5 mb-4 mt-5" style="padding: 1% 5% 0 5%">
            @foreach($data as $item)
                    <div class="col-md-6 my-5">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ Storage::url($item->photo) }}" alt="" class="rounded-lg shadow-lg" width="100%" style="object-fit: cover" height="200px">
                            </div>
                            <div class="col-md-6 fs-3">
                                <h1 class="pt-3"> {{$item->title}}</h1>
                                <p> Ditulis Oleh {{$item->ditulisOleh}} | {{$item->created_at->diffForHumans()}}</p>
                                <p style="font-size: 12px"> {{$item->kategori}}</p>
                                <div class="readmore">
                                   <a href="{{route('artikelShow_frontend',$item->id)}}" class="btn btn-info text-light rounded mt-3"> Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
            @endforeach
        </div>
@endsection

@section('opsionalCss')
    <style>
        @media only screen and (max-width: 600px) {
            .readmore {
                margin-top: 0;
            }
        }
        @media only screen and (min-width: 1200px) {
            .readmore {
                margin-top: 25px;
            }
        }
    </style>

@endsection
