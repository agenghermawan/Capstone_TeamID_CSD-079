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
        .container-fluid{
            height: 100%;
        }
         input{
             height: 42px;
             font-size: 24px;
         }
        .form-control{
            border: 1px solid  #e6e6e6;
        }

        .item-informasi{
            padding-top: 3%;
            padding-left: 5%;
            padding-right: 5%;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
            <div class="row" id="firstPage">
                <div class="col-md" style="background-color: #F5F5F7;height: 100%">
                    <div style="padding:7% 10% 10% 10%">
                        <h4 class="mb-3"> Rumah Sakit Cilandak</h4>
                        <div class="d-flex gap-2">
                                <img src="{{Storage::url($dataRumahSakit->photo)}}" class="rounded shadow-md image" width="100%" height="200px" style="object-fit: cover" alt="">
                        </div>
                         <p class="align-items-start d-flex text-justify mt-4" style="color: "> {!! $dataRumahSakit->tentang !!}</p>
                        <div class="maps">
                        </div>
                        <div class="card p-3 mb-2 mt-2 shadow" style="background-color: #b9c3fe">
                            <h5> {{$dataRumahSakit->alamat}}</h5>
                        </div>
                        <div class="card p-3 shadow mb-2" style="background-color: #F5F5F7">
                            <h6> Waktu </h6>
                           <p style="font-size: 12px">  Tanggal : {{date('D d M Y',strtotime($tanggalJanji))}} <br>
                            Jam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{$jamjanji}}</p>
                        </div>
                        <div class="card p-3 shadow mb-2" style="background-color: #F5F5F7">
                            <h6> Poliklinik </h6>
                            <p style="font-size: 12px"> {{$dataPoliklinik->nama}}</p>
                        </div>
                        <div class="card p-3 shadow" style="background-color: #F5F5F7">
                            <h6> Tindakan Medis </h6>
                            @foreach($dataPoliklinik->tindakanmedis as $item)
                                <ul style="font-size: 12px">
                                    <li>{{$item['tindakanmedis']}}</li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md item-informasi" >
                    <div class="image d-flex align-items-center">
                        <img src="{{asset('icon/consultation.png')}}" width="40px" alt="">
                        <h4 class="pt-2"> SEHATKU</h4>
                    </div>
                    <h5> Buat Janji Dokter</h5>
                    <form action="{{route('konfirmasi.janji')}}" method="post">
                        @csrf
                        @method('post')
                        <input type="hidden" name="tanggal_janji" value="{{$tanggalJanji}}">
                        <input type="hidden" name="jam_janji" value="{{$jamjanji}}">
                        <input type="hidden" name="rumahsakit_id" value="{{$dataRumahSakit->id}}">
                        <input type="hidden" name="poliklinik_id" value="{{$dataPoliklinik->id}}">
                        <input type="hidden" name="dokter_id" value="{{$dataDokter->id}}">

                        <div class="form-group">
                        <div class="col-md-12">
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email  :</label>
                                        <input type="email" name="email" class="form-control " id="email" value="{{Auth::user()->email}}" required>
                                        <div id="emailHelp" class="form-text fs-6">We'll never share your email with anyone else.</div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama  :</label>
                                        <input type="text" name="nama" class="form-control " value="{{Auth::user()->name}}" id="nama"  required >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat  :</label>
                                    <input type="text" name="alamat" class="form-control " value="{{Auth::user()->alamat}}" id="alamat" required>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="provinsi" class="form-label">Provinsi  :</label>
                                    <input type="text" name="provinsi" class="form-control " value="{{Auth::user()->provinsi}}" id="provinsi" required >
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="kode_pos" class="form-label">Kode Pos  :</label>
                                    <input type="text" name="kode_pos" class="form-control " value="{{Auth::user()->kode_pos}}" id="kode_pos"  required >
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir  :</label>
                                    <input type="date" name="tanggal_lahir" class="form-control " value="{{date('l, d F Y', strtotime(Auth::user()->tanggal_lahir))}}" id="tanggal_lahir" required >
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="telp" class="form-label">Telp  :</label>
                                    <input type="text" name="telp" class="form-control " value="{{Auth::user()->telp}}" id="telp"  required >
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="ktp" class="form-label">Masukkan No KTP</label>
                                    <input type="text" name="ktp" class="form-control" id="ktp"  required>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="kota" class="form-label">Kota</label>
                                    <input type="text" name="kota" class="form-control" id="kota"  required>
                                </div>
                            </div>
                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Buat Janji
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Buat Janji</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah kamu sudah yakin ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                        <button type="submit" class="btn btn-primary">Selanjutnya Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

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
