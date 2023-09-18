@extends('Layouts.app')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="mt-14 p-4  border-gray-200 border-dashed rounded-lg dark:border-gray-700 md:mt-14">
            <div class="grid grid-cols-0 gap-4 mb-4">

                <div
                    class="max-w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-start gap-2 justify-start mb-4">
                        <a href="/dashboard">
                            <div>
                                <p
                                    class="text-sm justify-center font-semibold text-gray-800 hover:text-primary-600 md:text-sm">
                                    Dashboard
                                </p>
                            </div>
                        </a>

                        <div class="mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="13" viewBox="0 0 7 13"
                                fill="none">
                                <path d="M1.021 1.54159L5.97933 6.49992L1.021 11.4583" stroke="#212121" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-primary-600">
                                Rumah Sakit
                            </p>
                        </div>
                    </div>

                    <div class="justify-start w-1/2 md:w-full h-full mt-4">
                        <div class="justify-start py-2">
                            <p class="text-base border-b justify-center font-bold text-gray-800 md:text-lg">
                                Data Rumah Sakit
                            </p>
                        </div>
                        <div class="justify-start py-2">
                            <form action="/rumahsakit/carirs" method="GET" class="flex items-center">
                                <label for="voice-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none">
                                            <path d="M22 22H2" stroke="#CED4DA" stroke-width="1.5"
                                                stroke-linecap="round" />
                                            <path
                                                d="M17 22V6C17 4.114 17 3.172 16.414 2.586C15.828 2 14.886 2 13 2H11C9.114 2 8.172 2 7.586 2.586C7 3.172 7 4.114 7 6V22"
                                                stroke="#CED4DA" stroke-width="1.5" />
                                            <path
                                                d="M12 22V19M10 12H14M5.5 11H7M5.5 14H7M17 11H18.5M17 14H18.5M5.5 8H7M17 8H18.5"
                                                stroke="#CED4DA" stroke-width="1.5" stroke-linecap="round" />
                                            <path d="M12 9V5M14 7H10" stroke="#CED4DA" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M20.25 8.5C20.25 8.69891 20.329 8.88968 20.4697 9.03033C20.6103 9.17098 20.8011 9.25 21 9.25C21.1989 9.25 21.3897 9.17098 21.5303 9.03033C21.671 8.88968 21.75 8.69891 21.75 8.5H20.25ZM21.75 12.5C21.75 12.3011 21.671 12.1103 21.5303 11.9697C21.3897 11.829 21.1989 11.75 21 11.75C20.8011 11.75 20.6103 11.829 20.4697 11.9697C20.329 12.1103 20.25 12.3011 20.25 12.5H21.75ZM17.5 5.75C18.218 5.75 18.7 5.75 19.067 5.788C19.422 5.824 19.586 5.888 19.695 5.961L20.528 4.713C20.132 4.449 19.693 4.344 19.219 4.296C18.758 4.249 18.187 4.25 17.5 4.25V5.75ZM21.75 8.5C21.75 7.813 21.75 7.242 21.704 6.781C21.656 6.308 21.551 5.868 21.286 5.472L20.039 6.306C20.112 6.414 20.176 6.578 20.212 6.933C20.249 7.3 20.25 7.783 20.25 8.5H21.75ZM19.695 5.961C19.831 6.053 19.948 6.17 20.039 6.306L21.286 5.472C21.086 5.172 20.828 4.914 20.528 4.713L19.695 5.961ZM20.25 12.5V22H21.75V12.5H20.25ZM3.75 17C3.75 16.8011 3.67098 16.6103 3.53033 16.4697C3.38968 16.329 3.19891 16.25 3 16.25C2.80109 16.25 2.61032 16.329 2.46967 16.4697C2.32902 16.6103 2.25 16.8011 2.25 17H3.75ZM2.25 13C2.25 13.1989 2.32902 13.3897 2.46967 13.5303C2.61032 13.671 2.80109 13.75 3 13.75C3.19891 13.75 3.38968 13.671 3.53033 13.5303C3.67098 13.3897 3.75 13.1989 3.75 13H2.25ZM6.5 4.25C5.813 4.25 5.242 4.25 4.781 4.296C4.308 4.344 3.868 4.449 3.472 4.713L4.306 5.961C4.414 5.888 4.578 5.824 4.933 5.788C5.3 5.751 5.783 5.75 6.5 5.75V4.25ZM3.75 8.5C3.75 7.782 3.75 7.3 3.788 6.933C3.824 6.578 3.888 6.414 3.961 6.306L2.713 5.472C2.449 5.868 2.344 6.308 2.296 6.781C2.249 7.242 2.25 7.813 2.25 8.5H3.75ZM3.472 4.713C3.17167 4.91419 2.91379 5.17141 2.713 5.472L3.961 6.306C4.05222 6.16946 4.16946 6.05222 4.306 5.961L3.472 4.713ZM2.25 17V22H3.75V17H2.25ZM2.25 8.5V13H3.75V8.5H2.25Z"
                                                fill="#CED4DA" />
                                            <path d="M10 15H10.5M14 15H12.5" stroke="#CED4DA" stroke-width="1.5"
                                                stroke-linecap="round" />
                                        </svg>
                                    </div>
                                    <input type="text" id="carirs" name="carirs"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Cari nama rumah sakit " required>
                                </div>
                                <button type="submit" value=""
                                    class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>Cari
                                </button>
                            </form>
                            <div class="relative overflow-x-auto border sm:rounded-lg mt-2">
                                <table class="w-1/2 md:w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
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
                                    @foreach ($rumahsakits as $rs)
                                        <tbody>
                                            <tr
                                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                                    {{ $rs->nama }}
                                                </td>
                                                <td class="px-6 py-4 font-regular text-gray-700">
                                                    {{ $rs->alamat }}
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


                        <nav aria-label="Page navigation example">
                            <ul class="flex items-center -space-x-px h-8 text-sm mt-4">
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        <span class="sr-only">Previous</span>
                                        <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page"
                                        class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        <span class="sr-only">Next</span>
                                        <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
