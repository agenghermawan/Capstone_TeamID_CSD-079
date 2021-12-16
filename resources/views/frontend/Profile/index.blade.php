@extends('frontend.component.layout')

@section('contentFrontEnd')
    @include('sweetalert::alert')
    <div class="container mt-5">

        <div class="col-md-12">
            <div class="row">

                <div class="col-md-12">

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Konsultasi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Buat Janji </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="card p-5">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row justify-content-between">
                                    <div class="col-md-10">
                                        <h1 class="pb-3"> Profil Saya </h1>
                                    </div>
                                    <div class="col-md-2">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary p-3 rounded-p3 fs-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Perbarui Profile Anda
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content p-5">
                                                   <h1 class="text-center"> Ubah Profile </h1>
                                                    <form action="{{route('pengguna.update',Auth::user()->id)}}" enctype="multipart/form-data" method="post">
                                                        @method('put')
                                                        @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group text-center">
                                                            <div class="">
                                                                <label for="inputProfile">
                                                                    <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" class="rounded-circle" width="60px" height="60px" alt="">
                                                                    @error('profile_photo_path')
                                                                        <p> {{$message}} </p>
                                                                    @enderror
                                                                </label>
                                                            </div>
                                                            <input type="file" id="inputProfile" name="profile_photo_path" style="visibility: hidden">
                                                            <p class="text-form"> Pilih Foto Profile anda </p>
                                                        </div>
                                                        <div class="form-group my-3">
                                                            <label for="" class="mb-2"> Masukan nama anda:</label>
                                                            <input type="text" class="form-control p-3" placeholder="name"  name="name" value="{{Auth::user()->name}}">
                                                            @error('name')
                                                                <p> {{$message}} </p>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mt-4">
                                                            <label for="jenis_kelamin">Pilih Jenis Kelamin :</label>
                                                            <select name="jenis_kelamin" id="" class="form-control p-3">
                                                                <option value="Laki-Laki"> Laki Laki </option>
                                                                <option value="Perempuan"> Perempuan </option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Masukan Email anda :</label>
                                                            <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            @error('email')
                                                             <p> {{$message}} </p>
                                                            @enderror
                                                            <div id="emailHelp" class="form-text">kami menjaga data privasi anda</div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="provinsi" class="form-label">Masukan Provinsi anda :</label>
                                                            <input type="text" name="provinsi" class="form-control p-3" id="provinsi" aria-describedby="emailHelp">
                                                            @error('provinsi')
                                                              <p> {{$message}} </p>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Masukan Kode Pos anda :</label>
                                                            <input type="number" name="kode_pos" value="{{Auth::user()->kode_pos}}" class="form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                        @error('kode_pos')
                                                         <p> {{$message}} </p>
                                                        @enderror
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Masukan Masukan Tanggal Lahir anda  :</label>
                                                            <input type="date" name="tanggal_lahir" value="{{Auth::user()->tanggal_lahir}}" class="form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                        @error('tanggal_lahir')
                                                         <p> {{$message}} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 border-bottom py-4">
                                    <div class="row">
                                        <div class="col-md-1">
                                            @if(Auth::user()->profile_photo_path == null)
                                                <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" class="rounded-circle" width="60px" height="60px" alt="">
                                            @else
                                                <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" class="rounded-circle" width="60px" height="60px" alt="">
                                            @endif
                                        </div>
                                        <div class="col-md-8">
                                            <h3>{{ Auth::user()->name }}</h3>
                                            <h3>{{ Auth::user()->email }}</h3>
                                            <h3>{{ Auth::user()->telp }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-5">
                                    <div class="row justify-content-between">
                                        <div class="col-md-8">
                                            <h3 class="pb-3"> Jenis Kelamin </h3>
                                            <h3 class="pb-3"> Provinsi</h3>
                                            <h3 class="pb-3"> Kodepos</h3>
                                            <h3 class="pb-3"> Tanggal Lahir</h3>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="pb-3"> {{Auth::user()->jenis_kelamin}}
                                                <h3 class="pb-3"> {{Auth::user()->provinsi}}  </h3>
                                                <h3 class="pb-3"> {{Auth::user()->kode_pos}}  </h3>
                                                <h3 class="pb-3"> {{Auth::user()->tanggal_lahir}}  </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            @if($dataKonsultasi->isEmpty() == true)
                            <div class="card p-5">
                                <div class="row text-center">
                                    <h1 class="text-center p-5"> Konsultasi dengan Dokter </h1>
                                    <h3> Anda belum pernah konsultasi dengan dokter !! Konsultasi sekarang </h3>
                                    <div class="mt-4 text-center">
                                        <h3 class="text-center justify-content-center pb-5">
                                            <a href="{{route('konsultasi.create')}}" class="bg-primary p-3 text-light rounded">
                                            Konsultasi Sekarang   </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            @elseif($dataKonsultasi->isEmpty() == false)
                                <div class="card p-5">
                                    <div class="row">
                                        <div class="col-md-12 p-3 row">
                                            <div class="col-md-6 ">
                                                <h2 class="text-left"> Konsultasi Kamu</h2>
                                            </div>
                                            <div class="col-md-6 text-end">
                                                <h3 class="text-right">
                                                    <a href="{{route('konsultasi.create')}}" class="bg-primary p-3 text-light rounded">
                                                        Konsultasi Sekarang </a>
                                                </h3>
                                            </div>
                                        </div>
                                        @foreach($dataKonsultasi as $konsultasi)
                                        <div class="col-md-12 row t mt-4  pb-4">
                                            <div class="col-md-1">
                                                @if(Auth::user()->profile_photo_path == null)
                                                    <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" class="rounded-circle" width="60px" height="60px" alt="">
                                                @else
                                                    <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" alt="" class="rounded-circle" width="60px" height="60px">
                                                @endif
                                            </div>
                                                <div class="col-md-10 text-left">
                                                    <a href="{{route('konsultasi.show',$konsultasi->id)}}">
                                                        <h2>{{$konsultasi->judulKonsultasi}}</h2>
                                                        <p>Pertanyaan : {{$konsultasi->ditulisOleh}} | {{$konsultasi->created_at->diffForHumans()}}</p>
                                                    </a>
                                                </div>
                                        </div>
                                            <div class="col-md-12 py-4 fs-3">
                                                {!! $konsultasi->pertanyaan !!}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                        </div>

                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                @if($dataKonsultasi->isEmpty() == true)
                                    <div class="card p-5">
                                        <div class="row text-center">
                                            <h1 class="text-center p-5"> Buat Janji dengan Dokter </h1>
                                            <h3> Anda belum pernah membuat janji dengan dokter !! Buat Janji sekarang </h3>
                                            <div class="mt-4 text-center">
                                                <h3 class="text-center justify-content-center pb-5">
                                                    <a href="{{route('konsultasi.create')}}" class="bg-primary p-3 text-light rounded">
                                                        Buat Janji Sekarang   </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection

@section('footer')
    <footer class="fixed-bottom">
        <h2>© Copyright Webdev. All Rights Reserved</h2>
    </footer>
@endsection

@section('opsionalCss')

@endsection
