@extends('Layouts.app')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="mt-14 p-4  border-gray-200 border-dashed rounded-lg dark:border-gray-700 md:mt-14">
            <div class="grid grid-cols-0 gap-4 mb-4">

                <div
                    class="max-w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-start gap-2 justify-start mb-4">
                        <a href="/data-sip">
                            <div>
                                <p
                                    class="text-sm justify-center font-semibold text-gray-800 hover:text-primary-600 md:text-sm">
                                    Surat Izin Praktik
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
                                Edit Data Surat Izin Praktik
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 mt-8">
                        <div class="flex justify-start ...">
                            <img class="w-16 h-16 rounded-full" src="/Assets/main-avatar.svg" alt="user photo" />
                            <div class="section-avatar px-6">
                                <p class="text-primary-600 text-base font-semibold md:text-xl">{{ $auth->nama_lengkap }}</p>
                                <p class="font-regular text-gray-400 text-sm sm:text-lg">{{ $auth->nik }}</p>
                            </div>
                        </div>


                    </div>
                    @foreach($datasip as $sip)
                    <div class="justify-start w-full h-full mt-4">
                        <form action="{{ route('data-sip.update', $sip->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="justify-start py-2">
                                <p class="text-base border-b justify-center font-bold text-gray-800 md:text-lg">
                                    Data Surat Izin Praktik
                                </p>
                            </div>
                            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}" />
                            <div class="mx-auto justify-start">
                                <div class="mt-4 py-2">
                                    <label for="pilihan-dokter"
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        No. SIP
                                    </label>
                                    <input
                                        class="w-full md:w-1/2 px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                        type="number" name="no_sip" placeholder="Masukkan No SIP" value="{{$sip->no_sip}}">
                                    </input>
                                </div>
                                <div class="mt-4 py-2">
                                    <label for="pilihan-dokter"
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Jenis Sarana
                                    </label>
                                    <select id=""
                                        class="w-full md:w-1/2 px-4 py-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder:pilih dokter"
                                        name="jenis_sarana">
                                        <option selected value="{{ $sip->jenis_sarana }}">
                                                            {{ $sip->jenis_sarana }}</option>
                                        <option value="">-- Pilih Jenis Sarana --</option>
                                        <option value="Dokter Praktik Mandiri">
                                            Dokter Praktik Mandiri
                                        </option>
                                        <option value="Dokter Klinik">
                                            Dokter Klinik
                                        </option>
                                        <option value="Dokter Rumah Sakit">
                                            Dokter Rumah Sakit
                                        </option>
                                    </select>
                                </div>
                                <div class="mt-4 py-2">
                                    <label for="pilihan-dokter"
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Nama Sarana
                                    </label>
                                    <input
                                        class="w-full md:w-1/2 px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                        type="text" placeholder="Masukkan Nama Sarana" name="nama_sarana" value="{{ $sip->nama_sarana }}">
                                    </input>
                                </div>
                                <div class="mt-4 py-2">
                                    <label for="pilihan-dokter"
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Hari Pelayanan
                                    </label>
                                    <input
                                        class="w-full md:w-1/2 px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                        type="text" placeholder="Masukkan Nama Sarana" name="hari_pelayanan" value="{{ $sip->hari_pelayanan }}">
                                    </input>
                                </div>
                                <div class="mt-4 py-2">
                                    <label for="pilihan-dokter"
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Waktu Pelayanan
                                    </label>
                                    <input
                                        class="w-full md:w-1/2 px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                        type="text" placeholder="Masukkan Nama Sarana" name="waktu_pelayanan" value="{{$sip->waktu_pelayanan}}">
                                    </input>
                                </div>
                                <div class="justify-start py-2">
                                    <p class="text-base border-b justify-center font-bold text-gray-800 md:text-lg">
                                        Alamat Sarana
                                    </p>
                                </div>
                                <div class="mx-auto justify-center mt-4">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="Kewarganegaraan">
                                                Provinsi
                                            </label>
                                            <div className="mt-4 py-2">
                                                <div class="w-full">
                                                    <select
                                                        class="w-full md:w-1/2 text-sm appearance-none block bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="grid-last-name" name="provinsi" type="text"
                                                        placeholder="Pilih Provinsi">
                                                        <option selected value="{{ $sip->provinsi }}">
                                                            {{ $sip->provinsi }}</option>
                                                       <option value="">-- Pilih Provinsi --</option>
                                                        <option value="Jawa Timur">Jawa Timur</option>
                                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                                        <option value="Jawa Barat">Jawa Barat</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="kab/kota">
                                                Kabupaten / Kota
                                            </label>
                                            <div class="w-full">
                                                <div class="w-full">
                                                    <select
                                                        class="md:w-1/2 text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="kab/kota" type="text" name="kab_kota" placeholder="">
                                                        <option selected value="{{ $sip->kab_kota }}">
                                                            {{ $sip->kab_kota }}</option>
                                                        <option value="">Pilih Kabupaten/Kota</option>
                                                        <option value="Kab. Malang">Kab. Malang</option>
                                                        <option value="Kota Malang">Kota Malang</option>
                                                        <option value="Bandung">Bandung</option>
                                                        <option value="Medan">Medan</option>
                                                        <option value="Madiun">Madiun</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="kecamatan">
                                                Kecamatan
                                            </label>
                                            <div class="w-full">
                                                <div class="w-full">
                                                    <select
                                                        class="md:w-1/2 text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="kecamatan" name="kecamatan" type="text"
                                                        placeholder="Kecamatan">
                                                        <option selected value="{{ $sip->kecamatan }}">
                                                            {{ $sip->kecamatan }}</option>
                                                        <option disabled>Pilih Kecamamatan</option>
                                                        <option value="Kec. Lowokwaru">Kec. Lowokwaru</option>
                                                        <option value="Kec. Lowokwaru">Kec. Lowokwaru</option>
                                                        <option value="Kec. Sukun">Kec. Sukun</option>
                                                        <option value="Kec. Turen">Kec. Turen</option>
                                                        <option value="Kec. Gondanglegi">Kec. Gondanglegi</option>
                                                        <option value="Kota Batu">Kota Batu</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="kelurahan">
                                                Kelurahan
                                            </label>
                                            <div class="w-full">
                                                <div class="w-full">
                                                    <select
                                                        class="md:w-1/2 text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="kelurahan" name="kelurahan" type="text"
                                                        placeholder="kelurahan">
                                                        <option selected value="{{ $sip->kelurahan }}">
                                                            {{ $sip->kelurahan }}</option>
                                                        <option value="">Pilih Kelurahan</option>
                                                        <option value="jatimulyo">Kelurahan Jatimulyo</option>
                                                        <option value="jatimulyo">Kelurahan Jatimulyo</option>
                                                        <option value="jatimulyo">Kelurahan Jatimulyo</option>
                                                        <option value="jatimulyo">Kelurahan Jatimulyo</option>
                                                        <option value="jatimulyo">Kelurahan Jatimulyo</option>
                                                        <option value="jatimulyo">Kelurahan Jatimulyo</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="No. Identitas">
                                                RT / RW
                                            </label>
                                            <div class="grid grid-cols-2 gap-2">
                                                <div class="w-full md:">
                                                    <input
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="grid-last-name" type="number" name="rt"
                                                        placeholder="Masukkan RT" value="{{ $sip->rt }}" />
                                                </div>
                                                <div>
                                                    <input
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="grid-last-name" type="number" name="rw"
                                                        placeholder="Masukkan RW" value="{{ $sip->rw }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-first-name">
                                                Kode Pos
                                            </label>
                                            <input
                                                class="text-sm appearance-none block md:w-1/2 w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight 
                                                    focus:outline-none focus:bg-white focus:border-gray-500"
                                                name="kode_pos" id="grid-last-name" type="number"
                                                placeholder="Masukkan kode pos" value="{{ $sip->kode_pos }}" />
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-first-name">
                                                Alamat Lengkap
                                            </label>
                                            <textarea id="message" name="alamat_lengkap" rows="4"
                                                class="block p-2.5 md:w-1/2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Masukkan alamat lengkap disini">{{ $sip->alamat_lengkap }}</textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="justify-start py-2">
                                    <p class="text-base border-b justify-center font-bold text-gray-800 md:text-lg">
                                        Masa Berlaku & Upload SIP
                                    </p>
                                </div>
                                <div class="mt-4 py-2">
                                    <label for="pilihan-dokter"
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Mulai Masa Berlaku
                                    </label>

                                    <div class="relative max-w-sm">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input datepicker datepicker-autohide type="text"
                                            class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 px-4 py-3  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Pilih Mulai Berlaku" name="mulai_berlaku" 
                                            value="{{ date('m/d/Y', strtotime($sip->mulai_berlaku)) }}">
                                    </div>
                                </div>
                                <div class="mt-4 py-2">
                                    <label for="pilihan-dokter"
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Akhir Masa Berlaku
                                    </label>

                                    <div class="relative max-w-sm">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input datepicker datepicker-autohide type="text"
                                            class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 px-4 py-3  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Pilih Akhir Berlaku" name="akhir_berlaku" 
                                            value="{{ date('m/d/Y', strtotime($sip->akhir_berlaku)) }}">
                                    </div>
                                </div>

                                <div class="py-4">
                                    <label for="file_input"
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Scan SIP
                                    </label>
                                    <input
                                        class="block w-full md:w-1/2 text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="file_input" type="file" name="scan_sip" 
                                        value="{{ $sip->scan_sip }}"/>
                                </div>
                                <!-- buton -->
                                <div class="py-4 md:flex justify-start">
                                    <a href="/data-sip">
                                        <button type="button"
                                            class="text-gray-600 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-semibold rounded-lg text-xs px-3 py-2 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2 justify-end md:px-5 py-3">
                                            Batal
                                        </button>
                                    </a>

                                    <a>
                                        <button type="submit"
                                            class="text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-semibold rounded-lg text-xs px-3 py-2 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mb-2 justify-end md:px-5 py-3">
                                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18"
                                                height="18" viewBox="0 0 20 21" fill="none">
                                                <path
                                                    d="M19.7583 4.90834L15.5917 0.74168C15.5138 0.664446 15.4214 0.603342 15.3199 0.561871C15.2184 0.520401 15.1097 0.49938 15 0.500014H1.66667C1.22464 0.500014 0.800715 0.675608 0.488155 0.988169C0.175595 1.30073 0 1.72465 0 2.16668V18.8333C0 19.2754 0.175595 19.6993 0.488155 20.0118C0.800715 20.3244 1.22464 20.5 1.66667 20.5H18.3333C18.7753 20.5 19.1993 20.3244 19.5118 20.0118C19.8244 19.6993 20 19.2754 20 18.8333V5.50001C20.0006 5.39034 19.9796 5.28162 19.9381 5.18009C19.8967 5.07856 19.8356 4.98621 19.7583 4.90834ZM6.66666 2.16668H13.3333V5.50001H6.66666V2.16668ZM13.3333 18.8333H6.66666V12.1667H13.3333V18.8333ZM15 18.8333V12.1667C15 11.7246 14.8244 11.3007 14.5118 10.9882C14.1993 10.6756 13.7754 10.5 13.3333 10.5H6.66666C6.22463 10.5 5.80071 10.6756 5.48815 10.9882C5.17559 11.3007 5 11.7246 5 12.1667V18.8333H1.66667V2.16668H5V5.50001C5 5.94204 5.17559 6.36596 5.48815 6.67852C5.80071 6.99108 6.22463 7.16668 6.66666 7.16668H13.3333C13.7754 7.16668 14.1993 6.99108 14.5118 6.67852C14.8244 6.36596 15 5.94204 15 5.50001V2.50835L18.3333 5.84168V18.8333H15Z"
                                                    fill="white" />
                                            </svg>
                                            Simpan
                                        </button>
                                    </a>

                                </div>
                            </div>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
            
        </div>
        
    </div>
    </div>
@endsection
