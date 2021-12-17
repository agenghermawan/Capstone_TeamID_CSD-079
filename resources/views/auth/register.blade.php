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
    <!-- Optional JavaScript; choose one of the two! -->
    <div style="height: 100vh">
        <div class="container-fluid d-flex  align-items-center" style="height: 100%; ">
            <div class="row col-md-12">
                <div class="col-md-6 d-flex justify-content-end">
                    <img src="{{ asset('image/kisspng-physician-fotolia-doctor-of-medicine-doctors-and-nurses-5ab5d9e27dafc1.4044242415218672345148.png') }}"
                        width="400px" height="400px" alt="">
                </div>
                <div class="col-md-6">
                    <div class="container p-5" style="width: 500px;background-color: #ffffff">
                        <h4> Start Today</h4>
                        <h6> Because tomorrow become never</h6>
                        <form action="{{ route('register') }}" method="POST" class="mt-5">
                            @csrf
                            <div class="form">
                                <div class="col-md-12">
                                    <div class="from-group mb-2 col-md-12">
                                        <label for="" class="mb-1"> Nama (Maks. 18 karakter)</label>
                                        <input type="text" name="name" class="form-control"
                                            style="width: 400px;border-radius:50px; border:1px solid lightblue" required
                                            placeholder="">
                                        @error('name')
                                            <p class="text-xs text-red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="from-group mb-2 col-md-12">
                                        <label for="" class="mb-1"> Email address</label>
                                        <input type="text" name="email" class="form-control"
                                            style="width: 400px;border-radius:50px; border:1px solid lightblue" required
                                            placeholder="">
                                        @error('email')
                                            <p class="text-xs text-red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="from-group">
                                        <label for="" class="mb-1"> Password</label>
                                        <input type="password" name="password" class="form-control"
                                            style="width: 400px;border-radius:50px; border:1px solid lightblue" required
                                            placeholder="">
                                        @error('password')
                                            <p class="text-xs text-red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="from-group my-3">
                                        <a href="{{route('login')}}" class="text-decoration-none"> Sudah Punya akun ?? login disini </a>
                                    </div>
                                    <div class="from-group mb-3">
                                        <a class="form-control bg-primary text-center text-light text-decoration-none"
                                            required style="width: 400px;border-radius:50px; border:1px solid lightblue"
                                            id="continue"> Continue
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="next-form " id="next" style="display: none">
                                <div class="from-group mb-2 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" class="mb-1">Pengguna atau
                                            Dokter</label>
                                        <select class="form-control" id="exampleFormControlSelect1"
                                            name="role_pengguna"
                                            style="width: 400px;border-radius:50px; border:1px solid lightblue" required>
                                            <option value="Pengguna">Pengguna</option>
                                            <option value="Dokter">Dokter</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="str"></div>
                                {{-- <div class="from-group mb-2 col-md-12" id="strhide" style="display: none">
                                    <label for="" class="mb-1">No Str</label>
                                    <input type="text" name="no_str" class="form-control"
                                        style="width: 400px;border-radius:50px; border:1px solid lightblue" placeholder=""
                                        required>
                                </div> --}}
                                <div class="from-group mb-2 col-md-12">
                                    <label for="" class="mb-1">No Telp</label>
                                    <input type="text" name="telp" class="form-control"
                                        style="width: 400px;border-radius:50px; border:1px solid lightblue" placeholder=""
                                        required>
                                    @error('telps')
                                        <p class="text-xs text-red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="from-group mb-3">
                                    <button class="form-control bg-info text-center text-light text-decoration-none"
                                        style="width: 400px;border-radius:50px; border:1px solid lightblue" type="submit"
                                        id="back">
                                        Back
                                    </button>
                                </div>
                                <button class="form-control bg-primary text-center text-light text-decoration-none"
                                    style="width: 400px;border-radius:50px; border:1px solid lightblue" type="submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        $("#continue").click(function() {
            $("#next").show("slow");
            $(".form").hide("slow");
        });
        $("#back").click(function() {
            $(".form").show("slow");
            $("#next").hide("slow");
        });

        $("select")
            .change(function() {
                var data = $("#exampleFormControlSelect1").val();
                // $isi = $('#str').text(data);
                if (isi = 'Dokter') {
                    $("#strhide").hide("slow");
                    $("#strhide").show("slow");
                } else if (isi = 'Pengguna') {
                    $("#strhide").hide("slow");
                }
            })
            .trigger("change");
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
