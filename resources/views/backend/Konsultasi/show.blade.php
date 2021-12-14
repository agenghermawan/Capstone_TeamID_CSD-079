@extends('layouts.app')

@section('title')
    Daftar Konsultasi
@endsection
@section('buttonHeader')
    <div x-data="{ open: false }">
        <button x-on:click="open = ! open" class="bg-gradient-to-r  md:justify-items-end from-blue-300 to-blue-200 p-2 w-64 rounded">Daftar Konsultasi <i class="fas fa-chevron-circle-down"></i></button>
        <div x-show="open" x-transition>
            <uli>
                <li class="bg-white space-y-1 flex flex-col absolute">
                    <a href="{{route('dokter_daftarPermintaan')}}" class="py-2"> Daftar Permintaan </a>
                    <a href="" class="py-2"> Dokter Aktif </a>
                    <a href="{{route('dokter.create')}}" class="py-2"> Tambahkan Dokter</a>
                </li>
            </uli>
        </div>
    </div>
@endsection
@section('content')
    @include('sweetalert::alert')
    <div class="md:w-1/2 w-full bg-white shadow-md rounded-lg">
        <div class="p-10">
                <form action="{{route('konsultasi-dokter.update', $data->id)}}" method="post">
                    @csrf
                    @method('put')
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                        <div class="header flex pb-5">
                    <div class="image">
                        @if(Auth::user()->profile_photo_path == null)
                            <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" class="rounded-full" width="60px" height="60px" alt="">
                        @else
                            <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" alt="" class="rounded-full" width="60px" height="60px">
                        @endif
                    </div>
                    <div class="name ml-4 mt-1">
                       <h3> Pertanyaan dari {{ $data->ditulisOleh }} </h3>
                        <p class="text-sm text-blue-700"> {{ $data->created_at->diffForHumans() }}</p>
                    </div>
                </div>
                <div class="deskripsi border-t border-blue-50 pt-5">
                    <p> Pertanyaan  sebagai berikut:</p>
                    <div class="pt-3">
                         {!! $data->pertanyaan !!}
                    </div>
                </div>
                <div class="jawaban mt-5">
                    @if(!$data->jawabankonsultasi->isEmpty())
                        <div class="border border-blue-100 rounded p-5">
                            <p> Telah Dijawab Oleh </p>
                            <div class="content flex p-5">
                                <div class="image">
                                    @if(Auth::user()->profile_photo_path == null)
                                        <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" class="rounded-full" width="60px" height="60px" alt="">
                                    @else
                                        <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" alt="" class="rounded-full" width="60px" height="60px">
                                    @endif
                                </div>
                                <div class="name ml-4">
                                    @if($datadokter == null)
                                        <h2> {{$datajawabankonsultasi->user->name}}  </h2>
                                    @else
                                        <h2> {{$datadokter->fullname}} ({{$datadokter->sebagaiDokter}} </h2>
                                    @endif
                                    <p class="text-sm text-blue-700"> {{ $data->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            <div class="jawaban border p-5">
                               <p> Topik : {{$datajawabankonsultasi->konsultasi->judulKonsultasi}}
                                </p>
                                <h2> Jawaban  : </h2>
                               <p>  {!! $datajawabankonsultasi->jawabanKonsultasi !!} </p>
                            </div>

                        </div>
                    @else
                        <textarea name="jawabanKonsultasi" id="" cols="30" rows="10">Jawab Pertanyaan konsultasi disini !!</textarea>
                    @endif
                </div>
                <div class="forAction mt-4 w-full">
                    @if($datajawabankonsultasi == null)
                    <button type="submit" name="status" value="diterima" class="bg-blue-300 px-3 py-2 rounded w-full md:w-64 text-white shadow-md transform transtition hover:scale-105 duration-300">  <p class="animate-bounce">Jawab Pertanyaan  </p>
                    </a>
                        <button name="status" value="ditolak" class="bg-red-500 px-3 py-2 rounded text-white w-full md:w-64 mt-4 md:mt-0 shadow-md transform transtition hover:scale-105 duration-300"> Abaikan Pertanyaan</button>
                    @else
                            <button type="submit" name="status" disabled value="diterima" class="bg-blue-300 px-3 py-2 rounded w-full md:w-64 text-white shadow-md transform transtition hover:scale-105 duration-300">  <p class="animate-bounce">Sudah Terjawab  </p>
                    @endif
                </div>

            </form>
        </div>
    </div>

@endsection


@section('OptionalJS')

@endsection
