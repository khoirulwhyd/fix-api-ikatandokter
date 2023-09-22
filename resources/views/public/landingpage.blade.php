@extends('public.app')
@section('content')
    <section class="bg-white dark:bg-gray-900 mt-10">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-3xl font-extrabold leading-none md:text-5xl xl:text-6xl md:text-left text-center text-gray-700">Bergabunglah Bersama Kami</h1>
                <p class="max-w-2xl mb-6 font-regular text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 md:text-left text-center">IDI adalah sebuah organisasi dokter yang ada di malang raya, Organisasi mecakup semua lokasi dimalang raya</p>

                <div class="text-center md:text-left">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Mulai Sekarang
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Cari Dokter
                    </a>
                </div>
                 
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="/Assets/ilustrasi.svg" alt="mockup">
            </div>                
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900 justify-center">
        <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
            <div class="grid grid-cols-3 md:gap-4 gap-0">
                <div class="max-w-sm bg-white rounded-lg dark:bg-gray-800 dark:border-gray-700">
                    <a class="p-8 rounded-t-lg justify-center" href="#">
                        <div class="justify-center text-center">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-14 h-14 md:w-20 md:h-20 shadow-lg rounded-full">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 57 57" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.1775 16.3993C40.1775 20.5093 39.1562 25.8696 37.5852 25.0562C36.9427 27.1542 35.594 28.9651 33.768 30.1816C31.9419 31.398 29.7511 31.945 27.5676 31.7296C25.3841 31.5142 23.3424 30.5497 21.7893 28.9999C20.2361 27.4501 19.2672 25.4105 19.0471 23.2275C17.4879 20.4998 15.443 15.0337 20.7001 10.7729C20.7951 10.7421 20.8521 10.4856 20.9376 10.108C21.263 8.67939 21.9838 5.50401 26.5307 6.11082C30.0374 6.57751 40.1775 8.38726 40.1775 16.3993ZM35.6579 18.9905C35.6579 18.9905 35.1211 20.5603 35.6246 22.3095C35.6181 24.1746 34.8805 25.9627 33.5702 27.29C32.26 28.6173 30.4815 29.3779 28.6166 29.4086C26.7518 29.4392 24.9493 28.7374 23.5962 27.4538C22.243 26.1703 21.4471 24.4073 21.3794 22.5434C21.5516 21.8903 21.5516 20.7848 21.5504 19.5557C21.5492 17.3386 21.5468 14.7226 22.5621 13.6562C29.6741 18.3931 35.6579 18.9905 35.6579 18.9905Z" fill="#0046B7"/>
                                    <path d="M15.4375 42.7499C15.4375 41.465 16.1179 40.3393 17.1392 39.7123C17.1003 39.5645 17.0639 39.416 17.0299 39.267C16.8497 38.4557 16.709 37.6361 16.6084 36.8112C16.5063 36.0208 16.4449 35.2258 16.4243 34.4291C11.4119 36.3968 7.125 39.8263 7.125 43.4268V49.8749H49.875V43.4268C49.875 39.9783 45.9444 36.6877 41.2086 34.6868V34.72C41.23 35.4444 41.1896 36.2757 41.1112 37.0748C41.04 37.8158 40.9343 38.5545 40.8072 39.1874H41.5625C41.783 39.1875 41.9991 39.249 42.1866 39.365C42.3741 39.481 42.5256 39.6469 42.6241 39.8441L43.8116 42.2191C43.8948 42.3842 43.9375 42.5658 43.9375 42.7499V45.1249C43.9375 45.4399 43.8124 45.7419 43.5897 45.9646C43.367 46.1873 43.0649 46.3124 42.75 46.3124H40.375V43.9374H41.5625V43.0302L40.8286 41.5624H37.5464L36.8125 43.0302V43.9374H38V46.3124H35.625C35.3101 46.3124 35.008 46.1873 34.7853 45.9646C34.5626 45.7419 34.4375 45.4399 34.4375 45.1249V42.7499C34.4375 42.5658 34.4803 42.3842 34.5634 42.2191L35.7509 39.8441C35.8494 39.6469 36.0009 39.481 36.1884 39.365C36.3759 39.249 36.592 39.1875 36.8125 39.1874H38.3741C38.4002 39.0853 38.4263 38.9725 38.4524 38.8478C38.5712 38.2885 38.6769 37.5795 38.7481 36.8468C38.8194 36.113 38.8526 35.385 38.8348 34.7865C38.8304 34.5386 38.8109 34.2911 38.7766 34.0455C38.7505 33.8769 38.7244 33.7997 38.7196 33.7831C38.7184 33.7795 38.7172 33.7783 38.7196 33.7807L38.7232 33.7795C38.0931 33.5838 37.4557 33.4123 36.8125 33.2653C36.2152 33.1288 35.5977 33.9505 35.3281 34.4647H21.375C21.3403 34.3985 21.3063 34.332 21.2729 34.2652C21.0211 33.7641 20.7112 33.1454 20.1875 33.2653C19.7303 33.3687 19.2731 33.4874 18.8159 33.618C18.8012 33.8263 18.7949 34.0351 18.7969 34.2438C18.8017 34.9005 18.8646 35.7045 18.9656 36.5167C19.0665 37.3266 19.2031 38.1151 19.3456 38.7373C19.3859 38.9167 19.4263 39.0782 19.4643 39.2171C20.1432 39.3063 20.782 39.5894 21.3043 40.0323C21.8265 40.4752 22.21 41.0592 22.4089 41.7144C22.6078 42.3696 22.6137 43.0683 22.4258 43.7268C22.2379 44.3852 21.8642 44.9756 21.3494 45.4272C20.8347 45.8788 20.2007 46.1724 19.5234 46.273C18.8461 46.3737 18.1541 46.2769 17.5304 45.9944C16.9066 45.712 16.3775 45.2557 16.0063 44.6803C15.6351 44.1049 15.4376 43.4347 15.4375 42.7499Z" fill="#0046B7"/>
                                    <path d="M20.1875 42.75C20.1875 43.4316 19.6389 43.9553 19 43.9553C18.3611 43.9553 17.8125 43.4328 17.8125 42.75C17.8125 42.0684 18.3611 41.5447 19 41.5447C19.6389 41.5447 20.1875 42.0672 20.1875 42.75Z" fill="#0046B7"/>
                                    </svg>
                                </i>
                            </div>
                        </div>
                    </a>
                    <div class="px-5 pb-5 text-center">
                        <a href="#">
                            <h5 class="text-sm md:text-xl font-medium tracking-tight text-gray-500 dark:text-white">Dokter Umum</h5>
                        </a>
                        <div class="text-center">
                            <span class="md:text-xl text-xl font-bold text-gray-900 dark:text-white">100+</span>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm bg-white rounded-lg dark:bg-gray-800 dark:border-gray-700">
                    <a class="p-8 rounded-t-lg justify-center" href="#">
                        <div class="justify-center text-center">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-14 h-14 md:w-20 md:h-20 shadow-lg rounded-full">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 57 57" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.1775 16.3993C40.1775 20.5093 39.1562 25.8696 37.5852 25.0562C36.9427 27.1542 35.594 28.9651 33.768 30.1816C31.9419 31.398 29.7511 31.945 27.5676 31.7296C25.3841 31.5142 23.3424 30.5497 21.7893 28.9999C20.2361 27.4501 19.2672 25.4105 19.0471 23.2275C17.4879 20.4998 15.443 15.0337 20.7001 10.7729C20.7951 10.7421 20.8521 10.4856 20.9376 10.108C21.263 8.67939 21.9838 5.50401 26.5307 6.11082C30.0374 6.57751 40.1775 8.38726 40.1775 16.3993ZM35.6579 18.9905C35.6579 18.9905 35.1211 20.5603 35.6246 22.3095C35.6181 24.1746 34.8805 25.9627 33.5702 27.29C32.26 28.6173 30.4815 29.3779 28.6166 29.4086C26.7518 29.4392 24.9493 28.7374 23.5962 27.4538C22.243 26.1703 21.4471 24.4073 21.3794 22.5434C21.5516 21.8903 21.5516 20.7848 21.5504 19.5557C21.5492 17.3386 21.5468 14.7226 22.5621 13.6562C29.6741 18.3931 35.6579 18.9905 35.6579 18.9905Z" fill="#0046B7"/>
                                    <path d="M15.4375 42.7499C15.4375 41.465 16.1179 40.3393 17.1392 39.7123C17.1003 39.5645 17.0639 39.416 17.0299 39.267C16.8497 38.4557 16.709 37.6361 16.6084 36.8112C16.5063 36.0208 16.4449 35.2258 16.4243 34.4291C11.4119 36.3968 7.125 39.8263 7.125 43.4268V49.8749H49.875V43.4268C49.875 39.9783 45.9444 36.6877 41.2086 34.6868V34.72C41.23 35.4444 41.1896 36.2757 41.1112 37.0748C41.04 37.8158 40.9343 38.5545 40.8072 39.1874H41.5625C41.783 39.1875 41.9991 39.249 42.1866 39.365C42.3741 39.481 42.5256 39.6469 42.6241 39.8441L43.8116 42.2191C43.8948 42.3842 43.9375 42.5658 43.9375 42.7499V45.1249C43.9375 45.4399 43.8124 45.7419 43.5897 45.9646C43.367 46.1873 43.0649 46.3124 42.75 46.3124H40.375V43.9374H41.5625V43.0302L40.8286 41.5624H37.5464L36.8125 43.0302V43.9374H38V46.3124H35.625C35.3101 46.3124 35.008 46.1873 34.7853 45.9646C34.5626 45.7419 34.4375 45.4399 34.4375 45.1249V42.7499C34.4375 42.5658 34.4803 42.3842 34.5634 42.2191L35.7509 39.8441C35.8494 39.6469 36.0009 39.481 36.1884 39.365C36.3759 39.249 36.592 39.1875 36.8125 39.1874H38.3741C38.4002 39.0853 38.4263 38.9725 38.4524 38.8478C38.5712 38.2885 38.6769 37.5795 38.7481 36.8468C38.8194 36.113 38.8526 35.385 38.8348 34.7865C38.8304 34.5386 38.8109 34.2911 38.7766 34.0455C38.7505 33.8769 38.7244 33.7997 38.7196 33.7831C38.7184 33.7795 38.7172 33.7783 38.7196 33.7807L38.7232 33.7795C38.0931 33.5838 37.4557 33.4123 36.8125 33.2653C36.2152 33.1288 35.5977 33.9505 35.3281 34.4647H21.375C21.3403 34.3985 21.3063 34.332 21.2729 34.2652C21.0211 33.7641 20.7112 33.1454 20.1875 33.2653C19.7303 33.3687 19.2731 33.4874 18.8159 33.618C18.8012 33.8263 18.7949 34.0351 18.7969 34.2438C18.8017 34.9005 18.8646 35.7045 18.9656 36.5167C19.0665 37.3266 19.2031 38.1151 19.3456 38.7373C19.3859 38.9167 19.4263 39.0782 19.4643 39.2171C20.1432 39.3063 20.782 39.5894 21.3043 40.0323C21.8265 40.4752 22.21 41.0592 22.4089 41.7144C22.6078 42.3696 22.6137 43.0683 22.4258 43.7268C22.2379 44.3852 21.8642 44.9756 21.3494 45.4272C20.8347 45.8788 20.2007 46.1724 19.5234 46.273C18.8461 46.3737 18.1541 46.2769 17.5304 45.9944C16.9066 45.712 16.3775 45.2557 16.0063 44.6803C15.6351 44.1049 15.4376 43.4347 15.4375 42.7499Z" fill="#0046B7"/>
                                    <path d="M20.1875 42.75C20.1875 43.4316 19.6389 43.9553 19 43.9553C18.3611 43.9553 17.8125 43.4328 17.8125 42.75C17.8125 42.0684 18.3611 41.5447 19 41.5447C19.6389 41.5447 20.1875 42.0672 20.1875 42.75Z" fill="#0046B7"/>
                                    </svg>
                                </i>
                            </div>
                        </div>
                    </a>
                    <div class="px-5 pb-5 text-center">
                        <a href="#">
                            <h5 class="text-sm md:text-xl font-medium tracking-tight text-gray-500 dark:text-white">Dokter Spesialis</h5>
                        </a>
                        <div class="text-center">
                            <span class="md:text-xl text-xl font-bold text-gray-900 dark:text-white">100+</span>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm bg-white rounded-lg dark:bg-gray-800 dark:border-gray-700">
                    <a class="p-8 rounded-t-lg justify-center" href="#">
                        <div class="justify-center text-center">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-14 h-14 md:w-20 md:h-20 shadow-lg rounded-full">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 57 57" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.1775 16.3993C40.1775 20.5093 39.1562 25.8696 37.5852 25.0562C36.9427 27.1542 35.594 28.9651 33.768 30.1816C31.9419 31.398 29.7511 31.945 27.5676 31.7296C25.3841 31.5142 23.3424 30.5497 21.7893 28.9999C20.2361 27.4501 19.2672 25.4105 19.0471 23.2275C17.4879 20.4998 15.443 15.0337 20.7001 10.7729C20.7951 10.7421 20.8521 10.4856 20.9376 10.108C21.263 8.67939 21.9838 5.50401 26.5307 6.11082C30.0374 6.57751 40.1775 8.38726 40.1775 16.3993ZM35.6579 18.9905C35.6579 18.9905 35.1211 20.5603 35.6246 22.3095C35.6181 24.1746 34.8805 25.9627 33.5702 27.29C32.26 28.6173 30.4815 29.3779 28.6166 29.4086C26.7518 29.4392 24.9493 28.7374 23.5962 27.4538C22.243 26.1703 21.4471 24.4073 21.3794 22.5434C21.5516 21.8903 21.5516 20.7848 21.5504 19.5557C21.5492 17.3386 21.5468 14.7226 22.5621 13.6562C29.6741 18.3931 35.6579 18.9905 35.6579 18.9905Z" fill="#0046B7"/>
                                    <path d="M15.4375 42.7499C15.4375 41.465 16.1179 40.3393 17.1392 39.7123C17.1003 39.5645 17.0639 39.416 17.0299 39.267C16.8497 38.4557 16.709 37.6361 16.6084 36.8112C16.5063 36.0208 16.4449 35.2258 16.4243 34.4291C11.4119 36.3968 7.125 39.8263 7.125 43.4268V49.8749H49.875V43.4268C49.875 39.9783 45.9444 36.6877 41.2086 34.6868V34.72C41.23 35.4444 41.1896 36.2757 41.1112 37.0748C41.04 37.8158 40.9343 38.5545 40.8072 39.1874H41.5625C41.783 39.1875 41.9991 39.249 42.1866 39.365C42.3741 39.481 42.5256 39.6469 42.6241 39.8441L43.8116 42.2191C43.8948 42.3842 43.9375 42.5658 43.9375 42.7499V45.1249C43.9375 45.4399 43.8124 45.7419 43.5897 45.9646C43.367 46.1873 43.0649 46.3124 42.75 46.3124H40.375V43.9374H41.5625V43.0302L40.8286 41.5624H37.5464L36.8125 43.0302V43.9374H38V46.3124H35.625C35.3101 46.3124 35.008 46.1873 34.7853 45.9646C34.5626 45.7419 34.4375 45.4399 34.4375 45.1249V42.7499C34.4375 42.5658 34.4803 42.3842 34.5634 42.2191L35.7509 39.8441C35.8494 39.6469 36.0009 39.481 36.1884 39.365C36.3759 39.249 36.592 39.1875 36.8125 39.1874H38.3741C38.4002 39.0853 38.4263 38.9725 38.4524 38.8478C38.5712 38.2885 38.6769 37.5795 38.7481 36.8468C38.8194 36.113 38.8526 35.385 38.8348 34.7865C38.8304 34.5386 38.8109 34.2911 38.7766 34.0455C38.7505 33.8769 38.7244 33.7997 38.7196 33.7831C38.7184 33.7795 38.7172 33.7783 38.7196 33.7807L38.7232 33.7795C38.0931 33.5838 37.4557 33.4123 36.8125 33.2653C36.2152 33.1288 35.5977 33.9505 35.3281 34.4647H21.375C21.3403 34.3985 21.3063 34.332 21.2729 34.2652C21.0211 33.7641 20.7112 33.1454 20.1875 33.2653C19.7303 33.3687 19.2731 33.4874 18.8159 33.618C18.8012 33.8263 18.7949 34.0351 18.7969 34.2438C18.8017 34.9005 18.8646 35.7045 18.9656 36.5167C19.0665 37.3266 19.2031 38.1151 19.3456 38.7373C19.3859 38.9167 19.4263 39.0782 19.4643 39.2171C20.1432 39.3063 20.782 39.5894 21.3043 40.0323C21.8265 40.4752 22.21 41.0592 22.4089 41.7144C22.6078 42.3696 22.6137 43.0683 22.4258 43.7268C22.2379 44.3852 21.8642 44.9756 21.3494 45.4272C20.8347 45.8788 20.2007 46.1724 19.5234 46.273C18.8461 46.3737 18.1541 46.2769 17.5304 45.9944C16.9066 45.712 16.3775 45.2557 16.0063 44.6803C15.6351 44.1049 15.4376 43.4347 15.4375 42.7499Z" fill="#0046B7"/>
                                    <path d="M20.1875 42.75C20.1875 43.4316 19.6389 43.9553 19 43.9553C18.3611 43.9553 17.8125 43.4328 17.8125 42.75C17.8125 42.0684 18.3611 41.5447 19 41.5447C19.6389 41.5447 20.1875 42.0672 20.1875 42.75Z" fill="#0046B7"/>
                                    </svg>
                                </i>
                            </div>
                        </div>
                    </a>
                    <div class="px-5 pb-5 text-center">
                        <a href="#">
                            <h5 class="text-sm md:text-xl font-medium tracking-tight text-gray-500 dark:text-white">Rumah Sakit</h5>
                        </a>
                        <div class="text-center">
                            <span class="md:text-xl text-xl font-bold text-gray-900 dark:text-white">100+</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="bg-gray-50 dark:bg-gray-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mb-8 lg:mb-16">
                <h2 class="mb-4 md:text-4xl text-2xl font-extrabold text-gray-900 dark:text-white text-center">Cari Praktik Dokter</h2>
                <form>
                    <div class="flex">
                        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
                        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-3.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">Kategori <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kelurahan</button>
                            </li>
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kecamatan</button>
                            </li>
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kabupaten/Kota</button>
                            </li>
                            </ul>
                        </div>
                        <div class="relative w-full items-center">
                            <input type="search" id="search-dropdown" class="block p-3.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Cari praktik dokter disini" required>
                            <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="space-y-4 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0 grid place-items-center">
                
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center md:items-start">
                        <div class="h-10 w-10">
                            <img src="/Assets/avatars.svg"/>
                        </div>
                        <a class="">
                            <h5 class="mb-2 ml-3 md:text-xl text-base font-bold tracking-tight text-gray-700 dark:text-white">Dr. M. Anyone</h5>
                        </a>
                    </div>
                    <div class="">
                        <div class="flex items-center">
                            <i class="px-2 my-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                    viewBox="0 0 18 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.41096 7.28857e-09C7.02159 -6.32189e-06 7.61729 0.191392 8.11638 0.547957C8.61547 0.904523 8.99353 1.4088 9.19874 1.99167H18V3.24865L15.7808 4.76401V16.9929H17.2603C17.3911 16.9929 17.5165 17.0456 17.609 17.1393C17.7015 17.233 17.7534 17.3602 17.7534 17.4927C17.7534 17.6253 17.7015 17.7524 17.609 17.8461C17.5165 17.9398 17.3911 17.9925 17.2603 17.9925H15.7808V18H1.9726V17.9925H0.493151C0.362359 17.9925 0.236924 17.9398 0.144441 17.8461C0.0519569 17.7524 0 17.6253 0 17.4927C0 17.3602 0.0519569 17.233 0.144441 17.1393C0.236924 17.0456 0.362359 16.9929 0.493151 16.9929H1.9726V4.74652L0 3.23215V1.99117H3.62318C3.82847 1.4084 4.20656 0.904224 4.70565 0.547753C5.20473 0.191282 5.80038 -4.31172e-05 6.41096 7.28857e-09ZM6.90411 2.49896V1.49938H5.91781V2.49896H4.93151V3.49854H5.91781V4.49813H6.90411V3.49854H7.89041V2.49896H6.90411ZM13.8082 8.99625V16.9929H9.86301V8.99625H13.8082ZM7.39726 8.99625H3.94521V12.4948H7.39726V8.99625Z"
                                        fill="#495057" />
                                </svg>
                            </i>
                            <p class="text-sm md:text-base font-medium text-gray-600">
                                Jalan Soekarno Hatta No. 20 Malang, Kota Malang
                            </p>

                        </div>
                    </div>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">

                    </p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Dapatkan Arah
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center md:items-start">
                        <div class="h-10 w-10">
                            <img src="/Assets/avatars.svg"/>
                        </div>
                        <a class="">
                            <h5 class="mb-2 ml-3  md:text-xl text-base font-bold tracking-tight text-gray-700 dark:text-white">Dr. M. Anyone</h5>
                        </a>
                    </div>
                    <div class="">
                        <div class="flex items-center">
                            <i class="px-2 my-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                    viewBox="0 0 18 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.41096 7.28857e-09C7.02159 -6.32189e-06 7.61729 0.191392 8.11638 0.547957C8.61547 0.904523 8.99353 1.4088 9.19874 1.99167H18V3.24865L15.7808 4.76401V16.9929H17.2603C17.3911 16.9929 17.5165 17.0456 17.609 17.1393C17.7015 17.233 17.7534 17.3602 17.7534 17.4927C17.7534 17.6253 17.7015 17.7524 17.609 17.8461C17.5165 17.9398 17.3911 17.9925 17.2603 17.9925H15.7808V18H1.9726V17.9925H0.493151C0.362359 17.9925 0.236924 17.9398 0.144441 17.8461C0.0519569 17.7524 0 17.6253 0 17.4927C0 17.3602 0.0519569 17.233 0.144441 17.1393C0.236924 17.0456 0.362359 16.9929 0.493151 16.9929H1.9726V4.74652L0 3.23215V1.99117H3.62318C3.82847 1.4084 4.20656 0.904224 4.70565 0.547753C5.20473 0.191282 5.80038 -4.31172e-05 6.41096 7.28857e-09ZM6.90411 2.49896V1.49938H5.91781V2.49896H4.93151V3.49854H5.91781V4.49813H6.90411V3.49854H7.89041V2.49896H6.90411ZM13.8082 8.99625V16.9929H9.86301V8.99625H13.8082ZM7.39726 8.99625H3.94521V12.4948H7.39726V8.99625Z"
                                        fill="#495057" />
                                </svg>
                            </i>
                            <p class="text-sm md:text-base font-medium text-gray-600">
                                Jalan Soekarno Hatta No. 20 Malang, Kota Malang
                            </p>

                        </div>
                    </div>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">

                    </p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Dapatkan Arah
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center md:items-start">
                        <div class="h-10 w-10">
                            <img src="/Assets/avatars.svg"/>
                        </div>
                        <a class="">
                            <h5 class="mb-2 ml-3  md:text-xl text-base font-bold tracking-tight text-gray-700 dark:text-white">Dr. M. Anyone</h5>
                        </a>
                    </div>
                    <div class="">
                        <div class="flex items-center">
                            <i class="px-2 my-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                    viewBox="0 0 18 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.41096 7.28857e-09C7.02159 -6.32189e-06 7.61729 0.191392 8.11638 0.547957C8.61547 0.904523 8.99353 1.4088 9.19874 1.99167H18V3.24865L15.7808 4.76401V16.9929H17.2603C17.3911 16.9929 17.5165 17.0456 17.609 17.1393C17.7015 17.233 17.7534 17.3602 17.7534 17.4927C17.7534 17.6253 17.7015 17.7524 17.609 17.8461C17.5165 17.9398 17.3911 17.9925 17.2603 17.9925H15.7808V18H1.9726V17.9925H0.493151C0.362359 17.9925 0.236924 17.9398 0.144441 17.8461C0.0519569 17.7524 0 17.6253 0 17.4927C0 17.3602 0.0519569 17.233 0.144441 17.1393C0.236924 17.0456 0.362359 16.9929 0.493151 16.9929H1.9726V4.74652L0 3.23215V1.99117H3.62318C3.82847 1.4084 4.20656 0.904224 4.70565 0.547753C5.20473 0.191282 5.80038 -4.31172e-05 6.41096 7.28857e-09ZM6.90411 2.49896V1.49938H5.91781V2.49896H4.93151V3.49854H5.91781V4.49813H6.90411V3.49854H7.89041V2.49896H6.90411ZM13.8082 8.99625V16.9929H9.86301V8.99625H13.8082ZM7.39726 8.99625H3.94521V12.4948H7.39726V8.99625Z"
                                        fill="#495057" />
                                </svg>
                            </i>
                            <p class="text-sm md:text-base font-medium text-gray-600">
                                Jalan Soekarno Hatta No. 20 Malang, Kota Malang
                            </p>

                        </div>
                    </div>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">

                    </p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Dapatkan Arah
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center md:items-start">
                        <div class="h-10 w-10">
                            <img src="/Assets/avatars.svg"/>
                        </div>
                        <a class="">
                            <h5 class="mb-2 ml-3  md:text-xl text-base font-bold tracking-tight text-gray-700 dark:text-white">Dr. M. Anyone</h5>
                        </a>
                    </div>
                    <div class="">
                        <div class="flex items-center">
                            <i class="px-2 my-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                    viewBox="0 0 18 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.41096 7.28857e-09C7.02159 -6.32189e-06 7.61729 0.191392 8.11638 0.547957C8.61547 0.904523 8.99353 1.4088 9.19874 1.99167H18V3.24865L15.7808 4.76401V16.9929H17.2603C17.3911 16.9929 17.5165 17.0456 17.609 17.1393C17.7015 17.233 17.7534 17.3602 17.7534 17.4927C17.7534 17.6253 17.7015 17.7524 17.609 17.8461C17.5165 17.9398 17.3911 17.9925 17.2603 17.9925H15.7808V18H1.9726V17.9925H0.493151C0.362359 17.9925 0.236924 17.9398 0.144441 17.8461C0.0519569 17.7524 0 17.6253 0 17.4927C0 17.3602 0.0519569 17.233 0.144441 17.1393C0.236924 17.0456 0.362359 16.9929 0.493151 16.9929H1.9726V4.74652L0 3.23215V1.99117H3.62318C3.82847 1.4084 4.20656 0.904224 4.70565 0.547753C5.20473 0.191282 5.80038 -4.31172e-05 6.41096 7.28857e-09ZM6.90411 2.49896V1.49938H5.91781V2.49896H4.93151V3.49854H5.91781V4.49813H6.90411V3.49854H7.89041V2.49896H6.90411ZM13.8082 8.99625V16.9929H9.86301V8.99625H13.8082ZM7.39726 8.99625H3.94521V12.4948H7.39726V8.99625Z"
                                        fill="#495057" />
                                </svg>
                            </i>
                            <p class="text-sm md:text-base font-medium text-gray-600">
                                Jalan Soekarno Hatta No. 20 Malang, Kota Malang
                            </p>

                        </div>
                    </div>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">

                    </p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Dapatkan Arah
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center md:items-start">
                        <div class="h-10 w-10">
                            <img src="/Assets/avatars.svg"/>
                        </div>
                        <a class="">
                            <h5 class="mb-2 ml-3  md:text-xl text-base font-bold tracking-tight text-gray-700 dark:text-white">Dr. M. Anyone</h5>
                        </a>
                    </div>
                    <div class="">
                        <div class="flex items-center">
                            <i class="px-2 my-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                    viewBox="0 0 18 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.41096 7.28857e-09C7.02159 -6.32189e-06 7.61729 0.191392 8.11638 0.547957C8.61547 0.904523 8.99353 1.4088 9.19874 1.99167H18V3.24865L15.7808 4.76401V16.9929H17.2603C17.3911 16.9929 17.5165 17.0456 17.609 17.1393C17.7015 17.233 17.7534 17.3602 17.7534 17.4927C17.7534 17.6253 17.7015 17.7524 17.609 17.8461C17.5165 17.9398 17.3911 17.9925 17.2603 17.9925H15.7808V18H1.9726V17.9925H0.493151C0.362359 17.9925 0.236924 17.9398 0.144441 17.8461C0.0519569 17.7524 0 17.6253 0 17.4927C0 17.3602 0.0519569 17.233 0.144441 17.1393C0.236924 17.0456 0.362359 16.9929 0.493151 16.9929H1.9726V4.74652L0 3.23215V1.99117H3.62318C3.82847 1.4084 4.20656 0.904224 4.70565 0.547753C5.20473 0.191282 5.80038 -4.31172e-05 6.41096 7.28857e-09ZM6.90411 2.49896V1.49938H5.91781V2.49896H4.93151V3.49854H5.91781V4.49813H6.90411V3.49854H7.89041V2.49896H6.90411ZM13.8082 8.99625V16.9929H9.86301V8.99625H13.8082ZM7.39726 8.99625H3.94521V12.4948H7.39726V8.99625Z"
                                        fill="#495057" />
                                </svg>
                            </i>
                            <p class="text-sm md:text-base font-medium text-gray-600">
                                Jalan Soekarno Hatta No. 20 Malang, Kota Malang
                            </p>

                        </div>
                    </div>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">

                    </p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Dapatkan Arah
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center md:items-start">
                        <div class="h-10 w-10">
                            <img src="/Assets/avatars.svg"/>
                        </div>
                        <a class="">
                            <h5 class="mb-2 ml-3  md:text-xl text-base font-bold tracking-tight text-gray-700 dark:text-white">Dr. M. Anyone</h5>
                        </a>
                    </div>
                    <div class="">
                        <div class="flex items-center">
                            <i class="px-2 my-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                    viewBox="0 0 18 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.41096 7.28857e-09C7.02159 -6.32189e-06 7.61729 0.191392 8.11638 0.547957C8.61547 0.904523 8.99353 1.4088 9.19874 1.99167H18V3.24865L15.7808 4.76401V16.9929H17.2603C17.3911 16.9929 17.5165 17.0456 17.609 17.1393C17.7015 17.233 17.7534 17.3602 17.7534 17.4927C17.7534 17.6253 17.7015 17.7524 17.609 17.8461C17.5165 17.9398 17.3911 17.9925 17.2603 17.9925H15.7808V18H1.9726V17.9925H0.493151C0.362359 17.9925 0.236924 17.9398 0.144441 17.8461C0.0519569 17.7524 0 17.6253 0 17.4927C0 17.3602 0.0519569 17.233 0.144441 17.1393C0.236924 17.0456 0.362359 16.9929 0.493151 16.9929H1.9726V4.74652L0 3.23215V1.99117H3.62318C3.82847 1.4084 4.20656 0.904224 4.70565 0.547753C5.20473 0.191282 5.80038 -4.31172e-05 6.41096 7.28857e-09ZM6.90411 2.49896V1.49938H5.91781V2.49896H4.93151V3.49854H5.91781V4.49813H6.90411V3.49854H7.89041V2.49896H6.90411ZM13.8082 8.99625V16.9929H9.86301V8.99625H13.8082ZM7.39726 8.99625H3.94521V12.4948H7.39726V8.99625Z"
                                        fill="#495057" />
                                </svg>
                            </i>
                            <p class="text-sm md:text-base font-medium text-gray-600">
                                Jalan Soekarno Hatta No. 20 Malang, Kota Malang
                            </p>

                        </div>
                    </div>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">

                    </p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Dapatkan Arah
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>

            </div>
            
           
        </div>
      </section>
        
        
        <section>
            <footer class="bg-white dark:bg-gray-900">
                <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                    <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="/" class="flex items-center">
                            <img src="/Assets/logoidi.png" class="h-8 mr-3" alt="FlowBite Logo" />
                            <span class="self-center text-xl md:text-2xl font-bold whitespace-nowrap dark:text-white">IDI Malang Raya</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                                </li>
                                <li>
                                    <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                                </li>
                                <li>
                                    <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                    <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                                </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                                    <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                                </svg>
                            <span class="sr-only">Discord community</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                                <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Twitter page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">GitHub account</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Dribbble account</span>
                        </a>
                    </div>
                </div>
                </div>
            </footer>

        </section>
@endsection