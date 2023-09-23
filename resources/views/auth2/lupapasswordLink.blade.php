@extends('Admin.Auth.master')
@section('content')
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
                <h1 class="text-gray-800 font-extrabold text-4xl mb-1">Atur Ulang Password!</h1>
			        <p class="text-sm font-normal text-gray-600 mb-7">Silahkan atur ulang passwordmu</p>
                                            <!-- session -->
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

                        <div class="w-full flex-1 mt-8">
                            <form action="{{ route('reset.password.post') }}" method="post">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="mx-auto max-w-sm justify-center">
                                    <div class="py-4">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                            EMAIL
                                        </label>
                                        <input
                                            class="form-control @error('email') is-invalid @enderror w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-primary-800 focus:bg-white"
                                            type="email" name="email" placeholder="Masukkan email" required>
                                            @error('email')
                                            <div class="invalid-feedback text-red-600">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>

                                   <div class="py-4">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-last-name">
                                            Password Baru
                                        </label>
                                        <input
                                            class="form-control @error('password') is-invalid @enderror w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-primary-800 focus:bg-white"
                                            type="password" name="password" placeholder="Masukkan password baru" required />
                                            @error('password')
                                            <div class="invalid-feedback text-red-600">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="py-4">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-last-name">
                                            Ulangi Password Baru
                                        </label>
                                        <input
                                            class="form-control @error('ulangi_password') is-invalid @enderror w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-primary-800 focus:bg-white"
                                            type="password" name="ulangi_password" placeholder="Masukkan ulang password baru" required />
                                            @error('ulangi_password')
                                            <div class="invalid-feedback text-red-600">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                    <button type="submit"
                                        class=" mt-5 tracking-wide font-semibold bg-primary-600 text-gray-100 w-full py-4 rounded-lg hover:bg-primary-800 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                        <span class="ml-3">
                                            Ubah Password
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
                                </div>
                            </form>
                        </div>
            </div>
        </div>
    </div>
@endsection
