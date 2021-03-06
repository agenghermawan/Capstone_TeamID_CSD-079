@extends('layouts.app')

@section('title')
    <span class="text-blue-700">  Daftar Janji dengan Pasien </span>
@endsection
@section('buttonHeader')
        <a  class="bg-gradient-to-r md:justify-items-end from-blue-300 to-blue-200 p-2 w-64 text-white rounded" href="{{route('janji-dokter.index')}}">Daftar Janji <i class="fas fa-chevron-circle-down"></i></a>
@endsection
@section('content')
    @include('sweetalert::alert')
    <div class="p-5 bg-white shadow">
        <div class="grid-cols-1 grid md:grid-cols-2 ">
            <div>
                <div class="flex border-b pb-4">
                    <img src="{{asset('image/avatar doktor.jpg')}}" class="rounded-full object-cover" height="100px" width="100px" style="object-fit: cover" alt="">
                    <div class="head-description ml-5">
                        <h1 class="text-2xl font-semibold"> {{$dataDokter->fullname}}</h1>
                        <h4> {{$dataPoliklinik->nama}} </h4>
                        <p> 089660776514 </p>
                    </div>
                </div>
                <div class="deskripsi py-5">
                    <h3 class="font-semibold text-base"> Deskripsi </h3>
                    <p class="text-sm">{{$dataDokter->deskripsi}}</p>
                    <h3 class="font-semibold text-base"> Pengalaman Praktik </h3>
                    @if($dataDokter->pengalamanPraktik  !== null)
                        @foreach($dataDokter->pengalamanPraktik as $item)
                            <p class="text-sm"> {{$item['pengalamanPraktik']}}</p>
                        @endforeach
                    @else
                       <p>  Belum mempenyaui pengalaman praktik </p>
                    @endif
                    <h3 class="font-semibold text-base"> Riwayat Pendidikan </h3>
                    @if($dataDokter->riwayatPendidikan !== null)
                        @foreach($dataDokter->pengalamanPraktik as $praktik)
                            <p class="text-sm"> {{$praktik['pengalamanPraktik']}}</p>
                        @endforeach
                    @else
                        <p> Belum mempenyaui Riwayat Pendidikan </p>
                    @endif
                </div>
            </div>
            <div>
                <img src="{{asset('image/rumahsakit.jpg')}}" style="width: 100%;height: 400px"  alt="">
            </div>
        </div>
        <div class="grid-cols-1 grid md:grid-cols-2 mt-4">
           <div class="mt-3">
               <h3 class="text-2xl mb-2"> Data Pasien </h3>
                <div class="grid grid-cols-1 md:grid-cols-3">
                    <div class="col-span-1 text-sm space-y-2">
                        <p> Nama </p>
                        <p> Email </p>
                        <p> Alamat </p>
                        <p> Provinsi </p>
                        <p> KodePos </p>
                        <p> Tanggal Lahir </p>
                    </div>
                    <div class="col-span-2 text-sm space-y-2">
                        <p>: {{$data->nama}}</p>
                        <p>:  {{$data->email}} </p>
                        <p>: {{$data->alamat}} </p>
                        <p>: {{$data->provinsi}} </p>
                        <p>: {{$data->kode_pos}} </p>
                        <p>: {{ date('D d M Y',strtotime($data->tanggal_lahir))}}</p>
                    </div>
                </div>
           </div>
            <div class="mt-3">
                <h3 class="text-2xl mb-2"> Data Rumah Sakit </h3>
                <div class="grid grid-cols-1 md:grid-cols-3">
                    <div class="col-span-1 text-sm space-y-2">
                        <p> Alamat Rumah sakit </p>
                        <p> Kota </p>
                        <p> KodePos </p>
                        <p> No Telp </p>
                        <p> Tanggal Janji </p>
                        <p> Waktu Janji </p>
                    </div>
                    <div class="col-span-2 text-sm space-y-2">
                        <p>:  {{$dataRumahSakit->alamat}} </p>
                        <p>:  {{$dataRumahSakit->kota}} </p>
                        <p>:  {{$dataRumahSakit->kodepos}} </p>
                        <p>:  {{$dataRumahSakit->notelp}} </p>
                        <p>: {{$data->tanggal_janji}} </p>
                        <p>: {{$data-> jam_janji}} </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <form action="{{route('janji-dokter.update',$data->id)}}" method="post">
                @csrf
                @method('put')
                @if($data->status == 'Permintaan Diterima' || $data->status == 'Permintaan Ditolak')
                       <button type="submit" name="status" value="Selesai" class="bg-white bg-red-300 rounded p-3 text-white"> Selesai  </button>
                @elseif($data->status == 'Menunggu Persetujuan Dokter')
                        <button type="submit" name="status" value="Permintaan Diterima" class="bg-white bg-blue-300 rounded p-3 text-white"> Tandai Diterima </button>
                        <button type="submit" name="status" value="Permintaan Ditolak" class="bg-white bg-red-300 rounded p-3 text-white"> Ditolak  </button>
                @endif
                </form>
        </div>
    </div>
@endsection


@section('OptionalJS')

@endsection
