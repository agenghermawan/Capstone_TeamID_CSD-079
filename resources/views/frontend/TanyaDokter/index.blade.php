@extends('frontend.component.layout')

@section('contentFrontEnd')
    <div class="container">
    @if($dataKonsultasi->isEmpty() == true)
        <div class="card p-5">
            <div class="row text-center">
                <h1 class="text-center p-5"> Konsultasi dengan Dokter </h1>
                <h3>  belum ada konsultasi dengan dokter !! Konsultasi sekarang </h3>
                <div class="mt-4 text-center">
                    <h3 class="text-center justify-content-center pb-5">
                        <a href="{{route('konsultasi.create')}}" class="bg-primary p-3 text-light rounded">
                            Konsultasi Sekarang   </a>
                    </h3>
                </div>
            </div>
        </div>
    @elseif($dataKonsultasi->isEmpty() == false)
            <div class="row mb-4">
                <div class="col-md-6">
                    <a href="{{route('user.index')}}" class="btn btn-info w-100 p-4 fs-3"> Konsultasi Sekarang </a>
                </div>
                <div class="col-md-6">
                    <form action="{{route('tanyaDokter.index')}}" style="width: 100%" class="d-flex">
                        <input type="text" class="form-control shadow fs-3 p-4" name="searchKonsultasi" placeholder="Silahkan cari pertanyaan yang anda butuhkan  ....">
                         <button class="btn btn-primary rounded" type="submit"> <i class="fas fa-search fa-2x"></i> Search </button>
                     </form>
                </div>
            </div>

             <div class="card p-5">
                @foreach($dataKonsultasi as $konsultasi)
                    <div class="border-bottom">
                        <div class="col-md-12 row mt-4 pb-4">
                            <div class="col-md-1">
                                <?php
                                 $dataDokter  = \App\Models\User::where('id',$konsultasi->ditulisOleh)->first();
                                 $jawabanKonsultasi = \App\Models\jawabanKonsultasi::where('konsultasi_id',$konsultasi->id)->first();
                                ?>
                                @if($dataDokter->profile_photo_path == null)
                                    <img src="https://ui-avatars.com/api/?name={{$dataDokter->name}}" class="rounded-circle" width="60px" height="60px" alt="avatar">
                                @else
                                    <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" alt="" class="rounded-circle" width="60px" height="60px">
                                @endif
                            </div>
                            <div class="col-md-10 text-left">
                                <a href="{{route('tanyaDokter.show',$konsultasi->id)}} ">
                                    @if($jawabanKonsultasi == null )
                                        <div class="d-flex justify-content-between">
                                            <h2>{{$konsultasi->judulKonsultasi}} <i class="fas fa-comment-slash"></i> </h2>
                                            <h3> Belum Terjawab </h3>
                                        </div>
                                    @else
                                        <div class="d-flex justify-content-between">
                                            <h2>{{$konsultasi->judulKonsultasi}} <i class="fas fa-comments"></i> </h2>
                                            <h3> Sudah Terjawab </h3>
                                        </div>
                                    @endif
                                    <p>Pertanyaan : {{$dataDokter->name}} {{$konsultasi->created_at->diffForHumans()}}</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 py-2 fs-3">
                            {!! $konsultasi->pertanyaan !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    </div>
@endsection

@section('footer')
    class="fixed-bottom"
@endsection
