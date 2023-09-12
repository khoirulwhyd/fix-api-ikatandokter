@extends('auth2.app')
@section('content')
        <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
            <div class="max-w-screen m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
                <div class="login-section flex-1 px-24 text-left hidden lg:flex">
                    <div class="m-12 xl:m-16 w-full bg-center bg-no-repeat">
                        <div class="section">
                            <div class="logoidi py-4">
                                <img class="h-12 w-12" src="{{ url('Assets/logoidi.png') }}" alt="description of myimage">
                                <p class="font-bold text-gray-50 text-2xl">IDI Malang Raya</p>
                            </div>
                            <h1 class="text-5xl font-bold text-gray-50 justify-start py-2">Bergabunglah </h1>
                            <h1 class="text-5xl font-bold text-gray-50 justify-start">Bersama Kami IDI</h1>
                            <h1 class="text-5xl font-bold text-gray-50 justify-start">Malang Raya</h1>
                            <img class="py-10 w-50" src="{{ url('Assets/Ilustrasi.svg') }}" alt="description of myimage">
                        </div>

                    </div>
                </div>
                <!-- <div class="lg:w-1/2 mt-16 xl:w-5/12 p-6 sm:p-24">
                    <div class="justify-start items-center">
                        <div>
                            <h1 class="font-bold text-3xl text-gray-700">Verifikasi Email Dikirim</h1>
                        </div>
                        <div>
                            <p class="font-medium py-6 text-lg text-gray-500">Silakan cek kotak masuk email Anda untuk menemukan pesan dari kami. Lalu klik tautan untuk melanjutkan</p>
                        </div>
                        <div class="flex flex-row items-start justify-start mt-10">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M16 2C8.3 2 2 8.3 2 16C2 23.7 8.3 30 16 30C23.7 30 30 23.7 30 16C30 8.3 23.7 2 16 2ZM14.9 8H17.1V19H14.9V8ZM16 25C15.2 25 14.5 24.3 14.5 23.5C14.5 22.7 15.2 22 16 22C16.8 22 17.5 22.7 17.5 23.5C17.5 24.3 16.8 25 16 25Z" fill="#FED133"/>
                                </svg>
                            </div>
                            <div class="items-center justify-center px-2">
                                <p class="font-medium text-sm text-yellow-400">Note : Setelah verifikasi email harap menunggu admin untuk mengkonfirmasi pendaftaran anda</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-24">
                    <div class="flex p-28 flex-col px-4 md:px-12">
                        <div class="w-full px-4 md:px-2">
                            <h1 class="text-2xl xl:text-3xl font-extrabold">
                                Verifikasi Email
                            </h1>
                            <p class="py-8 font-medium text-gray-500">
                                Kami mengirimkan verifikasi ke email anda. Silakan cek kotak masuk email Anda untuk menemukan pesan dari kami. Lalu klik tautan untuk melanjutkan.
                            </p>
                            <div class="flex jusfity-end">
                                <div class="flex flex-row items-start justify-start mt-10">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M16 2C8.3 2 2 8.3 2 16C2 23.7 8.3 30 16 30C23.7 30 30 23.7 30 16C30 8.3 23.7 2 16 2ZM14.9 8H17.1V19H14.9V8ZM16 25C15.2 25 14.5 24.3 14.5 23.5C14.5 22.7 15.2 22 16 22C16.8 22 17.5 22.7 17.5 23.5C17.5 24.3 16.8 25 16 25Z" fill="#FED133"/>
                                        </svg>
                                    </div>
                                    <div class="items-center justify-center px-2">
                                        <p class="font-medium text-sm text-yellow-400">Note : Setelah verifikasi email harap menunggu admin untuk mengkonfirmasi pendaftaran anda</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection