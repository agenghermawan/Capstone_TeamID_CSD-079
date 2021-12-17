@extends('frontend.component.layout')

@section('contentFrontEnd')
    @include('sweetalert::alert')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-5 mb-3">
                    <h2> Konsultasi Sekarang</h2>
                </div>
                <div class="card p-5 mb-3">
                    <h2><a href="{{route('user.index')}}"> Daftar Konsultasi Kamu </a> </h2>
                </div>
                <div class="card p-5">
                    <h2><a href="{{route('tanyaDokter.index')}}"> Daftar Konsultasi </a></h2>
                </div>
            </div>
            <div class="col-md-8 card p-5">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="pl-5 pb-3">  Detail Konsultasi  </h2>
                    </div>
                    <div class="col-md-6 text-end">
                        <h3 class="text-right">
                            <a href="{{route('konsultasi.create')}}" class="bg-primary p-3 text-light rounded">
                                Konsultasi Sekarang </a>
                        </h3>
                    </div>
                </div>


                <div class="p-5 border-top">
                                <div class="col-md-12  mt-4  pb-4">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <?php
                                            $dataDokter  = \App\Models\User::where('id',$data->ditulisOleh)->first();
                                            ?>
                                            @if($dataDokter->profile_photo_path == null)
                                                <img src="https://ui-avatars.com/api/?name={{$dataDokter->name}}" class="rounded-circle" width="60px" height="60px" alt="">
                                            @else
                                                <img src="{{Storage::url($dataDokter->profile_photo_path)}}" alt="" class="rounded-circle" width="60px" height="60px">
                                            @endif
                                        </div>
                                        <div class="col-md-8 text-left" style="margin-left: 10px">
                                                <div>
                                                    <h2>{{$data->judulKonsultasi}}</h2>
                                                    {{--                                        <p>Pertanyaan : {{$konsultasi->ditulisOleh}} | {{$konsultasi->created_at->diffForHumans()}}</p>--}}
                                                    <p>Pertanyaan : {{$dataDokter->name}}  | {{$data->created_at->diffForHumans()}}</p>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                </div>


                       <div class="col-md-12 py-4 fs-3">
                            {!! $data->pertanyaan !!}
                       </div>
                        <div class="jawaban mt-5">
                            @if(!$data->jawabankonsultasi->isEmpty())
                                <div class="border border-blue-100 rounded p-5">
                                    <h4> Telah Dijawab Oleh </h4>
                                    <div class="content d-flex p-5">
                                        <div class="image">
                                            @if($dataDokter->profile_photo_path == null)
                                                <img src="https://ui-avatars.com/api/?name={{$dataDokter->name}}" class="rounded-circle" width="60px" height="60px" alt="">
                                            @else
                                                <img src="{{Storage::url($dataDokter->profile_photo_path)}}" alt="" class="rounded-circle" width="60px" height="60px">
                                            @endif
                                        </div>
                                        <div class="name ml-4" style="margin-left: 10px">
                                            @if($datadokter == null)
                                                <h2> {{$datajawabankonsultasi->user->name}}  </h2>
                                            @else
                                                <h2> {{$datadokter->fullname}} ( {{$datadokter->sebagaiDokter}} ) </h2>
                                            @endif
                                            <p class="text-sm text-blue-700"> {{ $data->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                    <div class="jawaban pl-5">
                                        <h3> Topik : {{$datajawabankonsultasi->konsultasi->judulKonsultasi}}
                                        </h3>
                                        <h4> Jawaban  : </h4>
                                        <p>  {!! $datajawabankonsultasi->jawabanKonsultasi !!} </p>
                                    </div>
                                </div>
                            @else
                                <div class="fs-3 card py-5 text-center"> Konsultasi anda belum di jawab oleh dokter kami Silahkan tunggu maksimal 24jam, Terima kasih</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('opsionalCss')

@endsection
