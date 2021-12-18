@extends('frontend.component.layout')

@section('contentFrontEnd')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <input type="text" class="form-control p-3 rounded-lg shadow fs-3" placeholder="Silahkan cari informasi Penyakit yang anda butuhkan ... "> <i class="bi bi-search"></i>
            </div>
            <div class="col-md-2">
                <button class="form-control p-3 fs-3 rounded-lg shadow"> Cari </button>
            </div>
        </div>
        <hr class="my-5">
        <div class="row mt-5">
            <div class="col-md-8">
                <div class="row">
                    @foreach($data as $item)
                    <div class="col-md-3 mb-2 rounded">
                        <div class="border rounded text-center p-3 mr-2">
                        <a href="{{ route('detailpenyakit.frontend',$item->id)}}">
                            <h2 class="nav-link"> {{$item -> namaPenyakit}} </h2>
                        </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-5">
                    <h2> Tanya tentang kesehatan ?</h2>
                    <a class="btn btn-info rounded p-3 fs-3 shadow rounded-lg"> Tanya Sekarang </a>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('opsionalCss')
 
@endsection
