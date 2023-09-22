@extends('Admin.Auth.master')
@section('content')
    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
        <div class="max-w-screen m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="login-section flex-1 px-24 text-left hidden lg:flex">
                <div class="m-12 xl:m-16 w-full bg-center bg-no-repeat">
                    <div class="section">
                        <div class="logoidi py-4">
                            <img class="h-12 w-12" src="{{ url('Assets/logoidi.png') }}" alt="description of myimage">
                            <p class="font-bold text-gray-50 text-2xl">Admin IDI Malang Raya</p>
                        </div>
                        <!-- <h1 class="text-5xl font-bold text-gray-50 justify-start py-2">Bergabunglah </h1>
                        <h1 class="text-5xl font-bold text-gray-50 justify-start">Bersama Kami IDI</h1>
                        <h1 class="text-5xl font-bold text-gray-50 justify-start">Malang Raya</h1> -->
                        <img class="py-10 w-50" src="{{ url('Assets/adminilustrasi.svg') }}" alt="description of myimage">
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 mt-10 xl:w-5/12 p-6 sm:p-24">
                <div class="flex flex-col px-4 md:px-12">
                    <h1 class="text-2xl xl:text-3xl font-extrabold">
                        Login Admin IDI
                    </h1>

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

                    
                        <!-- @csrf -->
                        <div class="w-full flex-1 mt-8">
                            <form action="{{ route('actionLoginAdmin') }}" method="post">
                                @csrf
                                <div class="mx-auto max-w-sm justify-center">
                                    <div class="py-4">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                            NIK
                                        </label>
                                        <input
                                            class="form-control @error('nik') is-invalid @enderror w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-primary-800 focus:bg-white"
                                            type="nik" name="nik" placeholder="Masukkan NIK" required value="{{ old('nik') }}">
                                            @error('nik')
                                            <div class="invalid-feedback text-red-600">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>

                                    <div class="py-4">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-last-name">
                                            Password
                                        </label>
                                        <input
                                            class="form-control @error('password') is-invalid @enderror w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-primary-800 focus:bg-white"
                                            type="password" name="password" placeholder="Masukkan Password" required />
                                            @error('password')
                                            <div class="invalid-feedback text-red-600">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                    <button type="submit"
                                        class=" mt-5 tracking-wide font-semibold bg-primary-600 text-gray-100 w-full py-4 rounded-lg hover:bg-primary-800 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                        <span class="ml-3">
                                            Login
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
    </div>
    </div>
@endsection
