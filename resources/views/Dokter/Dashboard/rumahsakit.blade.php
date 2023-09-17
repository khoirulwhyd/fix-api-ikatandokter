@extends('Layouts.app')
@section('content')
            <div class="p-4 sm:ml-64">
                <div class="mt-14 p-4  border-gray-200 border-dashed rounded-lg dark:border-gray-700 md:mt-14">
                    <div class="grid grid-cols-0 gap-4 mb-4">
                       
                        <div class="max-w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex items-start gap-2 justify-start mb-4">
                                <a href="/dashboard">
                                    <div>
                                    <p class="text-sm justify-center font-semibold text-gray-800 hover:text-primary-600 md:text-sm">
                                        Dashboard
                                    </p>
                                </div>
                                </a>
                                
                                <div class="mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="13" viewBox="0 0 7 13" fill="none">
                                    <path d="M1.021 1.54159L5.97933 6.49992L1.021 11.4583" stroke="#212121" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-primary-600">
                                    Rumah Sakit
                                    </p>
                                </div>

                                
                            </div>
                            
                            <div class="justify-start w-full h-full mt-4">
                                <div class="justify-start py-2">
                                    <p class="text-base border-b justify-center font-bold text-gray-800 md:text-lg">
                                        Data Rumah Sakit
                                    </p>
                                </div>
                                
                                <div class="relative overflow-x-auto border sm:rounded-lg mt-2">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    Kode
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Nama
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Alamat
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    No Telp
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Layanan Pembayaran
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Hari Pelayanan
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Kecamatan
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Tipe
                                                </th>
                                            </tr>
                                        </thead>
                                        @foreach($rumahsakits as $rs)
                                        <tbody>
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                                    {{$rs -> kode }}
                                                </td>
                                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                                    {{ $rs -> nama }}
                                                </td>
                                                <td class="px-6 py-4 font-regular text-gray-700">
                                                    {{ $rs -> alamat }}
                                                </td>
                                                <td class="px-6 py-4 font-regular text-gray-700 dark:text-white">
                                                    {{ $rs->no_telp }}
                                                </td>
                                                <td class="px-6 py-4 font-regular text-gray-700 dark:text-white">
                                                    {{ $rs->layanan_pembayaran }}
                                                </td>
                                                <td class="px-6 py-4 font-regular text-gray-700 dark:text-white">
                                                    {{ $rs->hari_pelayanan }}
                                                </td>
                                                <td class="px-6 py-4 font-regular text-gray-700 dark:text-white">
                                                    {{ $rs->kecamatan }}
                                                </td>
                                                <td class="px-6 py-4 font-regular text-gray-700 dark:text-white">
                                                    {{ $rs->tipe }}
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection