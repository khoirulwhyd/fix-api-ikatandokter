@extends('auth2.app')
@section('content')
@include('sweetalert::alert')
    <div class="h-screen md:flex">
        <div class="masuk-section relative overflow-hidden md:flex w-1/2 justify-around items-center     hidden">
                <div class="justify-center items-center">
                    <div class="mb-4">
                        <img src="/Assets/ilustrasi.svg"/>
                    </div>
                    <div class="items-center self-center text-center">
                        <h1 class="text-white font-bold text-4xl font-sans">IDI Malang Raya</h1>
                        <p class="text-white mt-3">Aplikasi Pendataan bagi para dokter dimalang raya</p>
                    </div>                    
                </div>
                <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
                <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
                <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
                <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        </div>
        <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
            <div class="bg-white">
                <h1 class="text-gray-800 font-extrabold text-4xl mb-1">Hello Dokter!</h1>
			    <p class="text-sm font-normal text-gray-600 mb-7">Silahkan mendaftar untuk mengakses website kami</p>
                        @if(session()->has('succes'))
                        <div class="alert alert-success alert-dismissible fade-show" role="alert">
                            {{ session('succes') }}
                            <button type="button" class="btn-close" data-bs-dinmiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if(session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade-show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dinmiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                <div class="w-full flex mt-8">
                    <form class="w-full max-w-lg" action="{{ route('post-register') }}" method="post">
                        @csrf
                            <div class="flex flex-wrap -mx-3 mb-6 ">
                                <div class="w-full md:w-1/2 px-3 py-2">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-last-name">
                                        NPA IDI
                                    </label>
                                    <input
                                        class="@error('npaidi') is-invalid @enderror text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="" type="text" placeholder="Masukkan NPA IDI" name="npaidi"
                                        required value="{{ old('npaidi') }}" />
                                </div>
                                <div class="w-full md:w-1/2 px-3 py-2">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-last-name">
                                        NIK
                                    </label>
                                    <input
                                        class="@error('nik') is-invalid @enderror text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-last-name" type="text" placeholder="Masukkan NIK" name="nik"
                                        required value="{{ old('nik') }}"/>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password">
                                        Nama lengkap dan Gelar
                                    </label>
                                    <input
                                        class="@error('nama_lengkap') is-invalid @enderror text-sm appearance-none block w-full bg-gray-100    text-gray-700 border border-gray-200 rounded-lg py-3 px-4 m leading-tight focus:outline-none focus:bg-wh focus:border-gray-500"
                                        id="grid-password" type="text" placeholder="Masukkan nama leng  dan gelar"
                                        name="nama_lengkap" required value="{{ old('nama_lengkap') }}"/>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-last-name">
                                        No. Telepon
                                    </label>
                                    <input
                                        class="@error('no_telepon') is-invalid @enderror text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-last-name" type="text" placeholder="No. Telpon" name="no_telepon"
                                        required value="{{ old('no_telepon') }}" />
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-last-name">
                                        Email
                                    </label>
                                    <input
                                        class="@error('email') is-invalid @enderror text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-last-name" type="text" placeholder="Masukkan Email" name="email"
                                        required value="{{ old('email') }}"/>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 py-2">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-last-name">
                                        Password
                                    </label>
                                    <input
                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-last-name" type="password" placeholder="Doe" name="password" required />
                                </div>
                                <div class="w-full md:w-1/2 px-3 py-2">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-last-name">
                                        Ulangi Password
                                    </label>
                                    <input
                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-last-name" type="password" placeholder="Doe" name="ulangi_password"
                                        required />
                                </div>
                            </div>
                            <label class="md:w-2/3 text-gray-600 font-medium">
                                <input class="mr-2 leading-tight rounded-sm" type="checkbox" required />
                                <span class="text-sm">
                                    Saya menerima syarat dan ketentuan yang berlakuu
                                </span>
                            </label>
                            <button type="submit"
                                class=" mt-5 tracking-wide font-semibold bg-primary-600 text-gray-100 w-full py-4 rounded-lg hover:bg-primary-800 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                <span class="ml-3">
                                    Registrasi Sekarang
                                </span>
                                <div class="ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 17 14" fill="none">
                                        <path d="M16.25 7.22571L1.25 7.22571" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.2002 1.20131L16.2502 7.22531L10.2002 13.2503" stroke="white"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </button>
                            <div class="flex jusfity-end py-2">
                                <span class="text-gray-600 mr-2">Sudah memiliki akun ? </span>
                                <a href="{{ url('login') }}" className="px-2">
                                    <span class="text-primary-600 font-semibold underline">Login</span>
                                </a>
                            </div>
                    </form>
                </div>
                
                
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection