@extends('frontend.component.layout')

@section('contentFrontEnd')
    <main>
        <div class="searchbar mb-5">
            <form action="{{route('obat_frontend')}}" style="width: 100%" class="d-flex">
                <input type="text" class="form-control shadow fs-3" name="searchObat" placeholder="Silahkan cari Obat yang anda butuhkan ....">
                <button class="btn btn-primary rounded" type="submit"> <i class="fas fa-search fa-3x"></i> </button>
            </form>
        </div>
        <div class="drugs-page-container">
            <h2>Obat dan Vitamin Berdasarkan Kategori</h2>
                <div class="row">
                @foreach($data as $item)
                    <div class="col-md-1">
                            <a href="{{ route('obatKategori_frontend',$item->nama) }}">
                                <img src="{{ Storage::url($item->photo)}}" class="rounded" style="width: 100%;
                                height: 100px;
                                object-fit: cover;" alt="">
                                <div class="col-md text-center px-2 pt-2">
                                    <h3 class="fs-6 text">{{$item->nama}}</h3>
                                </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </main>
@endsection
