@extends('Admin.Layouts.master')
@section('content')
            <div class="p-4 sm:ml-64">
                <div class="p-4  border-gray-200 border-dashed rounded-lg dark:border-gray-700 md:mt-14 mt-14 overflow-x-auto">
                    <div class="grid grid-cols-0 gap-4 mb-4">
                        <div class="max-w-full overflow-auto h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h1 class="text-xl font-bold text-gray-800">Master Data Anggota</h1>
                            <div class="mt-2 flex items-start gap-2 justify-start mb-4">
                               <a href="/persetujuan">
                                    <div>
                                    <p class="text-sm justify-center font-semibold text-gray-800 hover:text-primary-600 md:text-sm">
                                        Permintaan Persetujuan
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
                                     Ubah Persetujuan
                                    </p>
                                </div>
                            </div>
                            

                            <div class="justify-start">
                                <div class="justify py-2">
                                    <div class="mx-auto justify-center">
                                        @foreach($user as $users)
                                        <div class="grid grid-cols-1 md:grid-cols-2 mt-2 ">
                                            <div class="justify-start ...">
                                                <div class="section-avatar">
                                                    <p class="text-primary-600 text-base font-semibold md:text-xl">{{$users->nama_lengkap}}</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <hr></hr>
                                        <form action="{{ route('persetujuan.update', $users->id) }}" method="post" class="w-full max-w-lg mt-6">
                                            @csrf
                                            @method('PUT')
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                        Nama Lengkap
                                                    </label>
                                                    <input class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                                                    id="nama_lengkap" name="nama_lengkap" value="{{ $users->nama_lengkap }}" type="text" placeholder="Masukkkan nama lengkap beserta gelar" />
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="No. Identitas">
                                                        NIK 
                                                    </label>
                                                    <div>
                                                        <input class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                                                        id="nik" type="number" name="nik" value="{{ $users->nik }}" placeholder="Masukkan Nomer Identitas" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                        NPA IDI
                                                    </label>
                                                    <input class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                     id="npaidi" type="number" name="npaidi"  value="{{ $users->npaidi }}" placeholder="Masukkkan NPA IDI" />
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                        No Telpon
                                                    </label>
                                                    <input class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                     id="no_telepon" type="number" name="no_telepon" value="{{ $users->no_telepon }}" placeholder="Masukkkan No Telpon" />
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                        Email
                                                    </label>
                                                    <input class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                     id="email" type="text" name="email" value="{{ $users->email }}" placeholder="Masukkkan nama lengkap beserta gelar" />
                                                </div>
                                            </div>
                                            
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="No. Identitas">
                                                        Status Approval 
                                                    </label>
                                                    <div class="grid grid-cols-1 gap-4">
                                                        <div class="w-full">
                                                            <select class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                             id="role" type="text" name="role" value="{{ $users->role }}" placeholder="Masukkkan NPA IDI">
                                                                <!-- <option value="DS">Dokter Spesialis</option> -->
                                                                <option value="user">User</option>
                                                                <option value="dokter">Dokter</option>
                                                                <option value="admin">Admin</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="md:flex justify-start md:mt-0 mt-4">
                                                <a href="/persetujuan">
                                                    <button type="button" class="text-gray-600 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-semibold rounded-lg text-xs px-3 py-2 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2 justify-end md:px-5 py-3">
                                                        Batal
                                                    </button>
                                                </a>
                                                <a>
                                                    <button type="submit" class="text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-semibold rounded-lg text-xs px-3 py-2 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mb-2 justify-end md:px-5 py-3">
                                                        <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 20 21" fill="none">
                                                            <path d="M19.7583 4.90834L15.5917 0.74168C15.5138 0.664446 15.4214 0.603342 15.3199 0.561871C15.2184 0.520401 15.1097 0.49938 15 0.500014H1.66667C1.22464 0.500014 0.800715 0.675608 0.488155 0.988169C0.175595 1.30073 0 1.72465 0 2.16668V18.8333C0 19.2754 0.175595 19.6993 0.488155 20.0118C0.800715 20.3244 1.22464 20.5 1.66667 20.5H18.3333C18.7753 20.5 19.1993 20.3244 19.5118 20.0118C19.8244 19.6993 20 19.2754 20 18.8333V5.50001C20.0006 5.39034 19.9796 5.28162 19.9381 5.18009C19.8967 5.07856 19.8356 4.98621 19.7583 4.90834ZM6.66666 2.16668H13.3333V5.50001H6.66666V2.16668ZM13.3333 18.8333H6.66666V12.1667H13.3333V18.8333ZM15 18.8333V12.1667C15 11.7246 14.8244 11.3007 14.5118 10.9882C14.1993 10.6756 13.7754 10.5 13.3333 10.5H6.66666C6.22463 10.5 5.80071 10.6756 5.48815 10.9882C5.17559 11.3007 5 11.7246 5 12.1667V18.8333H1.66667V2.16668H5V5.50001C5 5.94204 5.17559 6.36596 5.48815 6.67852C5.80071 6.99108 6.22463 7.16668 6.66666 7.16668H13.3333C13.7754 7.16668 14.1993 6.99108 14.5118 6.67852C14.8244 6.36596 15 5.94204 15 5.50001V2.50835L18.3333 5.84168V18.8333H15Z" fill="white" />
                                                        </svg>
                                                        Simpan
                                                    </button>
                                                </a>
                                            </div>
                                        </form>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
@endsection