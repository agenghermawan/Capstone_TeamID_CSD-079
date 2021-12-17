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
    @php
        $dataKonsultan = \App\Models\User::where('id',$data->ditulisOleh)->first();
        $jawaban = \App\Models\jawabanKonsultasi::where('konsultasi_id',$data->id)->first();
            if($jawaban !== null){
                $datadokter = \App\Models\Dokter::with('user')->where('user_id',$jawaban->user_id)->first();
        }
    @endphp
    <div class="md:w-1/2 w-full bg-white shadow-md rounded-lg">
        <div class="p-10">
                <form action="{{route('konsultasi-dokter.update', $data->id)}}" method="post">
                    @csrf
                    @method('put')
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <div class="header flex pb-5">
                    <div class="image">
                        @if($dataKonsultan->profile_photo_path == null)
                                <img src="https://ui-avatars.com/api/?name={{$dataKonsultan->name}}" class="rounded-full" width="60px" height="60px" alt="">
                        @else
                            <img src="{{Storage::url($dataKonsultan->profile_photo_path)}}" alt="" class="rounded-full" width="60px" height="60px">
                        @endif
                    </div>
                    <div class="name ml-4 mt-1">
                        <h3> Pertanyaan dari {{ $dataKonsultan->name }} </h3>
                        <p class="text-sm text-blue-700"> {{ $data->created_at->diffForHumans() }}</p>
                    </div>
                </div>
                <div class="deskripsi border-t border-blue-50 pt-5">
                    <p> Pertanyaan  sebagai berikut:</p>
                    <div class="pt-3">
                         {!! $data->pertanyaan !!}
                    </div>
                </div>
                    @if($jawaban == null)
                        <div class="mt-3">
                            <textarea name="jawabanKonsultasi" id="" cols="30" rows="10" ></textarea>
                        </div>
                    @else
                        <div class="card mt-4 border p-4">
                               <h3>  Telah Dijawab Oleh </h3>
                            <div class="head flex items-center mt-3">
                                <div class="image-head ">
                                    @if ($datadokter->user->profile_photo_path == null)
                                        <img src="{{ asset('image/avatar doktor.jpg') }}" class="w-20 h-20 rounded-full" alt="">
                                    @else
                                        <img src="{{ Storage::url($datadokter->user->profile_photo_path)}}" class="w-20 h-20 rounded-full " alt="">
                                    @endif
                                </div>
                                <div class="name ml-5 font-semibold">
                                    <h4 class="text-blue-700"> {{ $datadokter->fullname }} </h4>
                                    <h4 class="text-sm text-blue-500"> {{$datadokter->sebagaiDokter}} </h4>
                                </div>

                            </div>
                            <div class="jawaban mt-5">
                                <p> Jawaban : </p>
                                {!! $jawaban->jawabanKonsultasi !!}
                            </div>
                        </div>
                    @endif
                <div class="forAction mt-4 w-full">
                    @if($datajawabankonsultasi == null)
                    <button type="submit" name="status" value="diterima" class="bg-blue-300 px-3 py-2 rounded w-full md:w-64 text-white shadow-md transform transtition hover:scale-105 duration-300">  <p class="animate-bounce">Jawab Pertanyaan  </p>
                        <button name="status" value="ditolak" class="bg-red-500 px-3 py-2 rounded text-white w-full md:w-64 mt-4 md:mt-0 shadow-md transform transtition hover:scale-105 duration-300"> Abaikan Pertanyaan</button>
                    @else
                            <button type="submit" name="status" disabled value="diterima" class="bg-blue-300 px-3 py-2 rounded w-full md:w-64 text-white shadow-md transform transtition hover:scale-105 duration-300">  <p class="animate-bounce">Sudah Terjawab  </p>
                    @endif
                </div>

            </form>
        </div>
    </div>

@endsection


@section('script')
    <script>
        tinymce.init({
            selector: 'textarea',
        });
    </script>
@endsection
