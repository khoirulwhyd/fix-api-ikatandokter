@extends('public.app')
@section('content')
    <section class="bg-white dark:bg-gray-900 mt-10">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">Bergabunglah Bersama Kami</h1>
                <p class="max-w-2xl mb-6 font-regular text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">IDI adalah sebuah organisasi dokter yang ada di malang raya, Organisasi mecakup semua lokasi dimalang raya</p>
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Mulai Sekarang
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Cari Dokter
                </a> 
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="/Assets/ilustrasi.svg" alt="mockup">
            </div>                
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900 justify-center">
        <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
            <div class="grid grid-cols-3 gap-4">
                <div class="max-w-sm bg-white rounded-lg dark:bg-gray-800 dark:border-gray-700">
                    <a class="p-8 rounded-t-lg justify-center" href="#">
                        <div class="justify-center text-center">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-20 h-20 shadow-lg rounded-full">
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
                            <h5 class="text-xl font-medium tracking-tight text-gray-500 dark:text-white">Dokter Umum</h5>
                        </a>
                        <div class="text-center">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">100+</span>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm bg-white rounded-lg dark:bg-gray-800 dark:border-gray-700">
                    <a class="p-8 rounded-t-lg justify-center" href="#">
                        <div class="justify-center text-center">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-20 h-20 shadow-lg rounded-full">
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
                            <h5 class="text-xl font-medium tracking-tight text-gray-500 dark:text-white">Dokter Spesialis</h5>
                        </a>
                        <div class="text-center">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">50+</span>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm bg-white rounded-lg dark:bg-gray-800 dark:border-gray-700">
                    <a class="p-8 rounded-t-lg justify-center" href="#">
                        <div class="justify-center text-center">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-20 h-20 shadow-lg rounded-full">
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
                            <h5 class="text-xl font-medium tracking-tight text-gray-500 dark:text-white">Rumah Sakit</h5>
                        </a>
                        <div class="text-center">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">50+</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="bg-gray-50 dark:bg-gray-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white text-center">Cari Praktik Dokter</h2>
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
                        <div class="relative w-full">
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
                

                <!-- <p class="text-gray-500 sm:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p> -->
            </div>
            
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0 grid place-items-center">
                <div class="grid place-items-center">
                    <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                        <img src="/Assets/avatars.svg" class="w-30 h-30">
                    </div>
                    <h3 class="mb-1 text-xl font-bold dark:text-white">Dr. Nur Nissa</h3>
                    <p class="text-gray-700 text-1xl dark:text-gray-400">Spesialis Penyakit Dalam</p>
                    <div class="flex flex-cols items-center content-center justify-center mt-2">
                        <!-- <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.66304 14.2366 10.2989 13.7678 10.7678C13.2989 11.2366 12.663 11.5 12 11.5Z" fill="#555555"/>
                            </svg>
                        </div> -->
                        <div class="text-center">
                            <p class="text-gray-500 text-sm">Jalan Sunan Kalijaga No 10 Jatimulyo, Lowokwaru, Kota Malang</p>
                        </div>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400"></p>
                    <div class="py-4">
                        <a href="" class="px-4 py-2 bg-primary-700 hover:bg-primary-500 text-white font-semibold rounded-lg">
                            Dapatkan arah
                        </a>               
                    </div>
                </div>
                <div class="grid place-items-center">
                    <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                        <img src="/Assets/avatars.svg" class="w-30 h-30">
                    </div>
                    <h3 class="mb-1 text-xl font-bold dark:text-white">Dr. Nur Nissa</h3>
                    <p class="text-gray-700 text-1xl dark:text-gray-400">Spesialis Penyakit Dalam</p>
                    <div class="flex flex-cols items-center content-center justify-center mt-2">
                        <!-- <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.66304 14.2366 10.2989 13.7678 10.7678C13.2989 11.2366 12.663 11.5 12 11.5Z" fill="#555555"/>
                            </svg>
                        </div> -->
                        <div class="text-center">
                            <p class="text-gray-500 text-sm">Jalan Sunan Kalijaga No 10 Jatimulyo, Lowokwaru, Kota Malang</p>
                        </div>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400"></p>
                    <div class="py-4">
                        <a href="" class="px-4 py-2 bg-primary-700 hover:bg-primary-500 text-white font-semibold rounded-lg">
                            Dapatkan arah
                        </a>               
                    </div>
                </div>
                <div class="grid place-items-center">
                    <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                        <img src="/Assets/avatars.svg" class="w-30 h-30">
                    </div>
                    <h3 class="mb-1 text-xl font-bold dark:text-white">Dr. Nur Nissa</h3>
                    <p class="text-gray-700 text-1xl dark:text-gray-400">Spesialis Penyakit Dalam</p>
                    <div class="flex flex-cols items-center content-center justify-center mt-2">
                        <!-- <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.66304 14.2366 10.2989 13.7678 10.7678C13.2989 11.2366 12.663 11.5 12 11.5Z" fill="#555555"/>
                            </svg>
                        </div> -->
                        <div class="text-center">
                            <p class="text-gray-500 text-sm">Jalan Sunan Kalijaga No 10 Jatimulyo, Lowokwaru, Kota Malang</p>
                        </div>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400"></p>
                    <div class="py-4">
                        <a href="" class="px-4 py-2 bg-primary-700 hover:bg-primary-500 text-white font-semibold rounded-lg">
                            Dapatkan arah
                        </a>               
                    </div>
                </div>
                <div class="grid place-items-center">
                    <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                        <img src="/Assets/avatars.svg" class="w-30 h-30">
                    </div>
                    <h3 class="mb-1 text-xl font-bold dark:text-white">Dr. Nur Nissa</h3>
                    <p class="text-gray-700 text-1xl dark:text-gray-400">Spesialis Penyakit Dalam</p>
                    <div class="flex flex-cols items-center content-center justify-center mt-2">
                        <!-- <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.66304 14.2366 10.2989 13.7678 10.7678C13.2989 11.2366 12.663 11.5 12 11.5Z" fill="#555555"/>
                            </svg>
                        </div> -->
                        <div class="text-center">
                            <p class="text-gray-500 text-sm">Jalan Sunan Kalijaga No 10 Jatimulyo, Lowokwaru, Kota Malang</p>
                        </div>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400"></p>
                    <div class="py-4">
                        <a href="" class="px-4 py-2 bg-primary-700 hover:bg-primary-500 text-white font-semibold rounded-lg">
                            Dapatkan arah
                        </a>               
                    </div>
                </div>
                <div class="grid place-items-center">
                    <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                        <img src="/Assets/avatars.svg" class="w-30 h-30">
                    </div>
                    <h3 class="mb-1 text-xl font-bold dark:text-white">Dr. Nur Nissa</h3>
                    <p class="text-gray-700 text-1xl dark:text-gray-400">Spesialis Penyakit Dalam</p>
                    <div class="flex flex-cols items-center content-center justify-center mt-2">
                        <!-- <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.66304 14.2366 10.2989 13.7678 10.7678C13.2989 11.2366 12.663 11.5 12 11.5Z" fill="#555555"/>
                            </svg>
                        </div> -->
                        <div class="text-center">
                            <p class="text-gray-500 text-sm">Jalan Sunan Kalijaga No 10 Jatimulyo, Lowokwaru, Kota Malang</p>
                        </div>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400"></p>
                    <div class="py-4">
                        <a href="" class="px-4 py-2 bg-primary-700 hover:bg-primary-500 text-white font-semibold rounded-lg">
                            Dapatkan arah
                        </a>               
                    </div>
                </div>
                <div class="grid place-items-center">
                    <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                        <img src="/Assets/avatars.svg" class="w-30 h-30">
                    </div>
                    <h3 class="mb-1 text-xl font-bold dark:text-white">Dr. Nur Nissa</h3>
                    <p class="text-gray-700 text-1xl dark:text-gray-400">Spesialis Penyakit Dalam</p>
                    <div class="flex flex-cols items-center content-center justify-center mt-2">
                        <!-- <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.66304 14.2366 10.2989 13.7678 10.7678C13.2989 11.2366 12.663 11.5 12 11.5Z" fill="#555555"/>
                            </svg>
                        </div> -->
                        <div class="text-center">
                            <p class="text-gray-500 text-sm">Jalan Sunan Kalijaga No 10 Jatimulyo, Lowokwaru, Kota Malang</p>
                        </div>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400"></p>
                    <div class="py-4">
                        <a href="" class="px-4 py-2 bg-primary-700 hover:bg-primary-500 text-white font-semibold rounded-lg">
                            Dapatkan arah
                        </a>               
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
            </div>
        </div>
      </section>
            <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">We didn't reinvent the wheel</h2>
                <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.</p>
                <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png" alt="office content 2">
            </div>
        </div>
    </section>
        <section class="bg-gray-50 dark:bg-gray-900 dark:bg-gray-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">Powering innovation at <span class="font-extrabold">200,000+</span> companies worldwide</h2>
                <p class="mb-4 font-light">Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p>
                <p class="mb-4 font-medium">Deliver great service experiences fast - without the complexity of traditional ITSM solutions.Accelerate critical development work, eliminate toil, and deploy changes with ease.</p>
                <a href="#" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800 dark:text-blue-500 dark:hover:text-blue-700">
                    Learn more
                    <svg class="ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
      </section>
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center">
                    <h2 class="mb-4 text-4xl font-extrabold leading-tight text-gray-900 dark:text-white">Start your free trial today</h2>
                    <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Try Flowbite Platform for 30 days. No credit card required.</p>
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Free trial for 30 days</a>
                </div>
            </div>
        </section>
        
    <footer class="p-4 bg-gray-50 sm:p-6 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com" class="flex items-center">
                        <img src="/Assets/logoidi.png" class="mr-3 h-8" alt="FlowBite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">IDI Malang Raya</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">IDI Malang Raya</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
@endsection