@extends('Layouts.app')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-gray-200 rounded-lg dark:border-gray-700 md:mt-14 mt-14">
            <div class="grid grid-cols-0 gap-4 mb-4">
                <div
                    class="max-w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div>
                        <div class="section-icon flex items-start justify-start mb-4">
                            <p class="text-sm justify-center font-semibold text-gray-800 md:text-lg">
                                Data Pribadi
                            </p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div class="flex justify-start ...">
                                <img class="w-16 h-16 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo" />
                                <div class="section-avatar px-6">
                                    <p class="text-primary-600 text-base font-semibold md:text-xl">
                                        {{ $dokter->nama_lengkap }}
                                    </p>
                                    <p class="font-regular text-gray-400 text-sm sm:text-lg">
                                        KTP-24234223
                                    </p>
                                </div>
                            </div>

                            <div class="justify-end py-4 md:flex justify-end">
                                <Link to="">
                                <button type="button"
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

                                <button type="button"
                                    class="text-white bg-[#FFC107] hover:bg-[#D9A509]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-semibold rounded-lg text-xs px-3 py-2 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mb-2 justify-end md:px-5 py-3"
                                    onclick="location.href='{{ route('data-pribadi.edit', $dokter->id) }}'">
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
                            </div>
                        </div>
                        <div class="justify-start w-full h-full">
                            <div class="justify-start py-2">
                                <p class="text-base justify-center font-bold text-gray-800 md:text-lg">
                                    Data Pribadi
                                </p>
                                <hr class="mt-2 w-full h-0.5 py-0 bg-gray-100 border-0 rounded md:my-4 dark:bg-gray-700">
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
                                                NPA IDI
                                            </th>
                                            <td class="px-6 py-4">{{ $dokter->npaidi }}</td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row"
                                                class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Tempat Tanggal Lahir
                                            </th>
                                            <td class="px-6 py-4">
                                                Malang, 17 Januari 2001
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800">
                                            <th scope="row"
                                                class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Jenis Kelamin
                                            </th>
                                            <td class="px-6 py-4">Laki-Laki</td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800">
                                            <th scope="row"
                                                class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Kewarganegaraan
                                            </th>
                                            <td class="px-6 py-4">Zimbabwe</td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800">
                                            <th scope="row"
                                                class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Agama
                                            </th>
                                            <td class="px-6 py-4">Islam</td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800">
                                            <th scope="row"
                                                class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Nama Pasangan
                                            </th>
                                            <td class="px-6 py-4">Nyai Rosyidah</td>
                                        </tr>
                                    </div>
                                </tbody>
                            </table>
                            <div class="justify-start pt-4">
                                <p class="text-base justify-center font-bold text-gray-800 md:text-lg">
                                    Alamat Sesuai KTP
                                </p>
                                <hr class="mt-2 w-full h-0.5 py-0 bg-gray-100 border-0 rounded md:my-4 dark:bg-gray-700">
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
                                            Provinsi
                                        </th>
                                        <td class="px-6 py-4">Jawa Timur</td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Kab/Kota
                                        </th>
                                        <td class="px-6 py-4">Malang</td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Kecamatan
                                        </th>
                                        <td class="px-6 py-4">Lowokwaru</td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Kelurahan
                                        </th>
                                        <td class="px-6 py-4">Mojolangu</td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            RT/RW
                                        </th>
                                        <td class="px-6 py-4">007/04</td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Kode Pos
                                        </th>
                                        <td class="px-6 py-4">63524</td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Alamat Lengkap
                                        </th>
                                        <td class="px-6 py-4">Griya Shanta Blok K.121</td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Scan KTP
                                        </th>
                                        <td class="px-6 py-4">
                                            <img class="w-80 h-45" src="{{ '/Assets/scan-ktp.png' }}" alt="user photo" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="justify-start pt-4">
                                <p class="text-base justify-center font-bold text-gray-800 md:text-lg">
                                    Detail Kontak
                                </p>
                                <hr class="mt-2 w-full h-0.5 py-0 bg-gray-100 border-0 rounded md:my-4 dark:bg-gray-700">
                            </div>
                            <table
                                class="table-fixed w-full text-sm text-left text-gray-500 dark:text-gray-400 md:table-fixed">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                </thead>
                                <tbody>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Telpon Rumah KTP
                                        </th>
                                        <td class="px-6 py-4">Griya Shanta Blok K.121fgdgfdgfdgfd</td>
                                    </tr>
                                    <<tr class="bg-white dark:bg-gray-800">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            No Hp
                                        </th>
                                        <td class="px-6 py-4">{{ $dokter->no_telepon }}</td>
                                        </tr>
                                </tbody>
                            </table>
                            <div class="justify-start pt-4">
                                <p class="text-base justify-center font-bold text-gray-800 md:text-lg">
                                    Alamat Korespondensi
                                </p>
                                <hr class="mt-2 w-full h-0.5 py-0 bg-gray-100 border-0 rounded md:my-4 dark:bg-gray-700">
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
                                            Provinsi
                                        </th>
                                        <td class="px-6 py-4">
                                            <p>Nusa tenggara barat</p>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Kab/Kota
                                        </th>
                                        <td class="px-6 py-4">Malang</td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Kecamatan
                                        </th>
                                        <td class="px-6 py-4">Lowokwaru</td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Kelurahan
                                        </th>
                                        <td class="px-6 py-4">Mojolangu</td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            RT/RW
                                        </th>
                                        <td class="px-6 py-4">007/04</td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Kode Pos
                                        </th>
                                        <td class="px-6 py-4">63524</td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row"
                                            class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Alamat Lengkap
                                        </th>
                                        <td class="px-6 py-4">Griya Shanta Blok K.121</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
