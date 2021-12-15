@extends('layouts.app')

@section('css')

@endsection
@section('title','Daftar Artikel')
@section('buttonHeader')
    <a href="{{ route('artikel.create') }}" class="bg-blue-300 animate-bounce p-3 shadow-2xl rounded transform transition hover:scale-110 duration-500">Tambahkan Artikel</a>
 @endsection
@section('content')
    @include('sweetalert::alert')
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach ($data as $item)
                 <div class="bg-white shadow-md p-5">
                     <a href="{{route('artikel.show',$item->id)}}">
                         <div class="flex">
                             <img src="{{ asset('image/profile.jpg') }}" class="rounded-full object-cover w-12 h-12" alt="">
                             <div class="px-4">
                                 <p> {{ $item->ditulisOleh }}</p>
                                 <h2 style="font-size: 14px"> {{$item->title}}</h2>
                             </div>
                         </div>
                         <div class="my-4">
                             <img src="{{ Storage::url($item->photo) }}" class="w-full rounded-md" alt="">
                         </div>
                         <a href="{{route('artikel.show',$item->id)}}" class="bg-blue-300 rounded-md px-3 py-2 mt-3"> Read More </a>
                     </a>
                  </div>
                @endforeach
        </div>
@endsection


