<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard Sehatku</title>
    @include('layouts.style')
    <script src="https://cdn.tiny.cloud/1/tmrao508v4qd0k76bb3ztge1vkvrlu25nec5c1fzm5tftz7y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    @yield('texteditor')
</head>

<body style="font-family: 'Poppins', sans-serif;" >
<div>
    <div class="flex h-screen overflow-y-hidden bg-white" x-data="setup()" x-init="$refs.loading.classList.add('hidden')">
        <!-- Loading screen -->
        <div
            x-ref="loading"
            class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50"
            style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"
        >
            Loading.....
        </div>

        <!-- Sidebar backdrop -->
        <div
            x-show.in.out.opacity="isSidebarOpen"
            class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden"
            style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"
        ></div>

        <!-- Sidebar -->
        <aside style="background-color: #273264;border-top-right-radius: 50px "
            x-transition:enter="transition transform duration-300"
            x-transition:enter-start="-translate-x-full opacity-30  ease-in"
            x-transition:enter-end="translate-x-0 opacity-100 ease-out"
            x-transition:leave="transition transform duration-300"
            x-transition:leave-start="translate-x-0 opacity-100 ease-out"
            x-transition:leave-end="-translate-x-full opacity-0 ease-in"
            class="fixed inset-y-0 z-10 flex flex-col flex-shrink-0 w-64 max-h-screen overflow-hidden transition-all text-blue-300 transform bg-white border-r shadow-lg lg:z-auto lg:static lg:shadow-none"
            :class="{'-translate-x-full lg:translate-x-0 lg:w-20': !isSidebarOpen}"
        >
            <!-- sidebar header -->
            <div class="flex items-center justify-between flex-shrink-0 p-2"  :class="{'lg:justify-center': !isSidebarOpen}">
          <span class="p-2 text-xl font-semibold leading-8 tracking-wider uppercase whitespace-nowrap">
            <span :class="{'lg:hidden': !isSidebarOpen}"> <img src="{{asset('icon/consultation.png')}}" class="w-24 h-24 animate-bounce text-center"></span>
          </span>
                <button @click="toggleSidbarMenu()" class="p-2 rounded-md lg:hidden">
                    <svg
                        class="w-6 h-6 text-gray-600"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- Sidebar links -->
            <nav class="flex-1 overflow-hidden hover:overflow-y-auto">
                <ul class="p-2 overflow-hidden">
                    @if(Auth::user()->role_pengguna == 'Dokter')
                    <li>
                        <a
                            href="{{ route('dashboard') }}"
                            class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                            :class="{'justify-center': !isSidebarOpen}"
                        >
                            <i class="fas fa-briefcase-medical mr-2"></i>
                            <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Dashboard
                            </span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('dokter.index') }}"
                            class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                            :class="{'justify-center': !isSidebarOpen}"
                        >
                            <i class="fas fa-hospital-user  mr-2"></i>
                            <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Dokter
                            </span>
                        </a>
                    </li>
                        <li>
                            <a
                                href="{{ route('konsultasi-dokter.index') }}"
                                class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                                :class="{'justify-center': !isSidebarOpen}"
                            >
                                <i class="fas fa-comment-medical mr-2"></i>
                                <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Konsultasi
                            </span>
                            </a>
                        </li>
                    <li>
                        <a
                            href="{{ route('janji-dokter.index') }}"
                            class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                            :class="{'justify-center': !isSidebarOpen}"
                        >
                            <i class="fas fa-handshake mr-2"></i>
                            <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Janji Temu
                            </span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('artikel.index') }}"
                            class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                            :class="{'justify-center': !isSidebarOpen}"
                        >
                            <i class="fas fa-newspaper mr-2"></i>
                            <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Artikel
                            </span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('obat.index') }}"
                            class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                            :class="{'justify-center': !isSidebarOpen}"
                        >
                            <i class="fas fa-capsules mr-2"></i>
                            <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Obat
                            </span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('penyakit.index') }}"
                            class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                            :class="{'justify-center': !isSidebarOpen}"
                        >
                            <i class="fas fa-procedures mr-2"></i>
                            <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Penyakit
                            </span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('backendGetDataCovid') }}"
                            class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                            :class="{'justify-center': !isSidebarOpen}"
                        >
                            <i class="fas fa-virus mr-2"></i>
                            <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Covid Info
                            </span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('kategori-obat.index') }}"
                            class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                            :class="{'justify-center': !isSidebarOpen}"
                        >
                            <i class="fas fa-briefcase-medical mr-2"></i>
                            <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Kategori Obat
                            </span>
                        </a>
                    </li>
                        @else
                        <li>
                            <a
                                href="{{ route('dashboard') }}"
                                class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                                :class="{'justify-center': !isSidebarOpen}"
                            >
                                <i class="fas fa-briefcase-medical mr-2"></i>
                                <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Dashboard
                            </span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{ route('rumahSakit.index') }}"
                                class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                                :class="{'justify-center': !isSidebarOpen}"
                            >
                                <i class="fas fa-hospital mr-2"></i>
                                <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Rumah Sakit
                            </span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{ route('konsultasi-dokter.index') }}"
                                class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                                :class="{'justify-center': !isSidebarOpen}"
                            >
                                <i class="fas fa-comment-medical mr-2"></i>
                                <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Konsultasi
                            </span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{ route('dokter.index') }}"
                                class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                                :class="{'justify-center': !isSidebarOpen}"
                            >
                                <i class="fas fa-hospital-user  mr-2"></i>
                                <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Dokter
                            </span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{ route('poliklinik.index') }}"
                                class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                                :class="{'justify-center': !isSidebarOpen}"
                            >
                                <i class="fas fa-stethoscope  mr-2"></i>
                                <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Poli Klinik
                            </span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{ route('pengguna.index') }}"
                                class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                                :class="{'justify-center': !isSidebarOpen}"
                            >
                                <i class="fas fa-user  mr-2"></i>
                                <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Pengguna
                            </span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{ route('janji-dokter.index') }}"
                                class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                                :class="{'justify-center': !isSidebarOpen}"
                            >
                                <i class="fas fa-handshake mr-2"></i>
                                <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Janji Temu
                            </span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{ route('artikel.index') }}"
                                class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                                :class="{'justify-center': !isSidebarOpen}"
                            >
                                <i class="fas fa-newspaper mr-2"></i>
                                <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Artikel
                            </span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{ route('obat.index') }}"
                                class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                                :class="{'justify-center': !isSidebarOpen}"
                            >
                                <i class="fas fa-capsules mr-2"></i>
                                <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Obat
                            </span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{ route('penyakit.index') }}"
                                class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                                :class="{'justify-center': !isSidebarOpen}"
                            >
                                <i class="fas fa-procedures mr-2"></i>
                                <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Penyakit
                            </span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{ route('backendGetDataCovid') }}"
                                class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                                :class="{'justify-center': !isSidebarOpen}"
                            >
                                <i class="fas fa-virus mr-2"></i>
                                <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Covid Info
                            </span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{ route('kategori-obat.index') }}"
                                class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                                :class="{'justify-center': !isSidebarOpen}"
                            >
                                <i class="fas fa-briefcase-medical mr-2"></i>
                                <span :class="{ 'lg:hidden': !isSidebarOpen }">
                                Kategori Obat
                            </span>
                            </a>
                        </li>
                        @endif
                </ul>
            </nav>
            <!-- Sidebar footer -->
            <div class="flex-shrink-0 p-2 border-t max-h-14">
                <form action="{{route('logout')}}" method="post">
                    @csrf
                <button
                    class="flex items-center justify-center w-full px-4 py-2 space-x-1 font-medium tracking-wider uppercase bg-gray-100 border rounded-md focus:outline-none focus:ring"
                >
            <span>
              <svg
                  class="w-6 h-6"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
              >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                />
              </svg>
            </span>
                    <span :class="{'lg:hidden': !isSidebarOpen}"> Logout </span>
                </button>
                </form>
            </div>
        </aside>

        <div class="flex flex-col flex-1 h-full overflow-hidden">
            <!-- Navbar -->
            <header class="flex-shrink-0 border-b">
                <div class="flex items-center justify-between p-2">
                    <!-- Navbar left -->
                    <div class="flex items-center space-x-3">
                        <span class="p-2 text-xl font-semibold tracking-wider uppercase lg:hidden">SEHATKU</span>
                        <!-- Toggle sidebar button -->
                        <button @click="toggleSidbarMenu()" class="p-2 rounded-md focus:outline-none focus:ring">
                            <svg
                                class="w-4 h-4 text-gray-600"
                                :class="{'transform transition-transform -rotate-180': isSidebarOpen}"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                    <div class="relative flex items-center space-x-3">
                        @if(Auth::user()->role_pengguna == 'Dokter')

                            <button
                            @click="isSearchBoxOpen = true"
                            class="p-2 bg-gray-100 rounded-full md:hidden focus:outline-none focus:ring hover:bg-gray-200"
                        >
                            <svg
                                class="w-6 h-6 text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                                />
                            </svg>
                        </button>

                        <div class="items-center hidden space-x-3 md:flex">
                            <div x-data="{ isOpen: false }" class="relative">
                                <div class="absolute right-0 p-1 bg-red-400 rounded-full animate-ping"></div>
                                <div class="absolute right-0 p-1 bg-red-400 border rounded-full"></div>
                                <button
                                @click="isOpen = !isOpen"
                                    class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring"
                                >
                                    <svg
                                        class="w-6 h-6 text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                                        />
                                    </svg>
                                </button>

                                <!-- Dropdown -->
                                <div
                                    style="z-index: 1;
                                    @click.away="isOpen = false"
                                    @keydown.escape="isOpen = false"
                                    x-show.transition.opacity="isOpen"
                                    class="absolute mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max"
                                >
                                    <div class="p-4 text-lg font-medium border-b">SEHATKUAPP & services</div>
                                    <ul class="flex flex-col p-2 my-3 space-y-3">
                                        <li>
                                            <a href="{{route('janji-dokter.index')}}" class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                          <span class="block mt-1">
                            <svg
                                class="w-6 h-6 text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                              <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                              <path
                                  fill="#fff"
                                  d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                              />
                              <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                              />
                            </svg>
                          </span>
                                                <span class="flex flex-col">
                            <span class="text-lg">Janji Temu </span>
                            <span class="text-sm text-gray-400">Daftar Pasien yang ingin Janji Temu dengan anda </span>
                          </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('konsultasi-dokter.index')}}" class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                          <span class="block mt-1">
                            <svg
                                class="w-6 h-6 text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                              <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                              />
                            </svg>
                          </span>
                                                <span class="flex flex-col">
                            <span class="text-lg">Daftar Konsultasi</span>
                            <span class="text-sm text-gray-400"
                            >Daftar Pasien ingin konsultasi dengan dokter</span
                            >
                          </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endif
                        <!-- avatar button -->
                        <div class="relative" x-data="{ isOpen: false }" style="z-index: 1;">
                            <button @click="isOpen = !isOpen" class="p-1 bg-gray-200 rounded-full focus:outline-none focus:ring" >
                                @if(Auth::user()->profile_photo_path != null)
                                    <img src="{{ Storage::url(Auth::user()->profile_photo_path) }}" class="w-8 h-8 rounded-full object-cover" alt="{{Auth::user()->name}}">
                                @else
                                <img
                                    class="object-cover w-8 h-8 rounded-full"
                                    src="{{asset('image/avatar doktor.jpg')}}"
                                    alt=""
                                />
                                    @endif
                            </button>
                            <!-- green dot -->
                            <div class="absolute right-0 p-1 bg-green-400 rounded-full bottom-3 animate-ping"></div>
                            <div class="absolute right-0 p-1 bg-green-400 border border-white rounded-full bottom-3"></div>

                            <!-- Dropdown card -->
                            <div
                                @click.away="isOpen = false"
                                x-show.transition.opacity="isOpen"
                                class="absolute mt-3 transform -translate-x-full bg-white rounded-md shadow-lg min-w-max " style="z-index: 1;"
                            >
                                <div class="flex flex-col p-4 space-y-1 font-medium border-b">
                                    @php
                                        $dataID = Auth::user()->id;
                                        $getData = \App\Models\User::with('Dokter')->where('id',$dataID)->first();
                                    @endphp
                                    @if(empty($getData->dokter))
                                            <span class="text-gray-800">{{Auth::user()->name}}</span>
                                    @else
                                            <span class="text-gray-800">{{$getData->dokter -> fullname}}</span>
                                        @endif

                                        @if(empty($getData->dokter))
                                            <span class="text-gray-800">{{Auth::user()->email}}</span>
                                        @else
                                            <span class="text-gray-800">{{$getData->dokter -> email}}</span>
                                        @endif
                                </div>
                                <ul class="flex flex-col p-2 my-2 space-y-1">
                                    @if(Auth::user()->role_pengguna == 'Dokter')
                                        <li>
                                            <a href="{{route('dokter.edit', $getData->dokter->id)}}" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Profile</a>
                                        </li>
                                    @endif
                                </ul>
                                <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button href="{{route('logout')}}" class="">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main content -->
            <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
                <!-- Main content header -->
                <div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
                    <h1 class="text-2xl font-semibold whitespace-nowrap">@yield('title')</h1>
                    <div class="space-y-6 md:space-x-2 md:space-y-0">
                        @yield('buttonHeader')
                    </div>
                </div>

                <!-- Start Content -->
                @yield('content')
            </main>
            <!-- Main footer -->
            <footer class="flex items-center justify-between flex-shrink-0 p-4 border-t max-h-14">
                <div>SehatKU &copy; 2020</div>
                <div class="text-sm">
                    Made by
                    <a
                        class="text-blue-400 underline"
                        href=""
                        target="_blank"
                        rel="noopener noreferrer"
                    >CSD-079</a
                    >
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    <script>
        const setup = () => {
            return {
                loading: true,
                isSidebarOpen: false,
                toggleSidbarMenu() {
                    this.isSidebarOpen = !this.isSidebarOpen
                },
                isSettingsPanelOpen: false,
                isSearchBoxOpen: false,
            }
        }
    </script>
</div>
@include('layouts.script')
    @yield('script')
</body>

</html>
