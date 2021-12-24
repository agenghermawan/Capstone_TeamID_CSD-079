@extends('frontend.component.layout')

@section('contentFrontEnd')
    <div class="container">
        <div class="card shadow-md p-5">
            <h2> Detail Janji </h2>
                <div class="row my-5">
                    <div class="col-md">
                        <div class="row">
                            <div class="d-flex">
                                <img src="{{asset('image/avatar doktor.jpg')}}" class="float-start img-thumbnail rounded-circle" height="100px" width="100px" style="object-fit: cover" alt="">
                                <div class="deskripsi" style="margin-left: 30px;text-align: left">
                                    <h2> {{$dataDokter->fullname}} </h2>
                                    <h3> {{$dataPoliklinik->nama}}</h3>
                                    <h3> {{$dataDokter->telp}} </h3>
                                </div>
                            </div>
                            <div class="my-4">
                            <h4> Deskripsi </h4>
                                @if($dataDokter->deskripsi == null)
                                 <p> Dokter belum memperbarui Profilenya </p>
                                @else
                                <p> {{$dataDokter->deskripsi}}</p>
                                @endif
                                <h4> Pengalaman Praktik </h4>
                                @if($dataDokter->PengalamanPraktik == null)
                                    <p> Belum mempunyai pengalaman praktik </p>
                                @else
                                @foreach($dataDokter->pengalamanPraktik as $item)
                                <p> {{$dataDokter->pengalamanPraktik}}</p>
                                @endforeach
                                @endif

                                <h4> Riwayat Pendidikan </h4>
                                @if($dataDokter->PengalamanPraktik == null)
                                    <p> Belum mempunyai pengalaman praktik </p>
                                @else
                                    @foreach($dataDokter->pengalamanPraktik as $item)
                                        <p> {{$dataDokter->pengalamanPraktik}}</p>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="col-md">
                        <img src="{{asset('image/rumahsakit.jpg')}}" class="rounded img-fluid shadow-md  img-thumbnail" width="100%" height="200px" style="object-fit: cover" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <h3 class="mb-3"> Data Pasien</h3>
                        <div class="row" style="font-size: 12px;line-height: 12px">
                            <div style="text-align: left" class="col-md-3">
                                <p> Nama </p>
                                <p> Email </p>
                                <p> Alamat </p>
                                <p> Provinsi </p>
                                <p> Kode Pos </p>
                                <p> Tanggal Lahir </p>
                            </div>
                            <div class="col-md-9">
                                <p>: {{$data->nama}} </p>
                                <p>: {{$data->email}} </p>
                                <p>: {{$data->alamat}} </p>
                                <p>: {{$data->provinsi}} </p>
                                <p>: {{$data->kode_pos}} </p>
                                <p>: {{$data->tanggal_lahir}} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="row" style="font-size: 12px;line-height: 12px">
                            <h2 class="mb-3"> Data Rumah Sakit </h2>
                            <div style="text-align: left" class="col-md-4">
                                <p> Alamat Rumah Sakit </p>
                                <p> Email </p>
                                <p> Kota </p>
                                <p> Kode Pos </p>
                                <p> No Telp </p>
                            </div>
                            <div class="col-md-8">
                                <p>: {{$dataRumahSakit->nama}} </p>
                                <p>: {{$data->email}} </p>
                                <p>: {{$data->kota}} </p>
                                <p>: {{$data->kode_pos}} </p>
                                <p>: {{$data->telp}} </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection

@section('opsionalCss')

@endsection
