@extends('Admin.Layouts.master')
@section('content')
            <div class="p-4 sm:ml-64">
                <div class="p-4  border-gray-200 border-dashed rounded-lg dark:border-gray-700 md:mt-14 mt-14 overflow-x-auto">
                    <div class="grid grid-cols-0 gap-4 mb-4">
                        <div class="max-w-full overflow-auto h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="section-icon flex items-start justify-start mb-4">
                                <p class="text-sm justify-center font-semibold text-gray-800 md:text-lg">
                                    Persetujuan Masuk
                                </p>
                            </div>
                            <div class="flex items-start justify-start mt-4">
                                <p class="mr-2 text-sm justify-center font-medium text-gray-800 md:text-sm">
                                    Persetujuan Masuk
                                </p>
                                <p class="text-sm justify-center font-medium text-primary-600 md:text-sm">
                                   < Persetujuan Masuk
                                </p>
                            </div>

                            <div class="justify-start mt-4">
                                <div class="justify-start py-2">
                                    <p class="text-base border-b justify-center font-semibold text-gray-800 md:text-lg">
                                       Dr. Lissa Nur Aini. S.T., M.T
                                    </p>
                                    <div class="mx-auto justify-center">
                                        <form class="w-full max-w-lg mt-6">
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                        Nama Lengkap
                                                    </label>
                                                    <input class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Masukkkan nama lengkap beserta gelar" />
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="No. Identitas">
                                                        NIK 
                                                    </label>
                                                    <div>
                                                        <input class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="number" placeholder="Masukkan Nomer Identitas" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                        NPA IDI
                                                    </label>
                                                    <input class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="number" placeholder="Masukkkan NPA IDI" />
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                        No Telpon
                                                    </label>
                                                    <input class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="number" placeholder="Masukkkan No Telpon" />
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                        Email
                                                    </label>
                                                    <input class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Masukkkan nama lengkap beserta gelar" />
                                                </div>
                                            </div>
                                            
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="No. Identitas">
                                                        Status Approval 
                                                    </label>
                                                    <div class="grid grid-cols-1 gap-4">
                                                        <div class="w-full md:">
                                                            <select class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="number" placeholder="Masukkkan NPA IDI">
                                                                <option>User</option>
                                                                <option>Dokter</option>
                                                                <option>Admin</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
@endsection