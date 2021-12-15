@extends('layouts.app')

@section('css')


@endsection
@section('content')
    @include('sweetalert::alert')
    <div class=" mt-4 grid grid-cols-1 md:grid-cols-2 lg:flex justify-between">
        <h4> Form Artikel </h4>
        <a href="{{ route('artikel.index') }}" class="bg-blue-500 p-3 shadow-2xl rounded"> Daftar Artikel</a>
    </div>
    <form action="{{ route('artikel.update',$data->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('put')
        <div class="grid grid-cols-1 md:grid-cols-2 mt-4 lg:gap-4">
            <div class="content-form-article sm:col-span-2 col-span-1 bg-white p-5 text-sm text-gray-700 rounded-md">
                @if (session('message'))
                    <div class="bg-white">
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                @endif
                <div class="form-group lg:p-5">
                    <label for="title" class="block text-sm text-gray-700"> Title </label>
                    <input type="text" name="title" value="{{$data->title}}"
                           class="bg-white p-3 w-full rounded-lg text-gray-700 text-sm border-gray-300 ">
                    @error('title')
                    <p class="text-sm text-red-500"> {{$message}} </p>
                    @enderror
                </div>

                <div class="form-group lg:p-5">
                    <p class="mb-2"> Isi Artikel </p>
                    <textarea name="isiArtikel" id="editor" style="height: 400px" class="rounded" rows="10">{!! $data->isiArtikel !!}</textarea>
                    @error('isiArtikel')
                    <p class="text-sm text-red-500">{{$message}} </p>
                    @enderror
                </div>
                <div class="form-group xl:p-5">
                    <label for="photo" class="inline"> Update Gambar Artikel
                            <img src="{{Storage::url($data->photo)}}" class="rounded-full h-24 w-24"  alt="">
                        <input type="file" name="photo" id="photo" class="opacity-0">
                    </label>
                    <p class="text-sm text-red-300"> Klik gambar untuk memperbarui foto artikel </p>
                    @error('photo')
                    <p class="text-sm text-red-500">  {{$message}} </p>
                    @enderror
                </div>
            </div>
            <div class="col-span-2 bg-white md:pl-10 md:pr-10 pl-3 pr-3  lg:mt-0 rounded-md" style="height: 350px">
                <div class="form-group my-2">
                    <label for="" class="text-gray-700 text-sm"> Ditulis :</label>
                    <input type="text" name="ditulisOleh" class="w-full  text-gray-700 text-sm border-gray-300 rounded mt-2"
                           value="{{ Auth::user()->name }}" placeholder="Ditulis Oleh">
                    @error('ditulisOleh')
                    <p class="text-sm text-red-500">{{$message}} </p>
                    @enderror
                </div>

                <div class="form-group my-2">
                    <label for="" class="text-gray-700 text-sm"> Kategori :</label>
                    <input type="text" name="kategori" class="w-full  text-gray-700 text-sm border-gray-300 rounded mt-2"
                           value="{{$data->kategori}}" placeholder="Kategori" >
                    @error('kategori')
                    <p class="text-sm text-red-500">{{$message}} </p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="" class="text-gray-700 text-sm"> Refrensi :</label>
                    <input type="text" name="refrensi" class="w-full  text-gray-700 text-sm border-gray-300 rounded mt-2"
                           value="{{$data->refrensi}}" placeholder="Refrensi">
                    @error('refrensi')
                    <p class="text-sm text-red-500">{{$message}} </p>
                    @enderror
                </div>
                <button type="submit" class="rounded  bg-gradient-to-r my-4 p-3 shadow-2xl bg-blue-300 text-sm"> Submit
                </button>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script>
        tinymce.init({
            selector: '#editor',
        });
    </script>


@endsection
