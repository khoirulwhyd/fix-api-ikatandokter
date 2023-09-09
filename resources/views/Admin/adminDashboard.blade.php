@extends('Admin.Layouts.master')
@section('content')
            <div class="relative md:ml-64">
                <div class="p-4">
                    <div class="border-gray-200 border-dashed rounded-lg dark:border-gray-700 md:mt-16 mt-14">
                        <div class="justify-center md:grid grid-cols-2 gap-4 mb-3">
                            <div class="relative flex flex-col min-w-0 break-words bg-white rounded-lg mb-6 xl:mb-0 shadow">
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                            <h5 class="text-gray-600 uppercase font-bold text-sm">
                                                <p>Total Anggota</p>
                                            </h5>
                                            <div class="py-2">
                                                <span class="font-semibold text-3xl text-blueGray-700">
                                                    <p>150</p>
                                                </span>
                                            </div>

                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full"
                                            >
                                                <i class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" viewBox="0 0 22 16" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1583 4.23285C15.1583 6.58254 13.2851 8.4666 10.949 8.4666C8.61292 8.4666 6.73974 6.58254 6.73974 4.23285C6.73974 1.88227 8.61292 0 10.949 0C13.2851 0 15.1583 1.88227 15.1583 4.23285ZM10.949 16C7.51785 16 4.58809 15.456 4.58809 13.2802C4.58809 11.1034 7.49904 10.5396 10.949 10.5396C14.3802 10.5396 17.31 11.0836 17.31 13.2604C17.31 15.4362 14.399 16 10.949 16ZM16.9571 4.30922C16.9571 5.50703 16.5998 6.62288 15.973 7.55051C15.9086 7.64597 15.9659 7.77476 16.0796 7.79457C16.2363 7.82159 16.3984 7.8369 16.5631 7.8414C18.2062 7.88463 19.6809 6.82102 20.0883 5.21974C20.6918 2.84123 18.9198 0.705896 16.6634 0.705896C16.4181 0.705896 16.1835 0.732013 15.9551 0.778845C15.9238 0.78605 15.8907 0.800459 15.8728 0.828378C15.8513 0.862601 15.8674 0.908532 15.8889 0.938252C16.5667 1.8938 16.9571 3.05918 16.9571 4.30922ZM19.6782 9.51257C20.7823 9.72962 21.5084 10.1727 21.8093 10.8166C22.0636 11.3453 22.0636 11.9586 21.8093 12.4864C21.349 13.4851 19.8654 13.8058 19.2887 13.8886C19.1696 13.9066 19.0738 13.8031 19.0864 13.6833C19.3809 10.9157 17.0377 9.60353 16.4315 9.30183C16.4055 9.28832 16.4002 9.2676 16.4028 9.255C16.4046 9.24599 16.4154 9.23158 16.4351 9.22888C17.7468 9.20456 19.1571 9.38468 19.6782 9.51257ZM5.43711 7.84131C5.60186 7.83681 5.76304 7.8224 5.92063 7.79448C6.03434 7.77467 6.09165 7.64588 6.02718 7.55042C5.4004 6.62279 5.04313 5.50694 5.04313 4.30913C5.04313 3.05909 5.43353 1.89371 6.11135 0.938162C6.13284 0.908442 6.14806 0.862511 6.12746 0.828288C6.10956 0.80127 6.07553 0.78596 6.04509 0.778755C5.81586 0.731923 5.58127 0.705806 5.33593 0.705806C3.07951 0.705806 1.30751 2.84114 1.91191 5.21965C2.31932 6.82093 3.79405 7.88454 5.43711 7.84131ZM5.59694 9.25446C5.59962 9.26796 5.59425 9.28778 5.56918 9.30219C4.9621 9.60389 2.61883 10.9161 2.91342 13.6827C2.92595 13.8034 2.83104 13.9061 2.71195 13.889C2.13531 13.8061 0.651629 13.4855 0.191392 12.4867C-0.0637974 11.9581 -0.0637974 11.3457 0.191392 10.817C0.492248 10.1731 1.21752 9.72998 2.32156 9.51203C2.84358 9.38504 4.25294 9.20492 5.5656 9.22924C5.5853 9.23194 5.59515 9.24635 5.59694 9.25446Z" fill="#007BFF" />
                                                    </svg>
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4">
                                        <span class="whitespace-nowrap">Anggota</span>
                                    </p>
                                    <div class="flex justify-start pt-5">
                                        <a
                                        href="#"
                                        class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 py-2">
                                        Lihat Semua
                                        <svg class="w-2.5 h-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                        </svg>
                                        </a>
                                    </div>
                                    <!-- <a href="#" class="py-2 inline-flex items-center text-sm text-blue-600 hover:underline">
                                        Lihat Semua Data
                                        <div class="px-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="9" viewBox="0 0 11 9" fill="none">
                                                <path d="M10.3438 4.32861L0.96875 4.32861" stroke="#007BFF" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6.56274 0.56337L10.344 4.32837L6.56274 8.09399" stroke="#007BFF" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </a> -->
                                </div>
                            </div>
                            <div class="relative flex flex-col min-w-0 break-words bg-white rounded-lg mb-6 xl:mb-0 shadow">
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                            <h5 class="text-gray-600 uppercase font-bold text-sm">
                                                <p>PENDAFTARAN ANGGOTA BARU</p>
                                            </h5>
                                            <div class="py-2">
                                                <span class="font-semibold text-3xl text-blueGray-700">
                                                    <p>2</p>
                                                </span>
                                            </div>

                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full"
                                            >
                                                <i class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1583 8.23285C16.1583 10.5825 14.2851 12.4666 11.949 12.4666C9.61292 12.4666 7.73974 10.5825 7.73974 8.23285C7.73974 5.88227 9.61292 4 11.949 4C14.2851 4 16.1583 5.88227 16.1583 8.23285ZM11.949 20C8.51785 20 5.58809 19.456 5.58809 17.2802C5.58809 15.1034 8.49904 14.5396 11.949 14.5396C15.3802 14.5396 18.31 15.0836 18.31 17.2604C18.31 19.4362 15.399 20 11.949 20ZM17.9571 8.30922C17.9571 9.50703 17.5998 10.6229 16.973 11.5505C16.9086 11.646 16.9659 11.7748 17.0796 11.7946C17.2363 11.8216 17.3984 11.8369 17.5631 11.8414C19.2062 11.8846 20.6809 10.821 21.0883 9.21974C21.6918 6.84123 19.9198 4.7059 17.6634 4.7059C17.4181 4.7059 17.1835 4.73201 16.9551 4.77884C16.9238 4.78605 16.8907 4.80046 16.8728 4.82838C16.8513 4.8626 16.8674 4.90853 16.8889 4.93825C17.5667 5.8938 17.9571 7.05918 17.9571 8.30922ZM20.6782 13.5126C21.7823 13.7296 22.5084 14.1727 22.8093 14.8166C23.0636 15.3453 23.0636 15.9586 22.8093 16.4864C22.349 17.4851 20.8654 17.8058 20.2887 17.8886C20.1696 17.9066 20.0738 17.8031 20.0864 17.6833C20.3809 14.9157 18.0377 13.6035 17.4315 13.3018C17.4055 13.2883 17.4002 13.2676 17.4028 13.255C17.4046 13.246 17.4154 13.2316 17.4351 13.2289C18.7468 13.2046 20.1571 13.3847 20.6782 13.5126ZM6.43711 11.8413C6.60186 11.8368 6.76304 11.8224 6.92063 11.7945C7.03434 11.7747 7.09165 11.6459 7.02718 11.5504C6.4004 10.6228 6.04313 9.50694 6.04313 8.30913C6.04313 7.05909 6.43353 5.89371 7.11135 4.93816C7.13284 4.90844 7.14806 4.86251 7.12746 4.82829C7.10956 4.80127 7.07553 4.78596 7.04509 4.77875C6.81586 4.73192 6.58127 4.70581 6.33593 4.70581C4.07951 4.70581 2.30751 6.84114 2.91191 9.21965C3.31932 10.8209 4.79405 11.8845 6.43711 11.8413ZM6.59694 13.2545C6.59962 13.268 6.59425 13.2878 6.56918 13.3022C5.9621 13.6039 3.61883 14.9161 3.91342 17.6827C3.92595 17.8034 3.83104 17.9061 3.71195 17.889C3.13531 17.8061 1.65163 17.4855 1.19139 16.4867C0.936203 15.9581 0.936203 15.3457 1.19139 14.817C1.49225 14.1731 2.21752 13.73 3.32156 13.512C3.84358 13.385 5.25294 13.2049 6.5656 13.2292C6.5853 13.2319 6.59515 13.2464 6.59694 13.2545Z" fill="#007BFF" />
                                                        <circle cx="18.5" cy="5.5" r="3.5" fill="#F01010" />
                                                    </svg>
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4">
                                        <span class="whitespace-nowrap">Memerlukan persetujuan</span>
                                    </p>
                                    <div class="flex justify-start pt-5">
                                        <a
                                        href="#"
                                        class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 py-2">
                                        Lihat Pendaftar
                                        <svg class="w-2.5 h-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                        </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 max-w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 md:mt-0">
                        <div class="section-icon flex items-start justify-start mb-4">
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 16 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3708 4.67515C12.3708 6.21337 11.9885 8.21959 11.4005 7.91515C11.1601 8.70035 10.6553 9.37814 9.97188 9.83342C9.28845 10.2887 8.46851 10.4934 7.65129 10.4128C6.83406 10.3322 6.06992 9.9712 5.48863 9.39115C4.90733 8.81111 4.5447 8.04775 4.46232 7.2307C3.87877 6.20981 3.11344 4.16403 5.08099 2.56937C5.11655 2.55781 5.13788 2.46181 5.16988 2.32048C5.29166 1.78581 5.56144 0.597367 7.26321 0.824478C8.57566 0.999145 12.3708 1.67648 12.3708 4.67515ZM10.6792 5.64492C10.6792 5.64492 10.4783 6.23248 10.6668 6.88715C10.6643 7.58518 10.3883 8.25443 9.89787 8.7512C9.40748 9.24796 8.74185 9.53264 8.04391 9.5441C7.34596 9.55556 6.67134 9.2929 6.1649 8.8125C5.65846 8.3321 5.36058 7.67228 5.33521 6.9747C5.39966 6.73026 5.39966 6.31648 5.39921 5.85648C5.39877 5.0267 5.39788 4.04759 5.77788 3.64848C8.43966 5.42137 10.6792 5.64492 10.6792 5.64492Z" fill="#005FDB"/>
                                    <path d="M3.11111 14.5374C3.11111 14.0565 3.36578 13.6352 3.748 13.4005C3.73344 13.3452 3.71981 13.2896 3.70711 13.2338C3.63967 12.9302 3.58701 12.6235 3.54933 12.3147C3.51115 12.0189 3.48815 11.7213 3.48044 11.4232C1.60444 12.1596 0 13.4432 0 14.7907V17.204H16V14.7907C16 13.5 14.5289 12.2685 12.7564 11.5196V11.532C12.7644 11.8032 12.7493 12.1143 12.72 12.4134C12.6933 12.6907 12.6538 12.9672 12.6062 13.204H12.8889C12.9714 13.2041 13.0523 13.2271 13.1225 13.2705C13.1926 13.3139 13.2493 13.376 13.2862 13.4498L13.7307 14.3387C13.7618 14.4005 13.7778 14.4685 13.7778 14.5374V15.4263C13.7778 15.5441 13.731 15.6572 13.6476 15.7405C13.5643 15.8239 13.4512 15.8707 13.3333 15.8707H12.4444V14.9818H12.8889V14.6423L12.6142 14.0929H11.3858L11.1111 14.6423V14.9818H11.5556V15.8707H10.6667C10.5488 15.8707 10.4357 15.8239 10.3524 15.7405C10.269 15.6572 10.2222 15.5441 10.2222 15.4263V14.5374C10.2222 14.4685 10.2382 14.4005 10.2693 14.3387L10.7138 13.4498C10.7507 13.376 10.8074 13.3139 10.8775 13.2705C10.9477 13.2271 11.0286 13.2041 11.1111 13.204H11.6956C11.7053 13.1658 11.7151 13.1236 11.7249 13.0769C11.7693 12.8676 11.8089 12.6023 11.8356 12.328C11.8622 12.0534 11.8747 11.7809 11.868 11.5569C11.8663 11.4641 11.8591 11.3715 11.8462 11.2796C11.8364 11.2165 11.8267 11.1876 11.8249 11.1814C11.8244 11.18 11.824 11.1796 11.8249 11.1805L11.8262 11.18C11.5904 11.1068 11.3519 11.0426 11.1111 10.9876C10.8876 10.9365 10.6564 11.244 10.5556 11.4365H5.33333C5.32036 11.4117 5.30761 11.3868 5.29511 11.3618C5.20089 11.1743 5.08489 10.9427 4.88889 10.9876C4.71778 11.0263 4.54667 11.0707 4.37556 11.1196C4.37004 11.1975 4.36767 11.2757 4.36844 11.3538C4.37022 11.5996 4.39378 11.9005 4.43156 12.2045C4.46933 12.5076 4.52044 12.8027 4.57378 13.0356C4.58889 13.1027 4.604 13.1632 4.61822 13.2152C4.87232 13.2486 5.1114 13.3545 5.30685 13.5202C5.50231 13.686 5.64585 13.9046 5.72029 14.1498C5.79473 14.3951 5.79692 14.6565 5.7266 14.903C5.65627 15.1494 5.51642 15.3704 5.32377 15.5394C5.13112 15.7084 4.89384 15.8183 4.64034 15.856C4.38684 15.8936 4.12786 15.8574 3.89441 15.7517C3.66095 15.646 3.46291 15.4752 3.32399 15.2599C3.18507 15.0445 3.11116 14.7937 3.11111 14.5374Z" fill="#005FDB"/>
                                    <path d="M4.88889 14.5374C4.88889 14.7925 4.68356 14.9885 4.44444 14.9885C4.20533 14.9885 4 14.7929 4 14.5374C4 14.2823 4.20533 14.0863 4.44444 14.0863C4.68356 14.0863 4.88889 14.2818 4.88889 14.5374Z" fill="#005FDB"/>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="leading-none text-2xl font-bold text-gray-700 dark:text-white pb-1">Data</h5>
                                    <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Semua Dokter</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full text-left text-sm font-light">
                                            <thead class="border-b font-medium text-gray-600 dark:border-neutral-500">
                                                <tr>
                                                    <th scope="col" class="px-6 py-4">No</th>
                                                    <th scope="col" class="px-6 py-4">Nama</th>
                                                    <th scope="col" class="px-6 py-4">Keterangan</th>
                                                    <th scope="col" class="px-6 py-4">Tanggal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b dark:border-neutral-500">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Mark</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Otto</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">@mdo</td>
                                                </tr>
                                                <tr class="border-b dark:border-neutral-500">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">2</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Jacob</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Thornton</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">@fat</td>
                                                </tr>
                                                <tr class="border-b dark:border-neutral-500">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">3</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Larry</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Wild</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">@twiasddddddddddddddtter</td>
                                                </tr>
                                                <tr class="border-b dark:border-neutral-500">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">4</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Larry</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Wild</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">@twiasddddddddddddddtter</td>
                                                </tr>
                                                <tr class="border-b dark:border-neutral-500">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">5</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Larry</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Wild</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">@twiasddddddddddddddtter</td>
                                                </tr>
                                                <tr class="border-b dark:border-neutral-500">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">6</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Larry</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Wild</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">@twiasddddddddddddddtter</td>
                                                </tr>   
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="flex justify-start pt-5">
                                        <a
                                        href="#"
                                        class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 py-2">
                                        Lihat Semua
                                        <svg class="w-2.5 h-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                        </svg>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>

@endsection