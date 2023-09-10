@extends('Auth.app')
@section('content')
@include('sweetalert::alert')
    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
        <div class="max-w-screen m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="login-section flex-1 px-24 text-left hidden lg:flex">
                <div class="m-12 xl:m-16 w-full bg-center bg-no-repeat">
                    <div class="section">
                        <div class="logoidi py-4">
                            <img class="h-12 w-12" src="{{ url('Assets/logoidi.png') }}" alt="description of myimage">
                            <!-- <img src="/Asset/logoidi.png" height={60} width={60}/> -->
                            <p class="font-bold text-gray-50 text-2xl">IDI Malang Raya</p>
                        </div>
                        <h1 class="text-5xl font-bold text-gray-50 justify-start py-2">Bergabunglah </h1>
                        <h1 class="text-5xl font-bold text-gray-50 justify-start">Bersama Kami IDI</h1>
                        <h1 class="text-5xl font-bold text-gray-50 justify-start">Malang Raya</h1>
                        <img class="py-10 w-50" src="{{ url('Assets/Ilustrasi.svg') }}" alt="description of myimage">
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 p-6 sm:p-24">
                <div class="flex flex-col px-4 md:px-12">
                    <h1 class="text-2xl xl:text-3xl font-extrabold py-2">
                        Registrasi Anggota IDI
                    </h1>
                    <div class="w-full flex-1 mt-8">
                        <form class="w-full max-w-lg" action="{{ route('register.store') }}" method="POST">
                            @csrf
                            <div class="flex flex-wrap -mx-3 mb-6 ">
                                <div class="w-full md:w-1/2 px-3 py-2">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-last-name">
                                        NPA IDI
                                    </label>
                                    <input
                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="" type="text" placeholder="Masukkan NPA IDI" name="npaidi"
                                        required />
                                </div>
                                <div class="w-full md:w-1/2 px-3 py-2">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-last-name">
                                        NIK
                                    </label>
                                    <input
                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-last-name" type="text" placeholder="Masukkan NIK" name="nik"
                                        required />
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password">
                                        Nama Lengkap dan Gelar
                                    </label>
                                    <input
                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-password" type="text" placeholder="Masukkan nama lengkap dan gelar"
                                        name="nama_lengkap" required />

                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-last-name">
                                        No. Telepon
                                    </label>
                                    <input
                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-last-name" type="text" placeholder="No. Telpon" name="no_telepon"
                                        required />
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-last-name">
                                        Email
                                    </label>
                                    <input
                                        class="text-sm appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-last-name" type="text" placeholder="Masukkan Email" name="email"
                                        required />
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
                            <button
                                class=" mt-5 tracking-wide font-semibold bg-primary-600 text-gray-100 w-full py-4 rounded-lg hover:bg-primary-800 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none"
                                onclick="location.href='{{ route('login.index') }}">
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
                                <a href="{{ route('login.index') }}" className="px-2">
                                    <span class="text-primary-600 font-semibold underline">Login</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('sweetalert::alert')

@endsection('content')

