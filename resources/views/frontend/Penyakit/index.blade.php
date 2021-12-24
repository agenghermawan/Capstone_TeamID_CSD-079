@extends('frontend.component.layout')

@section('contentFrontEnd')
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <form action="{{ route('listpenyakit.frontend') }}" class="d-flex">
                    <div class="col-10">
                        <input type="text" class="form-control p-3 rounded-lg shadow fs-3" name="searchPenyakit"
                            placeholder="Silahkan cari informasi Penyakit yang anda butuhkan ... ">
                    </div>
                    <div class="col-12">
                        <button class="form-control p-3 fs-3 rounded-lg shadow btn btn-info" type="submit"> <i
                                class="fas fa-search"> </i> Cari </button>
                    </div>
                </form>
            </div>
        </div>
        <hr class="my-5">
        <div class="row mt-5">
            <div class="col-md-8">
                <div class="row">
                    @foreach ($data as $item)
                        <div class="col-md-3 mb-2 rounded">
                            <div class="border rounded text-center p-3 mr-2">
                                <a href="{{ route('detailpenyakit.frontend', $item->id) }}">
                                    <h2 class="nav-link"> {{ $item->namaPenyakit }} </h2>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-5">
                    <h2> Tanya tentang kesehatan ?</h2>
                    <a class="btn btn-primary text-light rounded p-3 fs-3 shadow rounded-lg"
                        href="{{ route('user.index') }}"> Tanya Sekarang </a>
                </div>
                <img src="{{ asset('image/415.jpg') }}" height="400px" style="object-fit: cover" class="mt-2"
                    width="100%" alt="">
            </div>
        </div>

    </div>
@endsection


@section('footer')
    class="fixed-bottom"
@endsection
