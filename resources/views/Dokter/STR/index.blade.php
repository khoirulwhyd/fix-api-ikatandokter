@extends('Layouts.app')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700 md:mt-14 mt-14">
            <div class="grid grid-cols-0 gap-4 mb-4">
                <div
                    class="max-w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-start gap-2 justify-start mb-4">
                            <a>
                               <div>
                                <p class="text-sm justify-center font-semibold text-gray-800 md:text-sm">
                                    Surat Tanda Registrasi
                                </p>
                            </div>
                            </a>
                    </div>
            @if ($dataSTR != null)
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div class="flex justify-start ...">
                                <img class="w-16 h-16 rounded-full" src="/Assets/main-avatar.svg" alt="user photo" />
                                <div class="section-avatar px-6">
                                    <p class="text-primary-600 text-base font-semibold md:text-xl">
                                        {{ Auth::user()->nama_lengkap }}
                                    </p>
                                    <p class="font-regular text-gray-400 text-sm sm:text-lg">{{ Auth::user()->nik }}</p>
                                </div>
                            </div>

                            <div class="justify-end py-4 md:flex justify-end">
                                <button type="submit"
                                    class="text-white bg-[#FFC107] hover:bg-[#D9A509]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-semibold rounded-lg text-xs px-3 py-2 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mb-2 justify-end md:px-5 py-3 mr-3"
                                    onclick="location.href='{{ route('data-str.edit', $dataSTR->id) }}'">
                                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 18 18" fill="none">
                                        <path
                                            d="M8.57699 0.824219H5.46116C2.89866 0.824219 1.29199 2.63839 1.29199 5.20672V12.1351C1.29199 14.7034 2.89116 16.5176 5.46116 16.5176H12.8145C15.3853 16.5176 16.9845 14.7034 16.9845 12.1351V8.77838"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M6.35652 7.60074L12.584 1.37324C13.3599 0.598242 14.6174 0.598242 15.3932 1.37324L16.4074 2.38741C17.1832 3.16324 17.1832 4.42158 16.4074 5.19658L10.1499 11.4541C9.81069 11.7932 9.35069 11.9841 8.87069 11.9841H5.74902L5.82736 8.83408C5.83902 8.37074 6.02819 7.92908 6.35652 7.60074Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M11.6377 2.33545L15.4427 6.14045" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Edit Data
                                </button>

                                <form action="{{ route('data-str.destroy', $dataSTR->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" id="delete"
                                        class="text-white bg-[#E00F0F] hover:bg-[#AB1616]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-semibold rounded-lg text-xs px-3 py-2 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2 justify-end md:px-5 py-3">
                                        <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 17 17" fill="none">
                                            <path
                                                d="M14.1042 6.39014C14.1042 6.39014 13.6517 12.0026 13.3892 14.3668C13.2642 15.496 12.5667 16.1576 11.4242 16.1785C9.24999 16.2176 7.07332 16.2201 4.89999 16.1743C3.80082 16.1518 3.11499 15.4818 2.99249 14.3726C2.72832 11.9876 2.27832 6.39014 2.27832 6.39014"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M15.2567 3.69975H1.125" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M12.5335 3.69974C11.8793 3.69974 11.316 3.23724 11.1877 2.5964L10.9852 1.58307C10.8602 1.11557 10.4368 0.792236 9.95432 0.792236H6.42682C5.94432 0.792236 5.52099 1.11557 5.39599 1.58307L5.19349 2.5964C5.06516 3.23724 4.50182 3.69974 3.84766 3.69974"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        Hapus Data
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="justify-start w-full h-full">
                            <div class="justify-start py-2">
                                <p class="text-base border-b justify-center font-bold text-gray-800 md:text-lg">
                                    Data Surat Tanda Registrasi
                                </p>

                            </div>
                            <table
                                class="table-fixed w-full text-sm text-left text-gray-500 dark:text-gray-400 md:table-fixed">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Nomer STR
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $dataSTR->no_str }}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Scan STR
                                        </th>
                                        <td class="px-6 py-4">
                                            <img src="{{ asset('/storage/uploads/dokter/str/' . $dataSTR->scan_str) }}"
                                                width="300px" height="300px" alt="">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <tr>
                        <td class="text-center text-mute" colspan="8">
                            <div class="mx-auto max-w-sm justify-center mt-10">
                                <img class="w-full" src="/Assets/emptystate.png" class="justify-center items-center"
                                    alt="user photo" />
                                <div class="py-4 text-center">
                                    <p class="text-center font-medium text-lg">Ups <strong class="text-primary-600">Data
                                            STRmu </strong> masih kosong.
                                    </p>
                                    <button type="button"
                                        class="mt-2 text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-semibold rounded-lg text-xs px-10 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mb-2 justify-end md:px-10 py-3 mr-3"
                                        onclick="location.href='{{ route('data-str.create') }}'">
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
                                            <path d="M11.6377 2.33545L15.4427 6.14045" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Buat Data
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endif
            </div>
        </div>
    </div>

    <script>
        $('#delete').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        });
    </script>
@endsection
