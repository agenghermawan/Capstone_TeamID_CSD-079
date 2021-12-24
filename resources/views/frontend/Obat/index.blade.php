@extends('frontend.component.layout')

@section('contentFrontEnd')
     <div class="container-fluid">
            <img src="{{asset('image/obat.jpg')}}" class="rounded shadow" height="500px"  style="object-fit: cover" width="100%"  alt="obat">
        </div>
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
                    <div class="col-md-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <a href="{{ route('obatKategori_frontend',$item->nama) }}">
                            <div class="row g-0 p-5">
                                <div class="col-md-4">
                                    <img src="{{ Storage::url($item->photo)}}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title fs-1">{{$item->nama}}</h5>
                                        <p class="card-text">{{$item->deskripsi}}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    </div>
                    @endforeach
            </div>

        </div>
    </main>
@endsection
