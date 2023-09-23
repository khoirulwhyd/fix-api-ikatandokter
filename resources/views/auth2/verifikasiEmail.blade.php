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
                <h1 class="text-gray-800 font-extrabold text-4xl mb-1">Verifikasi Email Dikirim!</h1>
			        <p class="text-sm font-normal text-gray-600 mb-7">Silahkan Verifikasi Email Anda</p>
                    <div class="max-w-sm mt-8 text-medium text-gray-600">
                        <p>
                            Kami mengirimkan verifikasi ke email anda. Silakan cek kotak masuk atau folder spam pada email anda untuk menemukan pesan dari kami. Lalu klik tombol verifikasi untuk melanjutkan.
                        </p>
                        <div class="flex jusfity-end">
                                <div class="flex flex-row items-start justify-start mt-10">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M16 2C8.3 2 2 8.3 2 16C2 23.7 8.3 30 16 30C23.7 30 30 23.7 30 16C30 8.3 23.7 2 16 2ZM14.9 8H17.1V19H14.9V8ZM16 25C15.2 25 14.5 24.3 14.5 23.5C14.5 22.7 15.2 22 16 22C16.8 22 17.5 22.7 17.5 23.5C17.5 24.3 16.8 25 16 25Z" fill="#FED133"/>
                                        </svg>
                                    </div>
                                    <div class="items-center justify-center px-2">
                                        <p class="font-bold text-sm text-yellow-400">Note : Setelah verifikasi email harap menunggu admin untuk mengkonfirmasi pendaftaran anda</p>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
        </div>
    </div>
@endsection