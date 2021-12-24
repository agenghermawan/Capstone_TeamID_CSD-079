@extends('layouts.app')

@section('css')

@endsection

@section('content')
    @include('sweetalert::alert')
    <form action="{{ route('obat.update', $obatData->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="w-full md:flex b mt-5">
            <div class="bg-white p-10 md:w-1/2">
                @if (session('message'))
                    <p class="text-sm text-red"> {{ session('message') }} </p>
                @endif
                <h3 class="font-bold text-blue-700 border-b pb-2"> Form Obat </h3>
                <div class="form-group md:mt-5 md:flex gap-1">
                    <input type="text"
                        class="rounded shadow-sm w-full md:w-1/2 mb-2 text-sm border-gray-300 focus:border-gray-500 focus:placeholder-transparent"
                        placeholder="Nama Obat" name="namaObat" value="{{ $obatData->namaObat }}" required>
                    <select name="kategori" id="kategori"
                        class="rounded shadow-sm w-full md:w-1/2 mb-2 text-sm border-gray-300 focus:border-blue-500">
                        @foreach ($data as $item)
                            <option value="{{ $item->nama }}"> {{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group flex gap-1 my-5 w-full">
                    <input type="text"
                        class="rounded shadow-sm w-full mb-2 md:w-1/2 text-sm border-gray-300 focus:border-gray-500 focus:placeholder-transparent"
                        placeholder="Golongan" name="golongan" value="{{ $obatData->golongan }}" required>
                    <input type="text"
                        class="rounded shadow-sm w-full md:w-1/2 mb-2 text-sm border-gray-300 focus:border-gray-500 focus:placeholder-transparent"
                        placeholder="Bentuk Obat" name="bentukObat" value="{{ $obatData->bentukObat }}" required>
                </div>
                <div class="image md:mt-5">
                    <label class="inline-block mb-2 text-gray-700"></label>
                    <img src="{{ Storage::url($obatData->photoObat) }}" class="w-16 h-16 rounded-full object-cover"
                        alt="fotoObat">
                    <div class="flex items-center justify-center w-full">

                        <label
                            class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-blue-100 hover:border-gray-300">
                            <div class="flex flex-col items-center justify-center pt-7">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                    Perbarui Gambar Obat Disini</p>
                            </div>
                            <input type="file" name="photoObat" class="opacity-50" />
                        </label>
                    </div>
                </div>
                <div class="form-group my-5 md:flex gap-1">
                    <input type="text"
                        class="rounded shadow-sm w-full  mb-2 text-sm border-gray-300 focus:border-gray-500 focus:placeholder-transparent"
                        placeholder="Merk Dagang" name="merkDagang" value="{{ $obatData->bentukObat }}" required>
                </div>
                <div class="form-group my-5  gap-1">
                    <div class="form-group">
                        <label for="manfaat" class="block text-sm my-4 text-gray-500"> Manfaat</label>
                        <textarea name="manfaat" id="manfaat"
                            class="w-full rounded-md border-gray-300">  {!! $obatData->manfaat !!}    </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="deskripsi" class="block text-sm my-4 text-gray-500"> Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi"
                        class="w-full rounded-md border-gray-300"> {!! $obatData->deskripsi !!}   </textarea>
                </div>
                <div class="form-group">
                    <label for="productObat" class="block text-sm my-4 text-gray-500"> Product</label>
                    <textarea name="productObat" id="deskripsi"
                        class="w-full rounded-md border-gray-300"> {!! $obatData->productObat !!} </textarea>
                </div>
            </div>
            <div class="bg-white p-10 md:w-1/2">
                <h3 class="font-bold text-blue-700 border-b pb-2"> Detail Obat </h3>
                <div class="form-group">
                    <label for="dosisdanaturan" class="block text-sm my-4 text-gray-500"> Dosis dan aturan</label>
                    <textarea name="dosisdanaturan" id="dosisdanaturan"
                        class="w-full rounded-md border-gray-300"> {!! $obatData->dosisdanaturan !!}</textarea>
                </div>
                <div class="form-group">
                    <label for="interaksi" class="block text-sm my-4 text-gray-500"> Interaksi</label>
                    <textarea name="interaksi" id="deskripsi"
                        class="w-full rounded-md border-gray-300"> {!! $obatData->interaksi !!}</textarea>
                </div>
                <div class="form-group">
                    <label for="efekSamping" class="block text-sm my-4 text-gray-500"> Efek Samping</label>
                    <textarea name="efekSamping" id="deskripsi"
                        class="w-full rounded-md border-gray-300"> {!! $obatData->efekSamping !!}</textarea>
                </div>
                <button type="submit" class="rounded bg-blue-200 px-5 py-2  my-5 transition transform hover:scale-110">
                    Tambahkan
                    Data
                </button>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script>
        tinymce.init({
            selector: 'textarea',
        });
    </script>
@endsection
