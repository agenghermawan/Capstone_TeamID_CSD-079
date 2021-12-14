@extends('layouts.app')

@section('css')


@endsection
@section('content')
    @include('sweetalert::alert')
    <h4 class="mt-4 text-base font-semibold py-2"> Data Dokter </h4>
    <div class="bg-white grid rounded-lg grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-7">
        <div class="col-span-1 flex items-center border-r">
            <div class="image w-1/4 ">
                @if($data -> profile_photo_path == null)
                    <img src="{{asset('image/avatar doktor.jpg')}}" class="w-20 h-20 rounded-full" alt="">
                @else
                    <img src="{{ asset('image/profile.jpg') }}" class="w-20 h-20 rounded-full " alt="">
                @endif
            </div>
            <div class="name">
                <h4 class="text-blue-700 text-base tracking-wide"> Ageng Hermawan </h4>
                <h4 class="text-blue-500 text-sm tracking-wide"> Dokter Anak </h4>
            </div>
        </div>
        <div class="col-span-1 border-r px-4">
            <h4 class="text-sm text-blue-700 font-normal"> Kontak Detail </h4>
            <ul class="list-none mt-2 text-sm font-normal text-blue-400">
                <li> {{$data->email}} </li>
                <li> {{$data->status}}</li>
                <li> {{$data->telp}}</li>
            </ul>
        </div>
        <div class="col-span-1 flex items-center justify-center text-center">
            <div class="p-5">
                <h5 class="text-blue-700"> 20K </h5>
                <p class="text-blue-400 text-sm"> Pasien </p>
            </div>
            <div class="p-5">
                <h5 class="text-blue-700"> 20K </h5>
                <p class="text-blue-400 text-sm"> Pasien </p>
            </div>
            <div class="p-5">
                <h5 class="text-blue-700"> 20K </h5>
                <p class="text-blue-400 text-sm "> Pasien </p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-3 md:grid-cols-2 xl:grid-cols-2 mt-4">
        <div class="left-element-detail bg-white col-span-1 p-10">
            <p class=" text-base text-blue-500 "> <i class="fas fa-user-shield"></i> Profile </p>
        <form action="{{route('dokter.update', $data->id)}}" method="POST">
            @method('PUT')
                @csrf
            <div class="form mt-4 text-blue-600 grid grid-cols-1 md:grid-cols-2 gap-4 xl:grid-cols-2">
                <div class="form-group">
                    <label for="name" class="block text-sm text-blue-400"> Nama Anda : </label>
                    <input type="text" class="border-blue-300 w-full bg-blue-50 rounded mt-2" name="name" value="{{$data->fullname}}">
                </div>
                @error('fullname')
                 <p class="text-red-500 text-sm"> {{$message}} </p>
                @enderror
                <div class="form-group">
                    <label for="email" class="block text-sm text-blue-400"> Email : </label>
                    <input type="text" class="border-blue-300 bg-blue-50 w-full rounded mt-2" name="email" value="{{$data->email}}">
                </div>
            </div>
            <div class="form mt-4 text-blue-600 grid grid-cols-1 ">
                <div class="form-group">
                    <label for="alamat" class="block text-sm text-blue-400"> Alamat : </label>
                    <input type="text" name="alamat" value="{{$data->alamat}}" class="border-blue-300  bg-blue-50 w-full rounded mt-2">
                </div>

            </div>
            <div class="form mt-4 text-blue-600 grid grid-cols-1 md:grid-cols-2 gap-4 xl:grid-cols-2">
                <div class="form-group">
                    <label for="" class="block text-sm text-blue-400"> Jenis Kelamin</label>
                    <select class="mt-2 border-blue-300  bg-blue-50 py-3 text-sm tracking-wide w-full rounded" name="jenis_kelamin">
                        <option value="Laki-Laki"> Laki Laki </option>
                        <option value="Perempuan"> Perempuan </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kota" class="block text-sm text-blue-400"> Kota : </label>
                    <input type="text" name="kota" value="{{$data->kota}}" class="border-blue-300 bg-blue-50 w-full rounded mt-2">
                </div>
            </div>
            <div class="form mt-4 text-blue-600 grid grid-cols-1 ">
                <div class="form-group">
                    <label for="deskripsi" class="block text-sm text-blue-400"> Description :</label>
                    <textarea name="deskripsi" class="rounded w-full bg-blue-50 border-blue-300 mt-2" id="" rows="2"></textarea>
                </div>
            </div>
            <div class="tindakan border-t border-gray-300 pt-5">
                <h5 class="text-sm text-blue-400 mb-2"> Pengalaman Praktik </h5>
                <div class="repeater">
                    <div data-repeater-list="pengalamanPraktik">
                        <div data-repeater-item>
                            <div class="flex -mx-3 md:mb-6">
                                <div class="w-full md:flex md:flex-wrap px-3 mb-6 md:mb-0">
                                    <input
                                        class="rounded w-full  text-black-700 border-gray-300 mr-2 focus:border-none py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500 md:w-3/4"
                                        name="pengalamanPraktik" type="text" placeholder="Pengalaman Praktik anda">

                                    <button data-repeater-delete type="button"
                                            class="rounded md:1/4 text-blue-700 border-blue-300 focus:border-none py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500"
                                            value="Delete" /> <i class="fas fa-trash mr-1"></i> Hapus </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button data-repeater-create type="button" value="Add"
                            class="rounded md:1/4 text-blue-400 border-blue-300 focus:border-none py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500" />
                    <i class="fas fa-plus-square mr-1"></i> Tambahkan Pengalaman Praktik </button>
                </div>
            </div>
            <div class="tindakan border-t border-gray-300 pt-5">
                <h5 class="text-sm text-blue-400"> Riwayat Pendidikan  Medis</h5>
                <div class="repeater">
                    <div data-repeater-list="riwayatPendidikan">
                        <div data-repeater-item>
                            <div class="flex -mx-3 md:mb-6">
                                <div class="w-full md:flex md:flex-wrap px-3 mb-6 md:mb-0">
                                    <input
                                        class="rounded w-full  text-black-700 border-gray-300 mr-2 focus:border-none py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500 md:w-3/4"
                                        name="riwayatPendidikan" type="text" placeholder="Riwayat pendidikan medis anda ">

                                    <button data-repeater-delete type="button"
                                            class="rounded md:1/4 text-blue-700 border-blue-300 focus:border-none py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500"
                                            value="Delete" /> <i class="fas fa-trash mr-1"></i> Hapus </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button data-repeater-create type="button" value="Add"
                            class="rounded md:1/4 text-blue-400 border-blue-300 focus:border-none py-3 px-4 mb-3 focus:bg-white transform transition hover:scale-105 duration-500" />
                    <i class="fas fa-plus-square mr-1"></i> Tambahkan Riwayat Pendidikan  </button>
                </div>
            </div>

            <div class="form mt-4 text-blue-600 grid grid-cols-1 ">
                <div class="form-group">
                    <button type="submit" class="rounded p-2 from-blue-300 bg-gradient-to-b to-purple-200 shadow-lg text-white w-32">
                        Submit
                    </button>
                </div>
            </div>
        </form>
        </div>

        <div class="left-element-detail col-span-1 w-full bg-white pt-10 ">
            <p class="text-base text-blue-500 mt-4 ml-10"><i class="fas fa-user mr-2"></i> Profile Data Anda </p>
            <div class="content p-10">
                <div class="space-y-4">
                        <div class="border-l-4 border-blue-500 border-opacity-100 border-solid  pl-4 flex w-full flex-wrap">
                            <div class="item w-full md:w-1/2 text-base text-blue-400 mb-2">
                                <h4 class="text-blue-600"> Nama  </h4>
                                <p> {{$data->fullname}} </p>
                            </div>
                        </div>
                        <div class="border-l-4 border-blue-500 border-opacity-100 border-solid  pl-4 flex w-full flex-wrap">
                            <div class="item w-full md:w-1/2 text-base text-blue-400 mb-2">
                                <h4 class="text-blue-600"> Nama  </h4>
                                <p> {{$data->telp}} </p>
                            </div>
                        </div>
                        <div class="border-l-4 border-blue-500 border-opacity-100 border-solid  pl-4 flex w-full flex-wrap">
                            <div class="item w-full md:w-1/2 text-base text-blue-400 mb-2">
                                <h4 class="text-blue-600"> Nama  </h4>
                                <p> {{$data->sebagaiDokter}} </p>
                            </div>
                        </div>
                          <div class="border-l-4 border-blue-500 border-opacity-100 border-solid  pl-4 flex w-full flex-wrap">
                            <div class="item w-full md:w-1/2 text-base text-blue-400 mb-2">
                                <h4 class="text-blue-600"> Alamat  </h4>
                                <p> {{$data->alamat}} </p>
                            </div>
                        </div>
                        <div class="border-l-4 border-blue-500 border-opacity-100 border-solid  pl-4 flex w-full flex-wrap">
                            <div class="item w-full md:w-1/2 text-base text-blue-400 mb-2">
                                <h4 class="text-blue-600"> No Str  </h4>
                                <p> {{$data->noStr}} </p>
                            </div>
                        </div>
                        <div class="border-l-4 border-blue-500 border-opacity-100 border-solid  pl-4 flex w-full flex-wrap">
                            <div class="item w-full md:w-1/2 text-base text-blue-400 mb-2">
                                <h4 class="text-blue-600"> Email  </h4>
                                <p> {{$data->email}} </p>
                            </div>
                        </div>
                        <div class="border-l-4 border-blue-500 border-opacity-100 border-solid  pl-4 flex w-full flex-wrap">
                            <div class="item w-full md:w-1/2 text-base text-blue-400 mb-2">
                                <h4 class="text-blue-600"> Kota  </h4>
                                <p> {{$data->kota}} </p>
                            </div>
                        </div>

                        <div class="border-l-4 border-blue-500 border-opacity-100 border-solid  pl-4 flex w-full flex-wrap">
                            <div class="item w-full md:w-1/2 text-base text-blue-400 mb-2">
                                <h4 class="text-blue-600"> Pengalaman Praktik  </h4>
                                @foreach($data->pengalamanPraktik as $item)
                                    <p> {{$item['pengalamanPraktik']}} </p>
                                @endforeach
                            </div>
                        </div>
                        <div class="border-l-4 border-blue-500 border-opacity-100 border-solid  pl-4 flex w-full flex-wrap">
                            <div class="item w-full md:w-1/2 text-base text-blue-400 mb-2">
                                <h4 class="text-blue-600"> Riwayat Pendidikan  </h4>
                                @foreach($data->riwayatPendidikan as $itempendidikan)
                                    <p> {{$itempendidikan['riwayatPendidikan']}}  </p>
                                @endforeach
                            </div>
                        </div>
                    <div class="bg-white col-span-1 rounded shadow-sm md:pt-4">
                        <h4 class="text-blue-500"> Deskripsi / Informasi Lainnya </h4>
                        <div class="mt-3 text-blue-900">
                            <p class="text-justify text-sm">{!! $data->deskripsi !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-5">
        <div class="bg-white col-span-1 rounded shadow-sm p-10">
            <h1 class="mb-5 text-blue-500"> Daftar Pasien Terkahir </h1>
            @for ($i = 0; $i < 3; $i++)
                <div class="content flex w-full mb-5 ">
                    <div class="w-full flex  md:w-3/4">
                        <div class="image">
                            <img src="{{ asset('image/profile.jpg') }}" class="w-12 h-12 rounded-full" alt="">
                        </div>
                        <div class="text pl-4">
                            <h4> Ageng Hermawan </h4>
                            <p> 10:00 - 12:00</p>
                        </div>
                    </div>
                    <div class="w-full   md:1/4 flex justify-end">
                        <h4> Detail </h4>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
