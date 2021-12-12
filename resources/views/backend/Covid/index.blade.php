@extends('layouts.app')

@section('content')
    <div class="p-4 grid-cols-1 md:grid-cols-2 xl:grid-cols-4 grid gap-2.5 rounded-lg shadow-lg h-42 ">
        @foreach ($dataIndonesia as $item)
            <div class="w-full bg-white px-4 py-4 grid  md:grid-cols-2">
                <div class="item-left grid  sm:p-10 md:justify-center xl:justify-start">
                    <p> <strong> Positif </strong> <br>
                        {{ $item->positif }}
                    </p>
                </div>
                <div class="item-right grid sm:justify-center xl:justify-end md:justify-center ">
                    <img src="{{ asset('icon/positive.png') }}" class="w-40 h-40 rounded" alt="">
                </div>
            </div>
            <div class="w-full bg-white px-4 py-4 grid  md:grid-cols-2">
                <div class="item-left grid  sm:p-10 md:justify-center xl:justify-start">
                    <p> <strong> Sembuh </strong> <br>
                        {{ $item->sembuh }}
                    </p>
                </div>
                <div class="item-right grid sm:justify-center xl:justify-end md:justify-center ">
                    <img src="{{ asset('icon/recovery.png') }}" class="w-40 h-40 rounded" alt="">
                </div>
            </div>
            <div class="w-full bg-white px-4 py-4 grid  md:grid-cols-2">
                <div class="item-left grid  sm:p-10 md:justify-center xl:justify-start">
                    <p> <strong> Meninggal </strong> <br>
                        {{ $item->meninggal }}
                    </p>
                </div>
                <div class="item-right grid sm:justify-center xl:justify-end md:justify-center ">
                    <img src="{{ asset('icon/ambulance.png') }}" class="w-40 h-40 rounded" alt="">
                </div>
            </div>
            <div class="w-full bg-white px-4 py-4 grid  md:grid-cols-2">
                <div class="item-left grid  sm:p-10 md:justify-center xl:justify-start">
                    <p> <strong> Dirawat </strong> <br>
                        {{ $item->dirawat }}
                    </p>
                </div>
                <div class="item-right grid sm:justify-center xl:justify-end md:justify-center ">
                    <img src="{{ asset('icon/hospital-bed.png') }}" class="w-40 h-40 rounded" alt="">
                </div>
            </div>
        @endforeach
    </div>

    <div class="flex flex-col mt-10 bg-white p-5">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs text-center font-medium text-gray-500 uppercase tracking-wider">
                                    Provinsi
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs text-center font-medium text-gray-500 uppercase tracking-wider">
                                    Kasus
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium text-center text-gray-500 uppercase tracking-wider">
                                    Sembuh
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium text-center text-gray-500 uppercase tracking-wider">
                                    Dirawat
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium text-center text-gray-500 uppercase tracking-wider">
                                    Meninggal
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($dataProvinsi as $provinsi)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm text-center font-medium text-gray-900">
                                                    {{ $provinsi->provinsi }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-400 text-white">
                                            {{ $provinsi->kasus }}
                                        </span>
                                        <p class="text-xs text-gray-400"> Orang </p>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            {{ $provinsi->sembuh }}
                                        </span>
                                        <p class="text-xs text-gray-400"> Orang </p>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            {{ $provinsi->dirawat }}
                                        </span>
                                        <p class="text-xs text-gray-400"> Orang </p>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-500 text-white">
                                            {{ $provinsi->meninggal }}
                                        </span>
                                        <p class="text-xs text-gray-400"> Orang </p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
