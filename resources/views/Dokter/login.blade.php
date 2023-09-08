<!doctype html>
<html class="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/login.css') }}" rel="stylesheet">
  @vite(['resources/css/app.css','resources/js/app.js', 'resources/css/login.css'])
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body class="h-full">
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
                <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-24">
                    <div class="flex flex-col px-4 md:px-12">
                        <h1 class="text-2xl xl:text-3xl font-extrabold">
                            Login Anggota IDI
                        </h1>
                        <div class="w-full flex-1 mt-8">

                            <div class="mx-auto max-w-sm justify-center">
                                <div class="py-4">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                        NIK
                                    </label>
                                    <input class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                        type="email" placeholder="Masukkan NIK">
                                    </input>
                                </div>

                                <div class="py-4">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                        Password
                                    </label>
                                    <input class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                        type="password" placeholder="Masukkan Password">
                                    </input>
                                </div>
                                <div class="py-4">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                        Kode Unik
                                    </label>
                                    <input class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                        type="text" placeholder="Masukkan Kode Unik">
                                    </input>
                                </div>
                                    <button
                                        class=" mt-5 tracking-wide font-semibold bg-primary-600 text-gray-100 w-full py-4 rounded-lg hover:bg-primary-800 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                        <span class="ml-3">
                                            Login
                                        </span>
                                        <div class="ml-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 17 14" fill="none">
                                                <path d="M16.25 7.22571L1.25 7.22571" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10.2002 1.20131L16.2502 7.22531L10.2002 13.2503" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </button>
                                
                                
                                <div class="jusfity-end py-2">
                                    <button className="px-2 py-2">
                                        <span class="text-primary-600 underline">Lupa Password ?</span>
                                    </button>
                                </div>

                                <div class="flex jusfity-end py-6">
                                    <span class="text-gray-600 ">Belum Memiliki Akun ? </span>
                                    <button class="px-2">
                                        <span class="text-primary-600 font-semibold underline">Daftar Sekarang</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
</div>
</body>
</html>