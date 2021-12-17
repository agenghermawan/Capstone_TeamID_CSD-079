@extends('frontend.component.layout')

@section('contentFrontEnd')
    @include('sweetalert::alert')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-5">
                    <h2> Konsultasi Sekarang</h2>
                </div>
            </div>
            <div class="col-md-8 card p-5">
                <h2> Tanyakan Pertanyaan kamu sekarang </h2>
                <form action="{{route('konsultasi.store')}}" method="post" class="border-top pt-5 my-5">
                    @csrf
                    @method('post')
                    <input type="hidden" value="{{Auth::user()->id}}" name="ditulisOleh">
                    <div class="form-group">
                        <label for="" class="mb-2"> <h3> Judul (Title) Topik tentang pertanyaan </h3> </label>
                        <input type="text" name="judulKonsultasi" class="form-control p-4 rounded-3 shadow p-3 fs-3">
                    </div>
                    <div class="form-group mt-5">
                        <textarea name="pertanyaan"  cols="30" class="shadow-lg" id="konsulasiTextarea" rows="10"></textarea>
                    </div>
                    <div class="form-group my-3">
                        <div class="col-md-12 row">
                            <div class="col-md-4">
                                <button class="bg-primary text-light p-3 rounded border-none"> Tanyakan Sekarang </button>
                                <a  class="bg-info text-light p-3 rounded border-none" href="{{route('konsultasi.index')}}"> Batal </a >
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('opsionalCss')

@endsection
