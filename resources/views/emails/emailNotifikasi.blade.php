@extends('auth2.app')
@section('content')
    <div class="flex items-center justify-center flex-col mt-5">
      <section class="max-w-2xl mx-auto bg-white">
        <header class="py-8 flex flex-row items-center justify-center w-full">
          <!-- <a href="#">
            <img
              src="/Assets/logoidi.png"
              alt="tailwindtaplogo"
              class="h-12 w-12"
            />
          </a> -->
          <p class="px-2 font-semibold ">IDI Malang Raya</p>
        </header>
        <div class="h-[200px] bg-[#365CCE] w-full text-white flex items-center justify-center flex-col gap-5">
          <div class="flex items-center gap-3">
            <div class="w-10 h-[1px] bg-white"></div>
            <EmailIcon />
            <div class="w-10 h-[1px] bg-white"></div>
          </div>
          <div class="flex flex-col gap-3">
            <div class="text-center text-sm sm:text-xl tracking-widest font-normal">
              THANKS FOR SIGNING UP!
            </div>
            <div class="text-xl sm:text-3xl tracking-wider font-bold capitalize">
              masa berlaku sip anda dengan nomor {{ $nomor }} akan berakhir, tepatnya {{ $end }}
                sisa {{ $sisa }} hari
            </div>
          </div>
        </div>
        <main class="mt-8 px-5 sm:px-10">
          <h2 class="text-gray-700 ">Hello, Dokter</h2>
          <div class="flex items-center mt-4 gap-x-4">
          </div>
          <p class="mt-2 leading-loose text-gray-600">
            Kami ucapkan terimakasih atas registrasinya.
            <span class="font-bold"> Harap tekan</span> . Tombol dibawah untuk melakukan verifikasi terhadap pendaftaran anda
          </p>
         
          
          <p class="mt-8 text-gray-600">
            Thank you, <br />
            IDI Malang Raya
          </p>
        </main>
        
        <footer class="mt-8">
          <div class="bg-gray-300/60 h-[200px] flex flex-col gap-3 justify-center items-center">
            <div class="text-center flex flex-col gap-2">
              <h1 class="text-[#365CCE] font-semibold tracking-wide text-lg">
                Get in touch
              </h1>
              <a
                href=""
                class="text-gray-500"
                alt="+91-848-883-8308"
              >
                +91-848-883-8308
              </a>
              <a
                href="mailto:sales@infynno.com"
                class="text-gray-500"
                alt="sales@infynno.com"
              >
                idimalangraya@malang.id
              </a>
            </div>
            <div class="flex items-center justify-center gap-3">
              <a href="#_">
                <FacebookIcon />
              </a>
              <a href="#_">
                <LinkedinIcon />
              </a>
              <a href="#_">
                <InstagramIcon />
              </a>
            </div>
          </div>
          <div class="bg-[#365CCE] py-5 text-white text-center">
            <p class="mt-3 ">
              © 2023 IDI Malang Raya. All Rights Reserved.
            </p>
          </div>
        </footer>
      </section>
@endsection