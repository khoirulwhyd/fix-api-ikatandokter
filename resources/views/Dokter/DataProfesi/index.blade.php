@extends('Layouts.app')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700 md:mt-14 mt-14">
            <div class="grid grid-cols-0 gap-4 mb-4">
                @if ($dataProfesi != null)
                <div
                class="max-w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-start gap-2 justify-start mb-4">
                            <a>
                               <div>
                                <p class="text-sm justify-center font-semibold text-gray-800 md:text-sm">
                                    Data Profesi
                                </p>
                            </div>
                            </a>
                    </div>
                    
                            @forelse($dataProfesi as $profesi)
                            <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="flex justify-start ...">
                            <img class="w-16 h-16 rounded-full" src="/Assets/main-avatar.svg" alt="user photo" />
                            <div class="section-avatar px-6">
                                <p class="text-primary-600 text-base font-semibold md:text-xl">
                                    {{ $dokter->nama_lengkap }}</p>
                                <p class="font-regular text-gray-400 text-sm sm:text-lg">{{ $dokter->nik }}</p>
                            </div>
                        </div>
                        <div class="py-4 md:flex justify-end">
                            <a href="{{ route('data-profesi.create') }}">
                                <button type="button"
                                    class="text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.34461 4.01703C10.4385 3.67409 13.5608 3.67409 16.6546 4.01703C18.3676 4.20903 19.7496 5.55803 19.9506 7.27703C20.3175 10.4147 20.3175 13.5844 19.9506 16.722C19.8489 17.5573 19.468 18.3338 18.8698 18.9255C18.2715 19.5172 17.491 19.8895 16.6546 19.982C13.5608 20.326 10.4384 20.326 7.34461 19.982C6.50827 19.8895 5.72769 19.5172 5.12944 18.9255C4.53118 18.3338 4.15033 17.5573 4.04861 16.722C3.68171 13.5847 3.68171 10.4153 4.04861 7.27803C4.15028 6.4429 4.53099 5.66657 5.12905 5.07487C5.7271 4.48317 6.50745 4.11077 7.34361 4.01803L7.34461 4.01703ZM11.9996 7.00703C12.1985 7.00703 12.3893 7.08605 12.5299 7.2267C12.6706 7.36735 12.7496 7.55812 12.7496 7.75703V11.25H16.2426C16.4415 11.25 16.6323 11.329 16.7729 11.4697C16.9136 11.6104 16.9926 11.8011 16.9926 12C16.9926 12.1989 16.9136 12.3897 16.7729 12.5304C16.6323 12.671 16.4415 12.75 16.2426 12.75H12.7496V16.243C12.7496 16.4419 12.6706 16.6327 12.5299 16.7734C12.3893 16.914 12.1985 16.993 11.9996 16.993C11.8007 16.993 11.6099 16.914 11.4693 16.7734C11.3286 16.6327 11.2496 16.4419 11.2496 16.243V12.75H7.75661C7.5577 12.75 7.36694 12.671 7.22628 12.5304C7.08563 12.3897 7.00661 12.1989 7.00661 12C7.00661 11.8011 7.08563 11.6104 7.22628 11.4697C7.36694 11.329 7.5577 11.25 7.75661 11.25H11.2496V7.75703C11.2496 7.55812 11.3286 7.36735 11.4693 7.2267C11.6099 7.08605 11.8007 7.00703 11.9996 7.00703Z"
                                            fill="white" />
                                    </svg>
                                    Tambah Data
                                </button>
                            </a>
                        </div>
                    </div>
                        
                        <div class="justify-start w-full h-full">
                            <div class="justify-start py-2">   
                                <hr class="mt-2 w-full h-0.5 py-0 bg-gray-100 border-0 rounded md:my-4 dark:bg-gray-700">
                                </hr>
                            </div>
                                <div class="grid grid-cols-2 py-5">
                                    <div class="flex justify-start items-center">
                                        <div class="justify-start">
                                            <p class="text-base justify-center font-bold text-gray-800 md:text-lg">
                                                Data Profesi {{ $loop->iteration }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex justify-end items-end">
                                        <div>
                                            <form action="{{ route('data-profesi.destroy', $profesi->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <!-- <input name="_method" type="hidden" value="DELETE"> -->
                                                <button type="submit" id="delete"
                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 show_confirm" data-toggle="tooltip" title='Delete'>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="13"
                                                        viewBox="0 0 11 13" fill="none">
                                                        <path
                                                            d="M9.64134 4.90186C9.64134 4.90186 9.32508 8.82457 9.14161 10.4769C9.05425 11.2661 8.56675 11.7286 7.76823 11.7432C6.24865 11.7705 4.72732 11.7723 3.20832 11.7403C2.44009 11.7245 1.96074 11.2562 1.87513 10.481C1.69049 8.81409 1.37598 4.90186 1.37598 4.90186"
                                                            stroke="white" stroke-width="1.04839" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M10.4473 3.02144H0.570312" stroke="white" stroke-width="1.04839"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M8.54438 3.02138C8.08716 3.02138 7.69343 2.69813 7.60374 2.25023L7.46221 1.54199C7.37484 1.21524 7.07896 0.989258 6.74173 0.989258H4.27628C3.93904 0.989258 3.64317 1.21524 3.5558 1.54199L3.41427 2.25023C3.32457 2.69813 2.93085 3.02138 2.47363 3.02138"
                                                            stroke="white" stroke-width="1.04839" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <span class="sr-only">Icon description</span>
                                                </button>
                                            </form>
                                        </div>
                                        <div>
                                            <a href="{{ route('data-profesi.edit', $profesi->id) }}" type="button"
                                                class="text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    viewBox="0 0 13 13" fill="none">
                                                    <path
                                                        d="M6.25638 1.29517H4.22957C2.56269 1.29517 1.51758 2.47526 1.51758 4.14593V8.65272C1.51758 10.3234 2.55782 11.5035 4.22957 11.5035H9.01282C10.6851 11.5035 11.7254 10.3234 11.7254 8.65272V6.46925"
                                                        stroke="white" stroke-width="1.04839" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M4.81314 5.70318L8.86405 1.65227C9.36872 1.14814 10.1867 1.14814 10.6914 1.65227L11.3511 2.31197C11.8558 2.81664 11.8558 3.63517 11.3511 4.1393L7.28066 8.20972C7.06003 8.43035 6.76081 8.55448 6.44857 8.55448H4.41797L4.46892 6.50545C4.47651 6.20405 4.59956 5.91675 4.81314 5.70318Z"
                                                        stroke="white" stroke-width="1.04839" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8.24805 2.27759L10.7232 4.75269" stroke="white"
                                                        stroke-width="1.04839" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <span class="sr-only">Icon description</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <table
                                class="table-fixed w-full text-sm text-left text-gray-500 dark:text-gray-400 md:table-fixed">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                </thead>
                                <tbody>
                                    <div>
                                        <tr class="bg-white border-b">
                                            <th scope="row"
                                                class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Dokter
                                            </th>
                                            <td class="px-6 py-4">{{ $profesi->dokter }}</td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row"
                                                class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Spesialis
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $profesi->spesialis }}
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800">
                                            <th scope="row"
                                                class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Subspesialis
                                            </th>
                                            <td class="px-6 py-4">{{ $profesi->sub_spesialis }}</td>
                                        </tr>
                                    </div>
                                </tbody>
                                </table>
                                
                            @empty
                            <tr>
                            <td class="text-center text-mute" colspan="8">
                                <div class="mx-auto max-w-sm justify-center mt-10">
                                    <img class="w-full" src="/Assets/emptystate.png" class="justify-center items-center"
                                        alt="user photo" />
                                    <div class="py-4 text-center">
                                        <p class="text-center font-medium text-lg">Ups <strong
                                                class="text-primary-600">Data Profesimu </strong> masih kosong.
                                        </p>
                                        <button type="button" 
                                            class="mt-2 text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-semibold rounded-lg text-xs px-10 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mb-2 justify-end md:px-10 py-3 mr-3"
                                            onclick="location.href='{{ route('data-profesi.create') }}'">
                                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18"
                                                height="18" viewBox="0 0 18 18" fill="none">
                                                <path
                                                    d="M8.57699 0.824219H5.46116C2.89866 0.824219 1.29199 2.63839 1.29199 5.20672V12.1351C1.29199 14.7034 2.89116 16.5176 5.46116 16.5176H12.8145C15.3853 16.5176 16.9845 14.7034 16.9845 12.1351V8.77838"
                                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6.35652 7.60074L12.584 1.37324C13.3599 0.598242 14.6174 0.598242 15.3932 1.37324L16.4074 2.38741C17.1832 3.16324 17.1832 4.42158 16.4074 5.19658L10.1499 11.4541C9.81069 11.7932 9.35069 11.9841 8.87069 11.9841H5.74902L5.82736 8.83408C5.83902 8.37074 6.02819 7.92908 6.35652 7.60074Z"
                                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M11.6377 2.33545L15.4427 6.14045" stroke="white"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            Buat Data
                                        </button>
                                    </div>
                                </div>
                            </td>
                           
                        </tr>
                         @endif
                         @endforelse
                             
                        </div>
                        
                        
                   
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script>
        $('#delete').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Menghapus data profesi ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        });
    </script>
@endsection
