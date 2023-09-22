<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>
    <!-- <link href="{{ asset('css/login.css') }}" rel="stylesheet"> -->
    @vite(['resources/css/app.css', '/resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
    @include('sweetalert::alert')
    <nav
        class="fixed top-0 z-50 w-full bg-white border-b shadow-md border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="" class="flex ml-2 md:mr-24">
                        <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo" /> -->
                        <img class="h-10 mr-3" src="{{ url('Assets/logoidi.png') }}" alt="description of myimage">
                        <span
                            class="self-center text-sm font-semibold sm:text-lg whitespace-nowrap text-primary-800 dark:text-white">IDI
                            Malang Raya</span>
                    </a>
                </div>
                <form class="md:flex flex-row flex-wrap items-center lg:ml-auto mr-3">
                    <div class="relative flex w-full flex-wrap items-stretch">
                        <span
                            class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M21.0002 21L16.6572 16.657M16.6572 16.657C17.4001 15.9141 17.9894 15.0322 18.3914 14.0615C18.7935 13.0909 19.0004 12.0506 19.0004 11C19.0004 9.94938 18.7935 8.90906 18.3914 7.93843C17.9894 6.9678 17.4001 6.08587 16.6572 5.34298C15.9143 4.60009 15.0324 4.0108 14.0618 3.60875C13.0911 3.2067 12.0508 2.99977 11.0002 2.99977C9.9496 2.99977 8.90929 3.2067 7.93866 3.60875C6.96803 4.0108 6.08609 4.60009 5.34321 5.34298C3.84288 6.84331 3 8.87819 3 11C3 13.1218 3.84288 15.1566 5.34321 16.657C6.84354 18.1573 8.87842 19.0002 11.0002 19.0002C13.122 19.0002 15.1569 18.1573 16.6572 16.657Z"
                                    stroke="#A7A8A9" stroke-width="1.83333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        <input type="text" placeholder="Search here..."
                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10" />
                    </div>
                </form>
                <div class="flex items-center">
                    <div class="flex items-center ml-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    {{ Auth::user()->nama_lengkap }}
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    {{ Auth::user()->email }}
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        class="block px-4 py-2 text-sm text-red-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700 shadow-md"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/dashboard"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 28 28"
                            fill="none">
                            <path
                                d="M15.6667 9.33452V9.33334V4.66667C15.6667 4.4623 15.7304 4.31417 15.8562 4.18839C15.9819 4.06267 16.1293 3.99952 16.3322 4H16.3333H23.3333C23.5377 4 23.6858 4.06377 23.8116 4.18956L24.1641 3.83707L23.8116 4.18956C23.9373 4.31528 24.0005 4.46264 24 4.66549V4.66667V9.33334C24 9.53771 23.9362 9.68583 23.8105 9.81162L24.164 10.1652L23.8104 9.81162C23.6847 9.93734 23.5374 10.0005 23.3345 10H23.3333H16.3333C16.129 10 15.9808 9.93623 15.8551 9.81045C15.7293 9.68473 15.6662 9.53737 15.6667 9.33452ZM4 14.0012V14V4.66667C4 4.4623 4.06377 4.31417 4.18956 4.18839C4.31528 4.06267 4.46264 3.99952 4.66549 4V4H4.66667H11.6667C11.871 4 12.0192 4.06377 12.1449 4.18956C12.2707 4.31528 12.3338 4.46264 12.3333 4.66549V4.66667V14C12.3333 14.2044 12.2696 14.3525 12.1438 14.4783C12.0181 14.604 11.8707 14.6672 11.6678 14.6667H11.6667H4.66667C4.4623 14.6667 4.31417 14.6029 4.18839 14.4771C4.06267 14.3514 3.99952 14.204 4 14.0012ZM15.6667 23.3345V23.3333V14C15.6667 13.7956 15.7304 13.6475 15.8562 13.5217C15.9819 13.396 16.1293 13.3329 16.3322 13.3333H16.3333H23.3333C23.5377 13.3333 23.6858 13.3971 23.8116 13.5229C23.9373 13.6486 24.0005 13.796 24 13.9988V14V23.3333C24 23.5377 23.9362 23.6858 23.8105 23.8116L24.164 24.1652L23.8104 23.8116C23.6847 23.9373 23.5374 24.0005 23.3345 24H23.3333H16.3333C16.129 24 15.9808 23.9362 15.8551 23.8105C15.7293 23.6847 15.6662 23.5374 15.6667 23.3345ZM4.18839 23.8105L3.83532 24.1635L4.18839 23.8104C4.06267 23.6847 3.99952 23.5374 4 23.3345V23.3333V18.6667C4 18.4623 4.06377 18.3142 4.18956 18.1884C4.31528 18.0627 4.46264 17.9995 4.66549 18H4.66667H11.6667C11.871 18 12.0192 18.0638 12.1449 18.1896C12.2707 18.3153 12.3338 18.4626 12.3333 18.6655V18.6667V23.3333C12.3333 23.5377 12.2696 23.6858 12.1438 23.8116C12.0181 23.9373 11.8707 24.0005 11.6678 24H11.6667H4.66667C4.4623 24 4.31417 23.9362 4.18839 23.8105Z"
                                fill="#495057" stroke="#495057" />
                        </svg>
                        <span class="text-base ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-pribadi.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 28 28"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M19.2476 9.05615C19.2476 12.1405 16.7237 14.6123 13.5741 14.6123C10.4257 14.6123 7.90057 12.1405 7.90057 9.05615C7.90057 5.97176 10.4257 3.5 13.5741 3.5C16.7237 3.5 19.2476 5.97176 19.2476 9.05615ZM4.99988 20.9036C4.99988 18.0484 8.94966 17.334 13.5741 17.334C18.2237 17.334 22.1483 18.073 22.1483 20.9304C22.1483 23.7856 18.1985 24.5 13.5741 24.5C8.92454 24.5 4.99988 23.761 4.99988 20.9036Z"
                                fill="#495057" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Data Pribadi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-profesi.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="21" viewBox="0 0 19 21"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.6901 5.52998C14.6901 7.35662 14.2362 9.73901 13.5379 9.37748C13.2524 10.3099 12.653 11.1148 11.8414 11.6554C11.0298 12.1961 10.0562 12.4392 9.08571 12.3434C8.11525 12.2477 7.20784 11.819 6.51755 11.1302C5.82726 10.4414 5.39664 9.53495 5.29881 8.5647C4.60584 7.35239 3.69701 4.92303 6.03348 3.02937C6.0757 3.01564 6.10103 2.90164 6.13903 2.73381C6.28365 2.09889 6.60401 0.687615 8.62487 0.957309C10.1834 1.16473 14.6901 1.96906 14.6901 5.52998ZM12.6814 6.68159C12.6814 6.68159 12.4428 7.37931 12.6666 8.15673C12.6637 8.98565 12.3359 9.78038 11.7535 10.3703C11.1712 10.9602 10.3808 11.2983 9.55194 11.3119C8.72313 11.3255 7.92202 11.0136 7.32062 10.4431C6.71923 9.87262 6.36549 9.08908 6.33537 8.2607C6.4119 7.97042 6.4119 7.47906 6.41137 6.93281C6.41084 5.94745 6.40978 4.78475 6.86103 4.31081C10.0219 6.41612 12.6814 6.68159 12.6814 6.68159Z"
                                fill="#495057" />
                            <path
                                d="M3.69444 17.2414C3.69444 16.6703 3.99686 16.17 4.45075 15.8913C4.43347 15.8256 4.41728 15.7597 4.40219 15.6934C4.3221 15.3329 4.25958 14.9686 4.21483 14.602C4.16949 14.2507 4.14218 13.8973 4.13303 13.5433C1.90528 14.4178 0 15.942 0 17.5422V20.4081H19V17.5422C19 16.0096 17.2531 14.5471 15.1483 13.6578V13.6726C15.1578 13.9945 15.1398 14.3639 15.105 14.7191C15.0733 15.0485 15.0264 15.3768 14.9699 15.6581H15.3056C15.4035 15.6581 15.4996 15.6854 15.5829 15.737C15.6662 15.7885 15.7336 15.8623 15.7774 15.9499L16.3052 17.0055C16.3421 17.0788 16.3611 17.1596 16.3611 17.2414V18.2969C16.3611 18.4369 16.3055 18.5712 16.2065 18.6701C16.1076 18.7691 15.9733 18.8247 15.8333 18.8247H14.7778V17.7692H15.3056V17.3659L14.9794 16.7136H13.5206L13.1944 17.3659V17.7692H13.7222V18.8247H12.6667C12.5267 18.8247 12.3924 18.7691 12.2935 18.6701C12.1945 18.5712 12.1389 18.4369 12.1389 18.2969V17.2414C12.1389 17.1596 12.1579 17.0788 12.1948 17.0055L12.7226 15.9499C12.7664 15.8623 12.8337 15.7885 12.9171 15.737C13.0004 15.6854 13.0965 15.6581 13.1944 15.6581H13.8885C13.9001 15.6127 13.9117 15.5625 13.9233 15.5071C13.9761 15.2585 14.0231 14.9434 14.0547 14.6178C14.0864 14.2916 14.1012 13.9681 14.0932 13.7021C14.0913 13.5919 14.0826 13.4819 14.0674 13.3728C14.0558 13.2978 14.0442 13.2635 14.0421 13.2561C14.0415 13.2546 14.041 13.254 14.0421 13.2551L14.0436 13.2546C13.7636 13.1676 13.4803 13.0913 13.1944 13.026C12.929 12.9653 12.6545 13.3306 12.5347 13.5591H6.33333C6.31792 13.5297 6.30279 13.5001 6.28794 13.4704C6.17606 13.2477 6.03831 12.9727 5.80556 13.026C5.60236 13.0719 5.39917 13.1247 5.19597 13.1828C5.18943 13.2753 5.18661 13.3681 5.18753 13.4609C5.18964 13.7528 5.21761 14.1101 5.26247 14.4711C5.30733 14.831 5.36803 15.1815 5.43136 15.458C5.44931 15.5377 5.46725 15.6095 5.48414 15.6713C5.78588 15.7109 6.06979 15.8367 6.30189 16.0335C6.53399 16.2304 6.70444 16.49 6.79284 16.7812C6.88124 17.0724 6.88384 17.3829 6.80034 17.6755C6.71683 17.9682 6.55074 18.2306 6.32197 18.4313C6.0932 18.632 5.81144 18.7625 5.51041 18.8072C5.20938 18.8519 4.90184 18.809 4.62461 18.6834C4.34738 18.5579 4.1122 18.3551 3.94724 18.0993C3.78227 17.8436 3.6945 17.5457 3.69444 17.2414Z"
                                fill="#495057" />
                            <path
                                d="M5.80556 17.2414C5.80556 17.5444 5.56172 17.7771 5.27778 17.7771C4.99383 17.7771 4.75 17.5449 4.75 17.2414C4.75 16.9385 4.99383 16.7057 5.27778 16.7057C5.56172 16.7057 5.80556 16.9379 5.80556 17.2414Z"
                                fill="#495057" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Data Profesi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-str.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Surat Tanda Registrasi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-sip.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 28 28"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.86733 3.70071C3.5 5.06687 3.5 7.26721 3.5 11.6667V16.3334C3.5 20.7329 3.5 22.9332 4.86733 24.2994C6.2335 25.6667 8.43383 25.6667 12.8333 25.6667H15.1667C19.5662 25.6667 21.7665 25.6667 23.1327 24.2994C24.5 22.9332 24.5 20.7329 24.5 16.3334V11.6667C24.5 7.26721 24.5 5.06687 23.1327 3.70071C21.7665 2.33337 19.5662 2.33337 15.1667 2.33337H12.8333C8.43383 2.33337 6.2335 2.33337 4.86733 3.70071ZM9.33333 10.7917C9.10127 10.7917 8.87871 10.8839 8.71461 11.048C8.55052 11.2121 8.45833 11.4346 8.45833 11.6667C8.45833 11.8988 8.55052 12.1213 8.71461 12.2854C8.87871 12.4495 9.10127 12.5417 9.33333 12.5417H18.6667C18.8987 12.5417 19.1213 12.4495 19.2854 12.2854C19.4495 12.1213 19.5417 11.8988 19.5417 11.6667C19.5417 11.4346 19.4495 11.2121 19.2854 11.048C19.1213 10.8839 18.8987 10.7917 18.6667 10.7917H9.33333ZM9.33333 15.4584C9.10127 15.4584 8.87871 15.5506 8.71461 15.7147C8.55052 15.8788 8.45833 16.1013 8.45833 16.3334C8.45833 16.5654 8.55052 16.788 8.71461 16.9521C8.87871 17.1162 9.10127 17.2084 9.33333 17.2084H15.1667C15.3987 17.2084 15.6213 17.1162 15.7854 16.9521C15.9495 16.788 16.0417 16.5654 16.0417 16.3334C16.0417 16.1013 15.9495 15.8788 15.7854 15.7147C15.6213 15.5506 15.3987 15.4584 15.1667 15.4584H9.33333Z"
                                fill="#495057" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Surat Izin Praktik</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700 md:mt-14 mt-14">
            <div class="grid grid-cols-0 gap-4 mb-4">
                <div
                    class="max-w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="section-icon flex items-start justify-start mb-4">
                        <p class="text-sm justify-center font-regular text-gray-800 md:text-lg">
                            Data Profesi
                        </p>
                        <p class="text-sm ml-2 justify-center font-semibold text-primary-600 md:text-lg">
                            > Tambah Data Profesi
                        </p>
                    </div>
                    <form action="{{ route('data-profesi.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div class="flex justify-start ...">
                                <img class="w-16 h-16 rounded-full" src="/Assets/main-avatar.svg" alt="user photo" />
                                <div class="section-avatar px-6">
                                    <p class="text-primary-600 text-base font-semibold md:text-xl">{{ $auth->nama_lengkap }}
                                        </p>
                                    <p class="font-regular text-gray-400 text-sm sm:text-lg">
                                        {{ $auth->nik }}
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="justify-start w-full h-full mt-4">


                            <!-- data profesi 2 -->
                            <div class="justify-start py-2 mt-4">
                                <div class="grid grid-cols-2">
                                    <div clas="flex justify-start">
                                        <p class="text-base justify-center font-bold text-gray-800 md:text-lg">
                                            Tambah Data Profesi
                                        </p>
                                    </div>
                                </div>
                                <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                                <hr class="mt-2 w-full h-0.5 py-0 bg-gray-100 border-0 rounded md:my-4 dark:bg-gray-700">
                                </hr>
                                <table
                                    class="table-fixed w-full text-sm text-left text-gray-500 dark:text-gray-400 md:table-fixed">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    </thead>
                                    <tbody>
                                        <div>
                                            <div class="mt-4 py-2">
                                                <label for="pilihan-dokter"
                                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                    Pilih Dokter Umum atau Spesialis
                                                </label>
                                                
                                                    <select id="country-dropdown"
                                                        class="w-full md:w-1/2 px-4 py-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder:pilih dokter"
                                                        name="dokter">
                                                        <!-- <option selected disabled>Pilih Jenis Profesi</option> -->
                                                        <option value="">-- Pilihan Dokter --</option>
                                                        @foreach ($pilihans as $data)
                                                        <option value="{{$data->id}}">
                                                            {{$data->name}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                
                                            </div>
                                            <div class="py-4">
                                                <label for="spesialis"
                                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                    Spesialis
                                                </label>
                                                    <select id="state-dropdown"
                                                        class="w-full md:w-1/2 px-4 py-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder:pilih dokter" name="spesialis">
                                                    </select>
                                            </div>
                                            <div class="py-4">
                                                <label for="sub_spesialis"
                                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                    Sub Spesialis
                                                </label>
                                                    <select id="city-dropdown"
                                                        class="w-full md:w-1/2 px-4 py-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder:pilih dokter" name="sub_spesialis">
                                                    </select>
                                            </div>
                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                <script>
                                    $(document).ready(function () {
                            
                                        /*------------------------------------------
                                        --------------------------------------------
                                        Country Dropdown Change Event
                                        --------------------------------------------
                                        --------------------------------------------*/
                                        $('#country-dropdown').on('change', function () {
                                            var idSpesialis = this.value;
                                            $("#state-dropdown").html('');
                                            $.ajax({
                                                url: "{{url('api/fetch-spesialis')}}",
                                                type: "POST",
                                                data: {
                                                    pilihan_id : idSpesialis,
                                                    _token: '{{csrf_token()}}'
                                                },
                                                dataType: 'json',
                                                success: function (result) {
                                                    $('#state-dropdown').html('<option value="">-- Select Spesialis --</option>');
                                                    $.each(result.spesialis, function (key, value) {
                                                        $("#state-dropdown").append('<option value="' + value
                                                            .id + '">' + value.name + '</option>');
                                                    });
                                                    $('#city-dropdown').html('<option value="">-- Select SubSpesialis --</option>');
                                                }
                                            });
                                        });
                            
                                        /*------------------------------------------
                                        --------------------------------------------
                                        State Dropdown Change Event
                                        --------------------------------------------
                                        --------------------------------------------*/
                                        $('#state-dropdown').on('change', function () {
                                            var idSpesialis = this.value;
                                            $("#city-dropdown").html('');
                                            $.ajax({
                                                url: "{{url('api/fetch-subspesialis')}}",
                                                type: "POST",
                                                data: {
                                                    spesialis_id : idSpesialis,
                                                    _token: '{{csrf_token()}}'
                                                },
                                                dataType: 'json',
                                                success: function (res) {
                                                    $('#city-dropdown').html('<option value="">-- Select SubSpesialis --</option>');
                                                    $.each(res.subspesialis, function (key, value) {
                                                        $("#city-dropdown").append('<option value="' + value
                                                            .id + '">' + value.name + '</option>');
                                                    });
                                                }
                                            });
                                        });
                            
                                    });
                                </script>
                                        </div>
                                    </tbody>
                                </table>
                                <div class="justify-start py-4 md:flex md:justify-start">
                                <a href="/data-profesi">
                                    <button type="button"
                                        class="text-gray-600 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-semibold rounded-lg text-xs px-3 py-2 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2 justify-end md:px-5 py-3">
                                        Batal
                                    </button>
                                </a>
                                
                                <button type="submit"
                                    class="text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-semibold rounded-lg text-xs px-3 py-2 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mb-2 justify-end md:px-5 py-3">
                                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 20 21" fill="none">
                                        <path
                                            d="M19.7583 4.90834L15.5917 0.74168C15.5138 0.664446 15.4214 0.603342 15.3199 0.561871C15.2184 0.520401 15.1097 0.49938 15 0.500014H1.66667C1.22464 0.500014 0.800715 0.675608 0.488155 0.988169C0.175595 1.30073 0 1.72465 0 2.16668V18.8333C0 19.2754 0.175595 19.6993 0.488155 20.0118C0.800715 20.3244 1.22464 20.5 1.66667 20.5H18.3333C18.7753 20.5 19.1993 20.3244 19.5118 20.0118C19.8244 19.6993 20 19.2754 20 18.8333V5.50001C20.0006 5.39034 19.9796 5.28162 19.9381 5.18009C19.8967 5.07856 19.8356 4.98621 19.7583 4.90834ZM6.66666 2.16668H13.3333V5.50001H6.66666V2.16668ZM13.3333 18.8333H6.66666V12.1667H13.3333V18.8333ZM15 18.8333V12.1667C15 11.7246 14.8244 11.3007 14.5118 10.9882C14.1993 10.6756 13.7754 10.5 13.3333 10.5H6.66666C6.22463 10.5 5.80071 10.6756 5.48815 10.9882C5.17559 11.3007 5 11.7246 5 12.1667V18.8333H1.66667V2.16668H5V5.50001C5 5.94204 5.17559 6.36596 5.48815 6.67852C5.80071 6.99108 6.22463 7.16668 6.66666 7.16668H13.3333C13.7754 7.16668 14.1993 6.99108 14.5118 6.67852C14.8244 6.36596 15 5.94204 15 5.50001V2.50835L18.3333 5.84168V18.8333H15Z"
                                            fill="white" />
                                    </svg>
                                    Simpan
                                </button>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                
        </div>
    </div>
    </div>
    </div>
</body>