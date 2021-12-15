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
    <title>Hello, world!</title>
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
                    <div style="padding: 5%">
                        <h4 class="mb-3"> Rumah Sakit Cilandak</h4>
                        <div class="d-flex gap-2">
                                <img src="{{asset('image/rumahsakit.jpg')}}" class="rounded shadow-md image" width="250px" height="200px" style="object-fit: cover" alt="">
                                <p class="align-items-start d-flex text-justify" style="color: "> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                        </div>
                        <div class="maps">
                        </div>
                        <div class="card p-3 mb-2 mt-2 shadow" style="background-color: #b9c3fe">
                            <h5> Lorem Ipsum is simply dummy text of </h5>
                        </div>
                        <div class="card p-3 shadow mb-2" style="background-color: #F5F5F7">
                            <h6> Waktu </h6>
                           <p style="font-size: 14px">  Tanggal : Senin 25 September 2000 <br>
                            Jam : 10:00 - 20:00</p>
                        </div>
                        <div class="card p-3 shadow mb-2" style="background-color: #F5F5F7">
                            <h6> Poli Anak </h6>
                           <p style="font-size: 12px"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                        </div>
                        <div class="card p-3 shadow" style="background-color: #F5F5F7">
                            <h6> Tindakan Medis </h6>
                            <ul style="font-size: 12px">
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md item-informasi" >
                    <div class="image d-flex align-items-center">
                        <img src="{{asset('icon/consultation.png')}}" width="40px" alt="">
                        <h4 class="pt-2"> SEHATKU</h4>
                    </div>
                    <h5> Buat Janji Dokter</h5>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email  :</label>
                                        <input type="email" name="email" class="form-control " id="exampleInputEmail1" value="{{Auth::user()->email}}" aria-describedby="emailHelp" >
                                        <div id="emailHelp" class="form-text fs-6">We'll never share your email with anyone else.</div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama  :</label>
                                        <input type="email" name="nama" class="form-control " value="{{Auth::user()->name}}" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat  :</label>
                                    <input type="email" name="alamat" class="form-control " value="{{Auth::user()->alamat}}" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Provinsi  :</label>
                                    <input type="text" name="provinsi" class="form-control " value="{{Auth::user()->provinsi}}" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kode Pos  :</label>
                                    <input type="text" name="kode_pos" class="form-control " value="{{Auth::user()->kode_pos}}" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir  :</label>
                                    <input type="text" name="tanggal_lahir" class="form-control " value="{{date('l, d F Y', strtotime(Auth::user()->tanggal_lahir))}}" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Telp  :</label>
                                    <input type="text" name="telp" class="form-control " value="{{Auth::user()->telp}}" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Masukkan No KTP</label>
                                    <input type="text" name="ktp" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kota</label>
                                    <input type="text" name="kota" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
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
                                        <button type="button" class="btn btn-primary">Buat Janji Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
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
x
</body>
</html>
