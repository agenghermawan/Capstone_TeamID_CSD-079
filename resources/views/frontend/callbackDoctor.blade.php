<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Register</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

</head>

<body style="font-family: 'Poppins', sans-serif;background-color:#f6f8fd">
    @include('sweetalert::alert')
    <!-- Optional JavaScript; choose one of the two! -->
    <div style="height: 100vh">
        <div class="container-fluid d-flex  align-items-center" style="height: 100%; ">
            <div class="row col-md-12">
                <div class="col-md-6 d-flex">
                    <img src="{{ asset('image/PikPng.com_medical-png_832417.png') }}" width="100%" height="100%"
                        alt="">
                </div>
                <div class="col-md-6">
                    <div class="p-5" style="width: 100%;background-color: #ffffff">
                        <h4> Start Today</h4>
                        <h6> Because tomorrow become never</h6>
                        <form action="{{ route('dokter.store') }}" method="POST" class="mt-5">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="from-group mb-2 col-md-12">
                                            <label for="" class="mb-1"> Nama Panjang Anda (Cantumkan
                                                Gelar)</label>
                                            <input type="text" name="fullname" class="form-control"
                                                style="width: 400px;border-radius:50px; border:1px solid gray" required
                                                placeholder="">
                                            @error('name')
                                                <p class="text-xs text-red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="from-group mb-2 col-md-12">
                                            <label for="" class="mb-1"> No Telp</label>
                                            <input type="text" name="telp" class="form-control"
                                                style="width: 400px;border-radius:50px; border:1px solid gray" required
                                                value="{{ Auth::user()->telp }}" placeholder="">
                                            @error('name')
                                                <p class="text-xs text-red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="from-group mb-2 col-md-12">
                                            <label for="" class="mb-1"> Alamat</label>
                                            <input type="text" name="alamat" class="form-control"
                                                style="width: 400px;border-radius:50px; border:1px solid gray" required
                                                value="{{ Auth::user()->alamat }}" placeholder="">
                                            @error('email')
                                                <p class="text-xs text-red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <a class="form-control mt-2 bg-primary text-center text-light text-decoration-none"
                                            required style="width: 400px;border-radius:50px; border:1px solid gray"
                                            id="continue"> Continue
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from-group mb-2 col-md-12">
                                            <label for="" class="mb-1"> Masukkan No Str (Dokter)</label>
                                            <input type="text" name="noStr" class="form-control"
                                                style="width: 400px;border-radius:50px; border:1px solid gray" required
                                                value="" placeholder="">
                                            @error('email')
                                                <p class="text-xs text-red">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="from-group mb-2 col-md-12">
                                            <label for="" class="mb-1"> Email address</label>
                                            <input type="text" name="email" class="form-control"
                                                style="width: 400px;border-radius:50px; border:1px solid gray" required
                                                value="{{ Auth::user()->email }}" placeholder="">
                                            @error('email')
                                                <p class="text-xs text-red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="from-group mb-2 col-md-12">
                                            <label for="" class="mb-1"> Kota</label>
                                            <input type="text" name="kota" class="form-control"
                                                style="width: 400px;border-radius:50px; border:1px solid gray" required
                                                value="" placeholder="">
                                            @error('kota')
                                                <p class="text-xs text-red">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="next" style="display: none">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="from-group mb-2 col-md-12" id="strhide">
                                            <label for="" class="mb-1">Asal Rumah Sakit</label>
                                            <select class="form-control" name="rumahSakit"
                                                id="exampleFormControlSelect1" name="role_pengguna"
                                                style="width: 400px;border-radius:50px; border:1px solid gray" required>
                                                <option value="Pengguna">Rumah Sakit Permata</option>
                                                <option value="Dokter">Rumah Sakit Marinir</option>
                                                <option value="Dokter">Rumah Sakit Premier</option>
                                            </select>
                                        </div>
                                        <button
                                            class="form-control mt-2 bg-primary text-center text-light text-decoration-none"
                                            required style="width: 400px;border-radius:50px; border:1px solid gray"
                                            type="submit">
                                            Submit
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-6">
                                            <div class="from-group mb-2 col-md-12">
                                                <label for="" class="mb-1"> Sebagai Dokter</label>
                                                <input type="text" name="sebagaiDokter" class="form-control"
                                                    style="width: 400px;border-radius:50px; border:1px solid gray"
                                                    required value="" placeholder="">
                                                @error('name')
                                                    <p class="text-xs text-red">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        $("#continue").click(function() {
            $(".next").show("slow");
            $("#continue").hide("slow");
        });
        // $("#back").click(function() {
        //     $(".form").show("slow");
        //     $("#next").hide("slow");
        // });

        // $("select")
        //     .change(function() {
        //         var data = $("#exampleFormControlSelect1").val();
        //         // $isi = $('#str').text(data);
        //         if (isi = 'Dokter') {
        //             $("#strhide").hide("slow");
        //             $("#strhide").show("slow");
        //         } else if (isi = 'Pengguna') {
        //             $("#strhide").hide("slow");
        //         }
        //     })
        //     .trigger("change");
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
