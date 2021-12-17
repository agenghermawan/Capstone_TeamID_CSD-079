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
</head>

<body style="font-family: 'Poppins', sans-serif;background-color:#f6f8fd">
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
                        <form action="{{ route('login') }}" method="POST" class="mt-5">
                            @csrf
                            <div class="col-md-12">
                                <div class="from-group mb-2 col-md-12">
                                    <label for="" class="mb-1"> Email address</label>
                                    <input type="text" name="email" class="form-control"
                                        style="width: 400px;border-radius:50px; border:1px solid lightblue" placeholder="">
                                    @error('email')
                                        <p class="text-sm text-red-300"> {{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="from-group">
                                    <label for="" class="mb-1"> Password</label>
                                    <input type="password" name="password" class="form-control"
                                        style="width: 400px;border-radius:50px; border:1px solid ligtblue" placeholder="">
                                    @error('password')
                                        <p class="text-sm text-red-300"> {{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="from-group my-3">
                                    <a href="" class="text-decoration-none"> Lupa Password </a>
                                </div>
                                <div class="from-group mb-3">
                                    <button type="submit"
                                        class="form-control bg-primary text-center text-light text-decoration-none"
                                        style="width: 400px;border-radius:50px; border:1px solid gray"> Masuk </button>
                                </div>
                                <div class="from-group">
                                    <a class="form-control bg-light text-center text-decoration-none"
                                        style="width: 400px;border-radius:50px; border:1px solid gray"
                                        href="{{ route('register') }}"> Daftar Akun </a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>

    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Name')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password')" />

            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
                required />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-button class="ml-4">
                {{ __('Register') }}
            </x-button>
        </div>
    </form> --}}
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
