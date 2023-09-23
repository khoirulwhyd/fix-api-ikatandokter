@extends('auth2.app')
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
                <h1 class="text-gray-800 font-extrabold text-4xl mb-1">Lupa Password</h1>
			        <p class="text-sm font-normal text-gray-600 mb-7">Harap Isi Form Dibawah</p>
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
                            <form action="{{ route('forget.password.post') }}" method="POST">
                                @csrf
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('message') }}
                                    </div>
                                @endif
                                <div class="mx-auto max-w-sm justify-center">
                                    <div class="py-1">
                                        <input
                                            class="form-control @error('email') is-invalid @enderror w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-primary-800 focus:bg-white"
                                            type="email" id="email" name="email" placeholder="Masukkaan email anda">
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                    </div>       
                                    <button type="submit"
                                        class=" mt-5 tracking-wide font-semibold bg-primary-600 text-gray-100 w-full py-4 rounded-lg hover:bg-primary-800 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                        <span class="ml-3">
                                            Pulihkan Password
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

                                    <div class="flex jusfity-end">
                                        <div class="flex flex-row items-start justify-start mt-10">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                <path d="M16 2C8.3 2 2 8.3 2 16C2 23.7 8.3 30 16 30C23.7 30 30 23.7 30 16C30 8.3 23.7 2 16 2ZM14.9 8H17.1V19H14.9V8ZM16 25C15.2 25 14.5 24.3 14.5 23.5C14.5 22.7 15.2 22 16 22C16.8 22 17.5 22.7 17.5 23.5C17.5 24.3 16.8 25 16 25Z" fill="#FED133"/>
                                                </svg>
                                            </div>
                                            <div class="items-center justify-center px-2">
                                                <p class="font-bold text-sm text-yellow-400">Note : Kami akan mengirimkan verifikasi email anda sebagai pemulihan terhadap password anda</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
            </div>
        </div>
    </div>
@endsection