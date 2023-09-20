@extends('Layouts.app')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700 md:mt-14">
            <form action="{{ route('data-pribadi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-0 gap-4 mb-4">
                    <div
                        class="max-w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="section-icon flex items-start justify-start mb-4">
                            <p class="text-sm justify-center font-semibold text-gray-800 md:text-lg">
                                Data Pribadi
                            </p>

                            <p class='ml-2 font-medium text-sm text-gray-400 md:text-lg'>
                                > Edit Data Pribadi
                            </p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div class="flex justify-start ...">
                                <img class="w-16 h-16 rounded-full" src="/Assets/main-avatar.svg" alt="user photo" />
                                <div class="section-avatar px-6">
                                    <p class="text-primary-600 text-base font-semibold md:text-xl">{{ $data->nama_lengkap }}
                                    </p>
                                    <p class="font-regular text-gray-400 text-sm sm:text-lg">{{ $data->nik }}</p>
                                </div>
                            </div>

                        </div>
                        <div class="justify-start w-full h-full">
                            <div class="justify-start py-2">
                                <p class="text-base border-b justify-center font-bold text-gray-800 md:text-lg">
                                    Data Pribadi
                                </p>
                                <div class="mx-auto justify-center">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}" />
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-first-name">
                                                NPA IDI
                                            </label>
                                            <input
                                                class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="grid-last-name" type="number" name="npaidi"
                                                placeholder="Masukkkan NPA IDI" value="{{ $data->npaidi }}" readonly
                                                required />
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                No Identitas
                                            </label>
                                            <div class="grid grid-cols-2 gap-4">
                                                <div class="w-full">
                                                    <select
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="grid-last-name" placeholder="Masukkkan NPA IDI"
                                                        name="identitas">
                                                        <option selected disabled>Pilih Tipe</option>
                                                        <option value="KTP">KTP</option>
                                                        <option value="SIM">SIM</option>
                                                        <option value="KTA">KTA</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <input
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="grid-last-name" type="number" name="no_identitas"
                                                        placeholder="Masukkan Nomer Identitas" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-first-name">
                                                Nama Lengkap Beserta Gelar
                                            </label>
                                            <input
                                                class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="grid-last-name" type="text" name="nama_lengkap"
                                                placeholder="Masukkkan nama lengkap beserta gelar"
                                                value="{{ $data->nama_lengkap }}" required />
                                        </div>
                                    </div>
                                    <div class="mb-6">
                                        <label for="upload"
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                            Foto terbaru
                                        </label>
                                        <input type="hidden" name="foto_diri">
                                        <input
                                            class="block w-full md:w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            id="upload" name="foto" type="file" accept=".png, .jpg, .jpeg" />
                                        <span class="py-2 text-red-600 text-xs italic">Ukuran maksimal file 1 MB, Mengikuti
                                            Tahun Lahir, Genap Background Biru, Ganjil Background Merah</span>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                Tempat Tanggal Lahir
                                            </label>
                                            <div class="grid grid-cols-2 gap-2">
                                                <div class="w-full md:">
                                                    <input
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="grid-last-name" type="text" name="tempat_lahir"
                                                        placeholder="Tempat" required />
                                                </div>
                                                <div>
                                                    <div class="relative max-w-sm">
                                                        <div
                                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                            </svg>
                                                        </div>
                                                        <input datepicker datepicker-autohide type="text"
                                                            name="tanggal_lahir"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="Tanggal lahir">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                Jenis Kelamin
                                            </label>
                                            <div class="grid grid-cols-2 gap-2">
                                                <label class="form-check form-check-inline form-check-solid me-5">
                                                    <input class="form-check-input" name="jenis_kelamin" type="radio"
                                                        value="laki-laki" required />
                                                    <span class="fw-bold ps-2 fs-6">Laki-laki</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label class="form-check form-check-inline form-check-solid">
                                                    <input class="form-check-input" name="jenis_kelamin" type="radio"
                                                        value="perempuan" required />
                                                    <span class="fw-bold ps-2 fs-6">Perempuan</span>
                                                </label>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="Kewarganegaraan">
                                                Kewarganegaraan
                                            </label>
                                            <div className="w-full">
                                                <div class="w-full">
                                                    <select
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="grid-last-name" type="text" name="kewarganegaraan"
                                                        placeholder="Kewarganegaraan">
                                                        <option selected disabled>Pilih Kewarganegaraan</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Singapura">Singapua</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="Kewarganegaraan">
                                                Agama
                                            </label>
                                            <div className="w-full">
                                                <div class="w-full">
                                                    <select
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="grid-last-name" name="agama" type="text"
                                                        placeholder="Agama">
                                                        <option selected disabled>Pilih Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristenkatolik">Kristen Katolik</option>
                                                        <option value="Kristenprotestan">Kristen Protestan</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-first-name">
                                                Nama Pasangan
                                            </label>
                                            <input
                                                class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="grid-last-name" type="text" name="nama_pasangan"
                                                placeholder="Masukkan nama pasangan" required />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- alamat -->
                            <div className="justify-start pt-4">
                                <p class="text-base border-b justify-center font-bold text-gray-800 md:text-lg">
                                    Alamat Sesuai KTP
                                </p>
                                <div class="mx-auto justify-center">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="Kewarganegaraan">
                                                Provinsi
                                            </label>
                                            <div className="w-full">
                                                <div class="w-full">
                                                    <select
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="grid-last-name" name="ktp_provinsi" type="text"
                                                        placeholder="Pilih Provinsi">
                                                        <option selected disabled>Pilih Provinsi</option>
                                                        <option value="JawaTimur">Jawa Timur</option>
                                                        <option value="JawaTengah">Jawa Tengah</option>
                                                        <option value="JawaBarat">Jawa Barat</option>
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
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="kab/kota" type="text" name="ktp_kabupaten_kota"
                                                        placeholder="">
                                                        <option selected disabled>Pilih Kabupaten/Kota</option>
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
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="kecamatan" name="ktp_kecamatan" type="text"
                                                        placeholder="Kewarganegaraan">
                                                        <option selected disabled>Pilih Kecamamatan</option>
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
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="kelurahan" name="ktp_kelurahan" type="text"
                                                        placeholder="kelurahan">
                                                        <option selected disabled>Pilih Kelurahan</option>
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
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                RT / RW
                                            </label>
                                            <div class="grid grid-cols-2 gap-2">
                                                <div class="w-full md:">
                                                    <input
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="grid-last-name" type="number" name="ktp_rt"
                                                        placeholder="Masukkan RT" required />
                                                </div>
                                                <div>
                                                    <input
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="grid-last-name" type="number" name="ktp_rw"
                                                        placeholder="Masukkan RW" required />
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
                                                class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight 
                                                    focus:outline-none focus:bg-white focus:border-gray-500"
                                                name="ktp_kodepos" id="grid-last-name" type="number"
                                                placeholder="Masukkan kode pos" />
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-first-name">
                                                Alamat Lengkap
                                            </label>
                                            <textarea id="message" name="ktp_alamat_lengkap" rows="4"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Masukkan alamat lengkap disini" required></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="mb-6">
                                <label for="file_input"
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    Foto KTP
                                </label>
                                <input type="hidden" name="foto_ktp">
                                <input
                                    class="block w-full md:w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="file_input" name="photo_ktp" type="file" accept=".png, .jpg, .jpeg" />
                                <span class="py-2 text-red-600 text-xs italic">Ukuran maksimal file 1 MB</span>
                            </div>

                            <div class="justify-start pt-4">
                                <p class="text-base border-b justify-center font-bold text-gray-800 md:text-lg">
                                    Detail Kontak
                                </p>
                                <div class="mx-auto justify-center">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-first-name">
                                                No. Telpon Rumah
                                            </label>
                                            <input
                                                class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="grid-last-name" name="no_teleponrumah" type="number"
                                                placeholder="Masukkan No Telpon Rumah" />
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-first-name">
                                                No. Hp 1
                                            </label>
                                            <input
                                                class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="grid-last-name" name="no_hp" type="number"
                                                placeholder="Masukkan No Hp" value="{{ $data->no_telepon }}" required />
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-first-name">
                                                No. Hp 2
                                            </label>
                                            <input
                                                class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="grid-last-name" name="no_hp2" type="number"
                                                placeholder="Masukkan No Hp" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="justify-start pt-4">
                                <p class="text-base border-b justify-center font-bold text-gray-800 md:text-lg">
                                    Alamat Korespondensi
                                </p>

                                <div class="mx-auto justify-center">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="Kewarganegaraan">
                                                Provinsi
                                            </label>
                                            <div className="w-full">
                                                <div class="w-full">
                                                    <select
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="grid-last-name" name="krsp_provinsi" type="text"
                                                        placeholder="Pilih Provinsi">
                                                        <option selected disabled>Pilih Provinsi</option>
                                                        <option value="JawaTimur">Jawa Timur</option>
                                                        <option value="JawaTengah">Jawa Tengah</option>
                                                        <option value="JawaBarat">Jawa Barat</option>
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
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="kab/kota" type="text" name="krsp_kabupaten_kota"
                                                        placeholder="">
                                                        <option selected disabled>Pilih Kabupaten/Kota</option>
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
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="kecamatan" name="krsp_kecamatan" type="text"
                                                        placeholder="Kewarganegaraan">
                                                        <option selected disabled>Pilih Kecamamatan</option>
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
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="kelurahan" name="krsp_kelurahan" type="text"
                                                        placeholder="kelurahan">
                                                        <option selected disabled>Pilih Kelurahan</option>
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
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="No. Identitas">
                                                RT / RW
                                            </label>
                                            <div class="grid grid-cols-2 gap-2">
                                                <div class="w-full md:">
                                                    <input
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="grid-last-name" type="number" name="krsp_rt"
                                                        placeholder="Masukkan RT" required />
                                                </div>
                                                <div>
                                                    <input
                                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        id="grid-last-name" type="number" name="krsp_rw"
                                                        placeholder="Masukkan RW" required />
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
                                                class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight 
                                                    focus:outline-none focus:bg-white focus:border-gray-500"
                                                name="krsp_kodepos" id="grid-last-name" type="number"
                                                placeholder="Masukkan kode pos" />
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-first-name">
                                                Alamat Lengkap
                                            </label>
                                            <textarea id="message" name="krsp_alamat_lengkap" rows="4"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Masukkan alamat lengkap disini" required></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="justify-end py-4 md:flex justify-end">>
                    <button type="button"
                        class="text-gray-500 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-semibold rounded-lg text-xs px-3 py-2 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2 justify-end md:px-5 py-3">
                        Batal
                    </button>

                    <button type="submit"
                        class="text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-semibold rounded-lg text-xs px-3 py-2 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mb-2 justify-end md:px-5 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M7.24988 7.6C7.24988 8.566 8.03388 9.35 8.99988 9.35H14.9999C15.464 9.35 15.9091 9.16563 16.2373 8.83744C16.5655 8.50925 16.7499 8.06413 16.7499 7.6V4.276C16.7499 4.124 16.8739 4 17.0259 4C17.098 3.99987 17.1693 4.01536 17.2349 4.04539C17.3005 4.07543 17.3588 4.1193 17.4059 4.174L20.3689 7.629C20.7793 8.10775 20.9936 8.72391 20.9689 9.354L20.6269 18.098C20.6016 18.7434 20.3274 19.3539 19.862 19.8017C19.3965 20.2495 18.7758 20.4997 18.1299 20.5H17.7509C17.6183 20.5 17.4911 20.4473 17.3973 20.3536C17.3036 20.2598 17.2509 20.1326 17.2509 20V15C17.2509 14.5359 17.0665 14.0908 16.7383 13.7626C16.4101 13.4344 15.965 13.25 15.5009 13.25H8.50088C8.27098 13.2499 8.04331 13.295 7.83087 13.3829C7.61844 13.4708 7.4254 13.5997 7.26279 13.7622C7.10019 13.9247 6.97119 14.1177 6.88318 14.3301C6.79518 14.5425 6.74988 14.7701 6.74988 15V20C6.74988 20.1326 6.6972 20.2598 6.60343 20.3536C6.50966 20.4473 6.38249 20.5 6.24988 20.5H6.11288C5.53091 20.5001 4.96888 20.288 4.53206 19.9034C4.09524 19.5189 3.8136 18.9883 3.73988 18.411C3.24609 14.553 3.22494 10.6491 3.67688 6.786L3.73688 6.266C3.80992 5.64178 4.10969 5.06613 4.57923 4.64839C5.04878 4.23065 5.6554 3.99991 6.28388 4H6.74988C6.88249 4 7.00966 4.05268 7.10343 4.14645C7.1972 4.24022 7.24988 4.36739 7.24988 4.5V7.6Z"
                                fill="white" />
                            <path
                                d="M8.25 20C8.25 20.1326 8.30268 20.2598 8.39645 20.3536C8.49021 20.4473 8.61739 20.5 8.75 20.5H15.25C15.3826 20.5 15.5098 20.4473 15.6036 20.3536C15.6973 20.2598 15.75 20.1326 15.75 20V15C15.75 14.9337 15.7237 14.8701 15.6768 14.8232C15.6299 14.7763 15.5663 14.75 15.5 14.75H8.5C8.4337 14.75 8.37011 14.7763 8.32322 14.8232C8.27634 14.8701 8.25 14.9337 8.25 15V20ZM15.25 4.5C15.25 4.36739 15.1973 4.24021 15.1036 4.14645C15.0098 4.05268 14.8826 4 14.75 4H9.25C9.11739 4 8.99021 4.05268 8.89645 4.14645C8.80268 4.24021 8.75 4.36739 8.75 4.5V7.6C8.75 7.738 8.862 7.85 9 7.85H15C15.0663 7.85 15.1299 7.82366 15.1768 7.77678C15.2237 7.72989 15.25 7.6663 15.25 7.6V4.5Z"
                                fill="white" />
                        </svg>
                        Simpan
                    </button>

                </div>
            </form>
        </div>
    </div>
@endsection
