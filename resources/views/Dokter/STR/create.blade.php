@extends('Layouts.app')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="mt-14 p-4  border-gray-200 border-dashed rounded-lg dark:border-gray-700 md:mt-14">
            <div class="grid grid-cols-0 gap-4 mb-4">
                <form action="{{ route('data-str.store') }}" method="POST">
                    @csrf
                    <div
                        class="max-w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="section-icon flex items-start justify-start mb-4">
                            <p class="text-sm justify-center font-semibold text-gray-800 md:text-sm">
                                Surat Tanda Registrasi
                            </p>

                            <p class="text-sm">
                                > Create Surat Tanda Registrasi
                            </p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 mt-8">
                            <div class="flex justify-start ...">
                                <img class="w-16 h-16 rounded-full" src="/Assets/main-avatar.svg" alt="user photo" />
                                <div class="section-avatar px-6">
                                    <p class="text-primary-600 text-base font-semibold md:text-xl">{{ $auth->nama_lengkap }}
                                    </p>
                                    <p class="font-regular text-gray-400 text-sm sm:text-lg">{{ $auth->nik }}</p>
                                </div>
                            </div>



                        </div>
                        <div class="justify-start w-full h-full mt-4">
                            <div class="justify-start py-2">
                                <p class="text-base border-b justify-center font-bold text-gray-800 md:text-lg">
                                    Data Surat Tanda Registrasi
                                </p>

                            </div>
                            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                            <div class="mx-auto justify-start">
                                <div class="mt-4 py-2">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        No. STR
                                    </label>
                                    <input
                                        class="w-full md:w-1/2 px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                        type="number" placeholder="Masukkan No STR" name="no_str" required />
                                </div>
                                <div class="py-4">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Scan STR
                                    </label>
                                    <input
                                        class="block w-full md:w-1/2 text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="file_input" type="file" name="scan_str" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-4 md:flex justify-end">
                        <button type="submit"
                            class="text-gray-600 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-semibold rounded-lg text-xs px-3 py-2 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2 justify-end md:px-5 py-3">
                            Batal
                        </button>

                        <button type="submit"
                            class="text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-semibold rounded-lg text-xs px-3 py-2 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mb-2 justify-end md:px-5 py-3">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 20 21" fill="none">
                                <path
                                    d="M19.7583 4.90834L15.5917 0.74168C15.5138 0.664446 15.4214 0.603342 15.3199 0.561871C15.2184 0.520401 15.1097 0.49938 15 0.500014H1.66667C1.22464 0.500014 0.800715 0.675608 0.488155 0.988169C0.175595 1.30073 0 1.72465 0 2.16668V18.8333C0 19.2754 0.175595 19.6993 0.488155 20.0118C0.800715 20.3244 1.22464 20.5 1.66667 20.5H18.3333C18.7753 20.5 19.1993 20.3244 19.5118 20.0118C19.8244 19.6993 20 19.2754 20 18.8333V5.50001C20.0006 5.39034 19.9796 5.28162 19.9381 5.18009C19.8967 5.07856 19.8356 4.98621 19.7583 4.90834ZM6.66666 2.16668H13.3333V5.50001H6.66666V2.16668ZM13.3333 18.8333H6.66666V12.1667H13.3333V18.8333ZM15 18.8333V12.1667C15 11.7246 14.8244 11.3007 14.5118 10.9882C14.1993 10.6756 13.7754 10.5 13.3333 10.5H6.66666C6.22463 10.5 5.80071 10.6756 5.48815 10.9882C5.17559 11.3007 5 11.7246 5 12.1667V18.8333H1.66667V2.16668H5V5.50001C5 5.94204 5.17559 6.36596 5.48815 6.67852C5.80071 6.99108 6.22463 7.16668 6.66666 7.16668H13.3333C13.7754 7.16668 14.1993 6.99108 14.5118 6.67852C14.8244 6.36596 15 5.94204 15 5.50001V2.50835L18.3333 5.84168V18.8333H15Z"
                                    fill="white" />
                            </svg>
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
