<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Buat Janji Sekarang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- CDN Font Awesome  -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <style>
        html,body{
            height: 100%;
            font-family: 'Poppins', sans-serif;
        }
        .form-group{
            margin-bottom: 20px;
        }
    </style>
</head>
<body style="padding: 7%;background-color: #FBFBFB" >
<div class="container">
    <form action="{{route('janji-dokter.store')}}" method="post">
        <input type="hidden" value="{{$dataDokter->id}}" name="dokter_id">
        <input type="hidden" value="{{$dataRumahsakit->id}}" name="rumahsakit_id">
        <input type="hidden" value="{{$dataPoliklinik->id}}" name="poliklinik_id">
        <input type="hidden" value="{{$data['tanggal_janji']}}" name="tanggal_janji">
        <input type="hidden" value="{{$data['jam_janji']}}" name="jam_janji">
        <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
        <input type="hidden" value="Menunggu Persetujuan Dokter" name="status">
        @csrf
    <div class="row">
            <div class="col-md-8">
                <div class="container">
                    <h4 class="mb-4"> Konfirmasi Detail </h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama" class="mb-2"> Nama Pasien </label>
                                <input type="nama" class="form-control" value="{{$data['nama']}}" name="nama"  readonly>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="mb-2"> Email </label>
                                <input type="email" class="form-control" value="{{$data['email']}}" name="email" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ktp" class="mb-2"> No Ktp </label>
                        <input type="text" class="form-control" value="{{$data['ktp']}}" name="ktp" readonly>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_lahir" class="mb-2"> Tanggal Lahir </label>
                                <input type="date" class="form-control" value="{{$data['tanggal_lahir']}}" name="tanggal_lahir" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="provinsi" class="mb-2"> Provinsi </label>
                                <input type="text" class="form-control" value="{{$data['provinsi']}}" name="provinsi" readonly>
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="alamat" class="mb-2"> Alamat </label>
                            <input type="text" class="form-control" value="{{$data['alamat']}}" name="alamat" readonly>
                        </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kota" class="mb-2"> Kota </label>
                                <input type="text" class="form-control" value="{{$data['kota']}}" name="kota" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kode_pos" class="mb-2"> Kode Pos </label>
                                <input type="text" class="form-control" value="{{$data['kode_pos']}}" name="kode_pos" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="telp" class="mb-2"> Telp </label>
                                <input type="text" class="form-control" value="{{$data['telp']}}" name="telp" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="catatan" class="mb-2"> Catatan ( opsional ) </label>
                        <textarea name="catatan" id="" cols="10" rows="2" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="container">
                    <h3> Summary </h3>
                    <div class="rumahsakit gap-2 mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{Storage::url($dataRumahsakit->photo)}}" class="rounded img-thumbnail" width="250px" height="170px" style="object-fit: cover" alt="{{$dataRumahsakit->nama}}">
                            </div>
                            <div class="col-md-6">
                                <h5> {{$dataRumahsakit->nama}}</h5>
                                <p style="font-size: 12px"> {{$dataRumahsakit->alamat}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="rumahsakit  gap-2">
                        <div class="row">
                            <div class="col-md-6">
                                @if($dataDokter->user->profile_photo_path == null)
                                    <img src="{{ asset('image/avatar doktor.jpg') }}" class="rounded img-thumbnail" width="250px" height="200px" style="object-fit: cover" alt="{{$dataDokter->fullname}}">
                                @else
                                    <img src="{{ Storage::url($dataDokter->user->profile_photo_path) }}" class="rounded img-thumbnail" width="250px" height="200px" style="object-fit: cover" alt="{{$dataDokter->fullname}}">
                                @endif
                            </div>
                            <div class="col-md-6">
                                <h5> {{$dataDokter->fullname}}</h5>
                                <p style="font-size: 12px"> {{$dataDokter->telp}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="description my-3">
                        <div class="group d-flex justify-content-between">
                            <p> Tujuan : <p>
                            <p> <strong>  {{$dataPoliklinik->nama}} </strong> </p>
                        </div>
                        <div class="group d-flex justify-content-between">
                            <p> Tanggal Janji : <p>
                                    <p> <strong>  {{date('D d M Y',strtotime($data['tanggal_janji']))}} </strong> </p>
                        </div>
                        <div class="group d-flex justify-content-between">
                            <p> Jam Janji : <p>
                            <p> <strong> {{$data['jam_janji']}}</strong> </p>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary text-light rounded shadow"> Buat Janji Sekarang </button>
                </div>
            </div>
    </div>
    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
