<!-- Navigation -->

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-5">
        <a class="navbar-brand d-flex " href="{{ route('LandingPage') }}">
            <img src="{{ asset('icon/consultation.png') }}" width="30" height="30" class="d-inline-block align-top"
                alt="">
            <div class="brand" style="margin-left: 20px">
                <h2 class="pt-2 "> SEHATKU </h2>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('LandingPage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('artikel_frontend') }}">Article</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class=" dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            Info
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item fs-4 px-5 py-2" href="{{route('obat_frontend')}}"><i class="fas fa-capsules text-primary  "></i> Obat</a></li>
                            <li><a class="dropdown-item fs-4 px-5 py-2" href="{{route('listpenyakit.frontend')}}"><i class="fas fa-viruses text-primary "></i> Penyakit</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('rumahSakit_frontend') }}">Rumah Sakit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dataCovid_frontend') }}">Covid</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('tanyaDokter.index')}}">Konsultasi</a>
                </li>
                @auth
                    <li class="nav-item">
                        <div class="dropdown  dropstart static-top">
                            <a class="dropdown-toggle  nav-link" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1" style="font-size: 12px">

                            @if (Auth::user()->role_pengguna == 'Dokter')
                                 <?php
                                    $data = App\Models\User::with('dokter')->find(Auth::user()->id);
                                    ?>
                                    @if(empty($data->dokter))
                                             <li>
                                                 <a class="dropdown-item fs-3 l px-5" style="font-size: 10px"
                                                    href="{{ route('callbacDocter') }}">Lanjutkan Pendaftaran</a>
                                             </li>
                                        @endif
                                     @if(empty($data->dokter) == null)
                                         @if($data->dokter->status == 'non-active')
                                             <li>
                                                 <a class="dropdown-item fs-3 l px-5" style="font-size: 10px;pointer-events: none"
                                                    href="{{ route('callbacDocter') }}"><i class="fas text-primary fa-clock mr-4"></i> Menunggu Persetujuan</a>
                                             </li>
                                         @elseif($data->dokter->status == 'active')
                                             <li>
                                                 <a class="dropdown-item fs-4 px-5" style="font-size: 10px"
                                                    href="{{ route('dashboard') }}"><i class="fas text-primary fa-clinic-medical mr-4"></i> Dashboard Dokter</a>
                                             </li>
                                         @endif
                                     @endif
                                @endif
                                @if(Auth::user()->role_pengguna == 'Pengguna')
                                    <li>
                                        <a class="dropdown-item fs-4  px-5" style="font-size: 10px"
                                           href="{{ route('user.index') }}"><i class="fas text-primary fa-clinic-medical mr-4"></i> Dashboard Anda</a>
                                    </li>
                                @endif
                                @if(Auth::user()->role_pengguna == 'Admin')
                                    <li>
                                        <a class="dropdown-item fs-4  px-5" style="font-size: 10px"
                                           href="{{ route('dashboard') }}"> <i class="fas text-primary fa-clinic-medical mr-4"> </i> Dashboard Anda</a>
                                    </li>
                                @endif
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="dropdown-item fs-4 px-5" type="submit"><i class="fas fa-sign-out-alt text-primary mr-4"></i> Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endauth

                @guest
                    <li class="nav-item d-flex ">
                        <div class="signup mr-5">
                            <a class="nav-link px-5" style="border-radius: 100px" href="{{ route('register') }}">
                                Sign Up
                            </a>
                        </div>
                        <div class="signup">
                            <a class=" nav-link text-light py-3  px-5" style="border-radius: 100px;background-color:#1a77cc"
                                href="{{ route('login') }}">
                                Sign In
                            </a>
                        </div>

                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</div>
