@extends('Layouts.app')
@section('content')
    <div class="relative md:ml-64 bg-blueGray-100 mt-16 md:mt-4">
        <div class="p-4">
            <div class="border-gray-200 border-dashed rounded-lg dark:border-gray-700 md:mt-14">
                <div class="justify-center md:grid grid-cols-3 gap-4 mb-3">
                    <div class="relative flex flex-col min-w-0 break-words bg-white rounded-lg mb-6 xl:mb-0 shadow">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-gray-600 uppercase font-bold text-sm">
                                        <p>Rumah Sakit</p>
                                    </h5>
                                    <div class="py-2">
                                        <span class="font-semibold text-xl text-blueGray-700">
                                            {{-- <p>{{ $rumahsakits }} Unit</p> --}}
                                        </span>
                                    </div>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div
                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 18 18" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.9535 5.63855C16.9535 4.42063 16.9535 3.8108 16.6713 3.37359C16.5492 3.18407 16.3921 3.02136 16.2092 2.89475C15.84 2.63884 15.3435 2.60675 14.4385 2.60328C14.4419 2.85571 14.4419 3.12029 14.4419 3.39267V4.55422H15.2791C15.4456 4.55422 15.6053 4.62276 15.7231 4.74477C15.8408 4.86679 15.907 5.03227 15.907 5.20482C15.907 5.37737 15.8408 5.54285 15.7231 5.66486C15.6053 5.78688 15.4456 5.85542 15.2791 5.85542H14.4419V7.15663H15.2791C15.4456 7.15663 15.6053 7.22517 15.7231 7.34718C15.8408 7.4692 15.907 7.63468 15.907 7.80723C15.907 7.97978 15.8408 8.14526 15.7231 8.26727C15.6053 8.38929 15.4456 8.45783 15.2791 8.45783H14.4419V9.75904H15.2791C15.4456 9.75904 15.6053 9.82758 15.7231 9.94959C15.8408 10.0716 15.907 10.2371 15.907 10.4096C15.907 10.5822 15.8408 10.7477 15.7231 10.8697C15.6053 10.9917 15.4456 11.0602 15.2791 11.0602H14.4419V16.6988H13.186V3.46988C13.186 1.83383 13.186 1.01667 12.6954 0.508337C12.2048 -5.17052e-08 11.4162 0 9.83721 0H8.16279C6.58381 0 5.79516 -5.17052e-08 5.30456 0.508337C4.81395 1.01667 4.81395 1.83383 4.81395 3.46988V16.6988H3.55814V11.0602H2.72093C2.5544 11.0602 2.39469 10.9917 2.27693 10.8697C2.15918 10.7477 2.09302 10.5822 2.09302 10.4096C2.09302 10.2371 2.15918 10.0716 2.27693 9.94959C2.39469 9.82758 2.5544 9.75904 2.72093 9.75904H3.55814V8.45783H2.72093C2.5544 8.45783 2.39469 8.38929 2.27693 8.26727C2.15918 8.14526 2.09302 7.97978 2.09302 7.80723C2.09302 7.63468 2.15918 7.4692 2.27693 7.34718C2.39469 7.22517 2.5544 7.15663 2.72093 7.15663H3.55814V5.85542H2.72093C2.5544 5.85542 2.39469 5.78688 2.27693 5.66486C2.15918 5.54285 2.09302 5.37737 2.09302 5.20482C2.09302 5.03227 2.15918 4.86679 2.27693 4.74477C2.39469 4.62276 2.5544 4.55422 2.72093 4.55422H3.55814V3.39181C3.55814 3.12029 3.55814 2.85571 3.56149 2.60241C2.65647 2.60675 2.16 2.63884 1.79079 2.89475C1.60788 3.02136 1.45085 3.18407 1.32865 3.37359C1.04651 3.8108 1.04651 4.42063 1.04651 5.63855V16.6988H0.627907C0.461376 16.6988 0.301665 16.7673 0.18391 16.8894C0.0661543 17.0114 0 17.1768 0 17.3494C0 17.5219 0.0661543 17.6874 0.18391 17.8094C0.301665 17.9315 0.461376 18 0.627907 18H17.3721C17.5386 18 17.6983 17.9315 17.8161 17.8094C17.9338 17.6874 18 17.5219 18 17.3494C18 17.1768 17.9338 17.0114 17.8161 16.8894C17.6983 16.7673 17.5386 16.6988 17.3721 16.6988H16.9535V5.63855ZM9 1.95181C9.16653 1.95181 9.32624 2.02035 9.444 2.14236C9.56175 2.26438 9.62791 2.42986 9.62791 2.60241V3.68675H10.6744C10.8409 3.68675 11.0007 3.75529 11.1184 3.8773C11.2362 3.99932 11.3023 4.1648 11.3023 4.33735C11.3023 4.5099 11.2362 4.67538 11.1184 4.7974C11.0007 4.91941 10.8409 4.98795 10.6744 4.98795H9.62791V6.07229C9.62791 6.24484 9.56175 6.41032 9.444 6.53233C9.32624 6.65435 9.16653 6.72289 9 6.72289C8.83347 6.72289 8.67376 6.65435 8.556 6.53233C8.43825 6.41032 8.37209 6.24484 8.37209 6.07229V4.98795H7.32558C7.15905 4.98795 6.99934 4.91941 6.88158 4.7974C6.76383 4.67538 6.69767 4.5099 6.69767 4.33735C6.69767 4.1648 6.76383 3.99932 6.88158 3.8773C6.99934 3.75529 7.15905 3.68675 7.32558 3.68675H8.37209V2.60241C8.37209 2.42986 8.43825 2.26438 8.556 2.14236C8.67376 2.02035 8.83347 1.95181 9 1.95181ZM6.69767 8.6747C6.69767 8.50215 6.76383 8.33667 6.88158 8.21465C6.99934 8.09264 7.15905 8.0241 7.32558 8.0241H10.6744C10.8409 8.0241 11.0007 8.09264 11.1184 8.21465C11.2362 8.33667 11.3023 8.50215 11.3023 8.6747C11.3023 8.84725 11.2362 9.01273 11.1184 9.13474C11.0007 9.25676 10.8409 9.3253 10.6744 9.3253H7.32558C7.15905 9.3253 6.99934 9.25676 6.88158 9.13474C6.76383 9.01273 6.69767 8.84725 6.69767 8.6747ZM6.69767 11.2771C6.69767 11.1046 6.76383 10.9391 6.88158 10.8171C6.99934 10.6951 7.15905 10.6265 7.32558 10.6265H10.6744C10.8409 10.6265 11.0007 10.6951 11.1184 10.8171C11.2362 10.9391 11.3023 11.1046 11.3023 11.2771C11.3023 11.4497 11.2362 11.6151 11.1184 11.7372C11.0007 11.8592 10.8409 11.9277 10.6744 11.9277H7.32558C7.15905 11.9277 6.99934 11.8592 6.88158 11.7372C6.76383 11.6151 6.69767 11.4497 6.69767 11.2771ZM9 14.0964C9.16653 14.0964 9.32624 14.1649 9.444 14.2869C9.56175 14.409 9.62791 14.5744 9.62791 14.747V16.6988H8.37209V14.747C8.37209 14.5744 8.43825 14.409 8.556 14.2869C8.67376 14.1649 8.83347 14.0964 9 14.0964Z"
                                                    fill="#005FDB" />
                                            </svg>
                                        </i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <span class="whitespace-nowrap">Di semua kecamatan sudah berdiri rumah sakit</span>
                            </p>
                            <div class="flex justify-between items-center pt-5">
                                <a href="{{ route('rumahsakit') }}"
                                    class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 py-2">
                                    Lihat Semua
                                    <svg class="w-2.5 h-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex flex-col min-w-0 break-words bg-white rounded-lg mb-6 xl:mb-0 shadow">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-gray-600 uppercase font-bold text-sm">
                                        <p>Puskesmas</p>
                                    </h5>
                                    <div class="py-2">
                                        <span class="font-semibold text-xl text-blueGray-700">
                                            {{-- <p>{{ $puskesmass }} Unit</p> --}}
                                        </span>
                                    </div>

                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div
                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 18 18" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6.41096 7.28857e-09C7.02159 -6.32189e-06 7.61729 0.191392 8.11638 0.547957C8.61547 0.904523 8.99353 1.4088 9.19874 1.99167H18V3.24865L15.7808 4.76401V16.9929H17.2603C17.3911 16.9929 17.5165 17.0456 17.609 17.1393C17.7015 17.233 17.7534 17.3602 17.7534 17.4927C17.7534 17.6253 17.7015 17.7524 17.609 17.8461C17.5165 17.9398 17.3911 17.9925 17.2603 17.9925H15.7808V18H1.9726V17.9925H0.493151C0.362359 17.9925 0.236924 17.9398 0.144441 17.8461C0.0519569 17.7524 0 17.6253 0 17.4927C0 17.3602 0.0519569 17.233 0.144441 17.1393C0.236924 17.0456 0.362359 16.9929 0.493151 16.9929H1.9726V4.74652L0 3.23215V1.99117H3.62318C3.82847 1.4084 4.20656 0.904224 4.70565 0.547753C5.20473 0.191282 5.80038 -4.31172e-05 6.41096 7.28857e-09ZM6.90411 2.49896V1.49938H5.91781V2.49896H4.93151V3.49854H5.91781V4.49813H6.90411V3.49854H7.89041V2.49896H6.90411ZM13.8082 8.99625V16.9929H9.86301V8.99625H13.8082ZM7.39726 8.99625H3.94521V12.4948H7.39726V8.99625Z"
                                                    fill="#005FDB" />
                                            </svg>
                                        </i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <span class="whitespace-nowrap">Di beberapa daerah sudah berdiri puskesmas</span>
                            </p>
                            <div class="flex justify-between items-center pt-5">
                                <a href="{{ route('puskesmas') }}"
                                    class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 py-2">
                                    Lihat Semua
                                    <svg class="w-2.5 h-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex flex-col min-w-0 break-words bg-white rounded-lg mb-6 xl:mb-0 shadow">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-gray-600 uppercase font-bold text-sm">
                                        <p>Klinik/Terapi</p>
                                    </h5>
                                    <div class="py-2">
                                        <span class="font-semibold text-xl text-blueGray-700">
                                            {{-- <p>{{ $kliniks }} Unit</p> --}}
                                        </span>
                                    </div>

                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div
                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19"
                                                viewBox="0 0 17 18" fill="none">
                                                <path
                                                    d="M16.4525 9.26981L8.95249 0.936479C8.63665 0.584813 8.02999 0.584813 7.71415 0.936479L0.214153 9.26981C0.1062 9.38948 0.0353404 9.53793 0.01019 9.69711C-0.0149603 9.8563 0.00668229 10.0194 0.0724864 10.1665C0.20582 10.4673 0.504153 10.6606 0.83332 10.6606H2.49999V16.494C2.49999 16.715 2.58778 16.927 2.74406 17.0832C2.90034 17.2395 3.11231 17.3273 3.33332 17.3273H13.3333C13.5543 17.3273 13.7663 17.2395 13.9226 17.0832C14.0789 16.927 14.1667 16.715 14.1667 16.494V10.6606H15.8333C15.9947 10.6613 16.1528 10.615 16.2883 10.5274C16.4239 10.4398 16.531 10.3147 16.5966 10.1672C16.6623 10.0198 16.6836 9.85643 16.658 9.69708C16.6324 9.53774 16.561 9.38928 16.4525 9.26981ZM11.6667 11.494H9.16665V13.994H7.49999V11.494H4.99999V9.82731H7.49999V7.32731H9.16665V9.82731H11.6667V11.494Z"
                                                    fill="#005FDB" />
                                            </svg>
                                        </i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <span class="whitespace-nowrap">Di beberapa daera sudah beridi klinik dan terapi</span>
                            </p>
                            <div class="flex justify-between items-center pt-5">
                                <a href="{{ route('klinik') }}"
                                    class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 py-2">
                                    Lihat Semua
                                    <svg class="w-2.5 h-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bar chart -->
            <div class="max-w w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 16 18"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.3708 4.67515C12.3708 6.21337 11.9885 8.21959 11.4005 7.91515C11.1601 8.70035 10.6553 9.37814 9.97188 9.83342C9.28845 10.2887 8.46851 10.4934 7.65129 10.4128C6.83406 10.3322 6.06992 9.9712 5.48863 9.39115C4.90733 8.81111 4.5447 8.04775 4.46232 7.2307C3.87877 6.20981 3.11344 4.16403 5.08099 2.56937C5.11655 2.55781 5.13788 2.46181 5.16988 2.32048C5.29166 1.78581 5.56144 0.597367 7.26321 0.824478C8.57566 0.999145 12.3708 1.67648 12.3708 4.67515ZM10.6792 5.64492C10.6792 5.64492 10.4783 6.23248 10.6668 6.88715C10.6643 7.58518 10.3883 8.25443 9.89787 8.7512C9.40748 9.24796 8.74185 9.53264 8.04391 9.5441C7.34596 9.55556 6.67134 9.2929 6.1649 8.8125C5.65846 8.3321 5.36058 7.67228 5.33521 6.9747C5.39966 6.73026 5.39966 6.31648 5.39921 5.85648C5.39877 5.0267 5.39788 4.04759 5.77788 3.64848C8.43966 5.42137 10.6792 5.64492 10.6792 5.64492Z"
                                    fill="#005FDB" />
                                <path
                                    d="M3.11111 14.5374C3.11111 14.0565 3.36578 13.6352 3.748 13.4005C3.73344 13.3452 3.71981 13.2896 3.70711 13.2338C3.63967 12.9302 3.58701 12.6235 3.54933 12.3147C3.51115 12.0189 3.48815 11.7213 3.48044 11.4232C1.60444 12.1596 0 13.4432 0 14.7907V17.204H16V14.7907C16 13.5 14.5289 12.2685 12.7564 11.5196V11.532C12.7644 11.8032 12.7493 12.1143 12.72 12.4134C12.6933 12.6907 12.6538 12.9672 12.6062 13.204H12.8889C12.9714 13.2041 13.0523 13.2271 13.1225 13.2705C13.1926 13.3139 13.2493 13.376 13.2862 13.4498L13.7307 14.3387C13.7618 14.4005 13.7778 14.4685 13.7778 14.5374V15.4263C13.7778 15.5441 13.731 15.6572 13.6476 15.7405C13.5643 15.8239 13.4512 15.8707 13.3333 15.8707H12.4444V14.9818H12.8889V14.6423L12.6142 14.0929H11.3858L11.1111 14.6423V14.9818H11.5556V15.8707H10.6667C10.5488 15.8707 10.4357 15.8239 10.3524 15.7405C10.269 15.6572 10.2222 15.5441 10.2222 15.4263V14.5374C10.2222 14.4685 10.2382 14.4005 10.2693 14.3387L10.7138 13.4498C10.7507 13.376 10.8074 13.3139 10.8775 13.2705C10.9477 13.2271 11.0286 13.2041 11.1111 13.204H11.6956C11.7053 13.1658 11.7151 13.1236 11.7249 13.0769C11.7693 12.8676 11.8089 12.6023 11.8356 12.328C11.8622 12.0534 11.8747 11.7809 11.868 11.5569C11.8663 11.4641 11.8591 11.3715 11.8462 11.2796C11.8364 11.2165 11.8267 11.1876 11.8249 11.1814C11.8244 11.18 11.824 11.1796 11.8249 11.1805L11.8262 11.18C11.5904 11.1068 11.3519 11.0426 11.1111 10.9876C10.8876 10.9365 10.6564 11.244 10.5556 11.4365H5.33333C5.32036 11.4117 5.30761 11.3868 5.29511 11.3618C5.20089 11.1743 5.08489 10.9427 4.88889 10.9876C4.71778 11.0263 4.54667 11.0707 4.37556 11.1196C4.37004 11.1975 4.36767 11.2757 4.36844 11.3538C4.37022 11.5996 4.39378 11.9005 4.43156 12.2045C4.46933 12.5076 4.52044 12.8027 4.57378 13.0356C4.58889 13.1027 4.604 13.1632 4.61822 13.2152C4.87232 13.2486 5.1114 13.3545 5.30685 13.5202C5.50231 13.686 5.64585 13.9046 5.72029 14.1498C5.79473 14.3951 5.79692 14.6565 5.7266 14.903C5.65627 15.1494 5.51642 15.3704 5.32377 15.5394C5.13112 15.7084 4.89384 15.8183 4.64034 15.856C4.38684 15.8936 4.12786 15.8574 3.89441 15.7517C3.66095 15.646 3.46291 15.4752 3.32399 15.2599C3.18507 15.0445 3.11116 14.7937 3.11111 14.5374Z"
                                    fill="#005FDB" />
                                <path
                                    d="M4.88889 14.5374C4.88889 14.7925 4.68356 14.9885 4.44444 14.9885C4.20533 14.9885 4 14.7929 4 14.5374C4 14.2823 4.20533 14.0863 4.44444 14.0863C4.68356 14.0863 4.88889 14.2818 4.88889 14.5374Z"
                                    fill="#005FDB" />
                            </svg>
                        </div>
                        <div>
                            <h5 class="leading-none text-2xl font-bold text-gray-700 dark:text-white pb-1">Data</h5>
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Persebaran Dokter Spesialis</p>
                        </div>
                    </div>
                </div>
                <div class="py-6 max-w-sm" id="">
                    {!! $persebaran->container() !!}
                </div>
                {{-- <div id="column-chart"></div>
                <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                    <div class="flex justify-between items-center pt-5">
                        <a href="#"
                            class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                            Lihat Semua
                            <svg class="w-2.5 h-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </a>
                    </div>
                </div> --}}
            </div>
            <!-- end bar chart -->
            <div class="gap-4 mb-4 mt-4 md:grid grid-cols-2">
                <div
                    class="max-w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 md:mt-0">
                    <div class="section-icon flex items-start justify-start mb-4">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22"
                                    viewBox="0 0 16 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.3708 4.67515C12.3708 6.21337 11.9885 8.21959 11.4005 7.91515C11.1601 8.70035 10.6553 9.37814 9.97188 9.83342C9.28845 10.2887 8.46851 10.4934 7.65129 10.4128C6.83406 10.3322 6.06992 9.9712 5.48863 9.39115C4.90733 8.81111 4.5447 8.04775 4.46232 7.2307C3.87877 6.20981 3.11344 4.16403 5.08099 2.56937C5.11655 2.55781 5.13788 2.46181 5.16988 2.32048C5.29166 1.78581 5.56144 0.597367 7.26321 0.824478C8.57566 0.999145 12.3708 1.67648 12.3708 4.67515ZM10.6792 5.64492C10.6792 5.64492 10.4783 6.23248 10.6668 6.88715C10.6643 7.58518 10.3883 8.25443 9.89787 8.7512C9.40748 9.24796 8.74185 9.53264 8.04391 9.5441C7.34596 9.55556 6.67134 9.2929 6.1649 8.8125C5.65846 8.3321 5.36058 7.67228 5.33521 6.9747C5.39966 6.73026 5.39966 6.31648 5.39921 5.85648C5.39877 5.0267 5.39788 4.04759 5.77788 3.64848C8.43966 5.42137 10.6792 5.64492 10.6792 5.64492Z"
                                        fill="#005FDB" />
                                    <path
                                        d="M3.11111 14.5374C3.11111 14.0565 3.36578 13.6352 3.748 13.4005C3.73344 13.3452 3.71981 13.2896 3.70711 13.2338C3.63967 12.9302 3.58701 12.6235 3.54933 12.3147C3.51115 12.0189 3.48815 11.7213 3.48044 11.4232C1.60444 12.1596 0 13.4432 0 14.7907V17.204H16V14.7907C16 13.5 14.5289 12.2685 12.7564 11.5196V11.532C12.7644 11.8032 12.7493 12.1143 12.72 12.4134C12.6933 12.6907 12.6538 12.9672 12.6062 13.204H12.8889C12.9714 13.2041 13.0523 13.2271 13.1225 13.2705C13.1926 13.3139 13.2493 13.376 13.2862 13.4498L13.7307 14.3387C13.7618 14.4005 13.7778 14.4685 13.7778 14.5374V15.4263C13.7778 15.5441 13.731 15.6572 13.6476 15.7405C13.5643 15.8239 13.4512 15.8707 13.3333 15.8707H12.4444V14.9818H12.8889V14.6423L12.6142 14.0929H11.3858L11.1111 14.6423V14.9818H11.5556V15.8707H10.6667C10.5488 15.8707 10.4357 15.8239 10.3524 15.7405C10.269 15.6572 10.2222 15.5441 10.2222 15.4263V14.5374C10.2222 14.4685 10.2382 14.4005 10.2693 14.3387L10.7138 13.4498C10.7507 13.376 10.8074 13.3139 10.8775 13.2705C10.9477 13.2271 11.0286 13.2041 11.1111 13.204H11.6956C11.7053 13.1658 11.7151 13.1236 11.7249 13.0769C11.7693 12.8676 11.8089 12.6023 11.8356 12.328C11.8622 12.0534 11.8747 11.7809 11.868 11.5569C11.8663 11.4641 11.8591 11.3715 11.8462 11.2796C11.8364 11.2165 11.8267 11.1876 11.8249 11.1814C11.8244 11.18 11.824 11.1796 11.8249 11.1805L11.8262 11.18C11.5904 11.1068 11.3519 11.0426 11.1111 10.9876C10.8876 10.9365 10.6564 11.244 10.5556 11.4365H5.33333C5.32036 11.4117 5.30761 11.3868 5.29511 11.3618C5.20089 11.1743 5.08489 10.9427 4.88889 10.9876C4.71778 11.0263 4.54667 11.0707 4.37556 11.1196C4.37004 11.1975 4.36767 11.2757 4.36844 11.3538C4.37022 11.5996 4.39378 11.9005 4.43156 12.2045C4.46933 12.5076 4.52044 12.8027 4.57378 13.0356C4.58889 13.1027 4.604 13.1632 4.61822 13.2152C4.87232 13.2486 5.1114 13.3545 5.30685 13.5202C5.50231 13.686 5.64585 13.9046 5.72029 14.1498C5.79473 14.3951 5.79692 14.6565 5.7266 14.903C5.65627 15.1494 5.51642 15.3704 5.32377 15.5394C5.13112 15.7084 4.89384 15.8183 4.64034 15.856C4.38684 15.8936 4.12786 15.8574 3.89441 15.7517C3.66095 15.646 3.46291 15.4752 3.32399 15.2599C3.18507 15.0445 3.11116 14.7937 3.11111 14.5374Z"
                                        fill="#005FDB" />
                                    <path
                                        d="M4.88889 14.5374C4.88889 14.7925 4.68356 14.9885 4.44444 14.9885C4.20533 14.9885 4 14.7929 4 14.5374C4 14.2823 4.20533 14.0863 4.44444 14.0863C4.68356 14.0863 4.88889 14.2818 4.88889 14.5374Z"
                                        fill="#005FDB" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="leading-none text-2xl font-bold text-gray-700 dark:text-white pb-1">Data</h5>
                                <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Persebaran Dokter Umum dan
                                    Spesialis</p>
                            </div>
                        </div>
                    </div>
                    <div class="py-6 max-w-sm" id="">
                        {!! $perbandingan->container() !!}
                    </div>
                    <div
                        class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                        <div class="flex justify-between items-center pt-5">
                            <a href="#"
                                class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                                Lihat Semua
                                <svg class="w-2.5 h-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="mt-3 max-w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 md:mt-0 ">
                    <div class="section-icon flex items-start justify-start mb-4">
                        <div class="grid grid-cols-2 md:grid-cols-2">
                            <div class="flex items-center">
                                <div
                                    class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22"
                                        viewBox="0 0 16 18" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.3708 4.67515C12.3708 6.21337 11.9885 8.21959 11.4005 7.91515C11.1601 8.70035 10.6553 9.37814 9.97188 9.83342C9.28845 10.2887 8.46851 10.4934 7.65129 10.4128C6.83406 10.3322 6.06992 9.9712 5.48863 9.39115C4.90733 8.81111 4.5447 8.04775 4.46232 7.2307C3.87877 6.20981 3.11344 4.16403 5.08099 2.56937C5.11655 2.55781 5.13788 2.46181 5.16988 2.32048C5.29166 1.78581 5.56144 0.597367 7.26321 0.824478C8.57566 0.999145 12.3708 1.67648 12.3708 4.67515ZM10.6792 5.64492C10.6792 5.64492 10.4783 6.23248 10.6668 6.88715C10.6643 7.58518 10.3883 8.25443 9.89787 8.7512C9.40748 9.24796 8.74185 9.53264 8.04391 9.5441C7.34596 9.55556 6.67134 9.2929 6.1649 8.8125C5.65846 8.3321 5.36058 7.67228 5.33521 6.9747C5.39966 6.73026 5.39966 6.31648 5.39921 5.85648C5.39877 5.0267 5.39788 4.04759 5.77788 3.64848C8.43966 5.42137 10.6792 5.64492 10.6792 5.64492Z"
                                            fill="#005FDB" />
                                        <path
                                            d="M3.11111 14.5374C3.11111 14.0565 3.36578 13.6352 3.748 13.4005C3.73344 13.3452 3.71981 13.2896 3.70711 13.2338C3.63967 12.9302 3.58701 12.6235 3.54933 12.3147C3.51115 12.0189 3.48815 11.7213 3.48044 11.4232C1.60444 12.1596 0 13.4432 0 14.7907V17.204H16V14.7907C16 13.5 14.5289 12.2685 12.7564 11.5196V11.532C12.7644 11.8032 12.7493 12.1143 12.72 12.4134C12.6933 12.6907 12.6538 12.9672 12.6062 13.204H12.8889C12.9714 13.2041 13.0523 13.2271 13.1225 13.2705C13.1926 13.3139 13.2493 13.376 13.2862 13.4498L13.7307 14.3387C13.7618 14.4005 13.7778 14.4685 13.7778 14.5374V15.4263C13.7778 15.5441 13.731 15.6572 13.6476 15.7405C13.5643 15.8239 13.4512 15.8707 13.3333 15.8707H12.4444V14.9818H12.8889V14.6423L12.6142 14.0929H11.3858L11.1111 14.6423V14.9818H11.5556V15.8707H10.6667C10.5488 15.8707 10.4357 15.8239 10.3524 15.7405C10.269 15.6572 10.2222 15.5441 10.2222 15.4263V14.5374C10.2222 14.4685 10.2382 14.4005 10.2693 14.3387L10.7138 13.4498C10.7507 13.376 10.8074 13.3139 10.8775 13.2705C10.9477 13.2271 11.0286 13.2041 11.1111 13.204H11.6956C11.7053 13.1658 11.7151 13.1236 11.7249 13.0769C11.7693 12.8676 11.8089 12.6023 11.8356 12.328C11.8622 12.0534 11.8747 11.7809 11.868 11.5569C11.8663 11.4641 11.8591 11.3715 11.8462 11.2796C11.8364 11.2165 11.8267 11.1876 11.8249 11.1814C11.8244 11.18 11.824 11.1796 11.8249 11.1805L11.8262 11.18C11.5904 11.1068 11.3519 11.0426 11.1111 10.9876C10.8876 10.9365 10.6564 11.244 10.5556 11.4365H5.33333C5.32036 11.4117 5.30761 11.3868 5.29511 11.3618C5.20089 11.1743 5.08489 10.9427 4.88889 10.9876C4.71778 11.0263 4.54667 11.0707 4.37556 11.1196C4.37004 11.1975 4.36767 11.2757 4.36844 11.3538C4.37022 11.5996 4.39378 11.9005 4.43156 12.2045C4.46933 12.5076 4.52044 12.8027 4.57378 13.0356C4.58889 13.1027 4.604 13.1632 4.61822 13.2152C4.87232 13.2486 5.1114 13.3545 5.30685 13.5202C5.50231 13.686 5.64585 13.9046 5.72029 14.1498C5.79473 14.3951 5.79692 14.6565 5.7266 14.903C5.65627 15.1494 5.51642 15.3704 5.32377 15.5394C5.13112 15.7084 4.89384 15.8183 4.64034 15.856C4.38684 15.8936 4.12786 15.8574 3.89441 15.7517C3.66095 15.646 3.46291 15.4752 3.32399 15.2599C3.18507 15.0445 3.11116 14.7937 3.11111 14.5374Z"
                                            fill="#005FDB" />
                                        <path
                                            d="M4.88889 14.5374C4.88889 14.7925 4.68356 14.9885 4.44444 14.9885C4.20533 14.9885 4 14.7929 4 14.5374C4 14.2823 4.20533 14.0863 4.44444 14.0863C4.68356 14.0863 4.88889 14.2818 4.88889 14.5374Z"
                                            fill="#005FDB" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="leading-none text-2xl font-bold text-gray-700 dark:text-white pb-1">Data
                                    </h5>
                                    <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Anggota Masa Habis STR
                                        dan SIP</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mx-auto w-full overflow-hidden">
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
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Mark
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Otto
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">@mdo
                                                    </td>
                                                </tr>
                                                <tr class="border-b dark:border-neutral-500">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">2</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Jacob
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">
                                                        Thornton</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">@fat
                                                    </td>
                                                </tr>
                                                <tr class="border-b dark:border-neutral-500">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">3</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Larry
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">Wild
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">
                                                        @twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                        <div class="flex justify-between items-center pt-5">
                            <a href="#"
                                class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                                Lihat Semua
                                <svg class="w-2.5 h-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="mt-3 max-w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 md:mt-0">
                <div className="section-icon flex items-start justify-start mb-4">
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 16 18"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.3708 4.67515C12.3708 6.21337 11.9885 8.21959 11.4005 7.91515C11.1601 8.70035 10.6553 9.37814 9.97188 9.83342C9.28845 10.2887 8.46851 10.4934 7.65129 10.4128C6.83406 10.3322 6.06992 9.9712 5.48863 9.39115C4.90733 8.81111 4.5447 8.04775 4.46232 7.2307C3.87877 6.20981 3.11344 4.16403 5.08099 2.56937C5.11655 2.55781 5.13788 2.46181 5.16988 2.32048C5.29166 1.78581 5.56144 0.597367 7.26321 0.824478C8.57566 0.999145 12.3708 1.67648 12.3708 4.67515ZM10.6792 5.64492C10.6792 5.64492 10.4783 6.23248 10.6668 6.88715C10.6643 7.58518 10.3883 8.25443 9.89787 8.7512C9.40748 9.24796 8.74185 9.53264 8.04391 9.5441C7.34596 9.55556 6.67134 9.2929 6.1649 8.8125C5.65846 8.3321 5.36058 7.67228 5.33521 6.9747C5.39966 6.73026 5.39966 6.31648 5.39921 5.85648C5.39877 5.0267 5.39788 4.04759 5.77788 3.64848C8.43966 5.42137 10.6792 5.64492 10.6792 5.64492Z"
                                    fill="#005FDB" />
                                <path
                                    d="M3.11111 14.5374C3.11111 14.0565 3.36578 13.6352 3.748 13.4005C3.73344 13.3452 3.71981 13.2896 3.70711 13.2338C3.63967 12.9302 3.58701 12.6235 3.54933 12.3147C3.51115 12.0189 3.48815 11.7213 3.48044 11.4232C1.60444 12.1596 0 13.4432 0 14.7907V17.204H16V14.7907C16 13.5 14.5289 12.2685 12.7564 11.5196V11.532C12.7644 11.8032 12.7493 12.1143 12.72 12.4134C12.6933 12.6907 12.6538 12.9672 12.6062 13.204H12.8889C12.9714 13.2041 13.0523 13.2271 13.1225 13.2705C13.1926 13.3139 13.2493 13.376 13.2862 13.4498L13.7307 14.3387C13.7618 14.4005 13.7778 14.4685 13.7778 14.5374V15.4263C13.7778 15.5441 13.731 15.6572 13.6476 15.7405C13.5643 15.8239 13.4512 15.8707 13.3333 15.8707H12.4444V14.9818H12.8889V14.6423L12.6142 14.0929H11.3858L11.1111 14.6423V14.9818H11.5556V15.8707H10.6667C10.5488 15.8707 10.4357 15.8239 10.3524 15.7405C10.269 15.6572 10.2222 15.5441 10.2222 15.4263V14.5374C10.2222 14.4685 10.2382 14.4005 10.2693 14.3387L10.7138 13.4498C10.7507 13.376 10.8074 13.3139 10.8775 13.2705C10.9477 13.2271 11.0286 13.2041 11.1111 13.204H11.6956C11.7053 13.1658 11.7151 13.1236 11.7249 13.0769C11.7693 12.8676 11.8089 12.6023 11.8356 12.328C11.8622 12.0534 11.8747 11.7809 11.868 11.5569C11.8663 11.4641 11.8591 11.3715 11.8462 11.2796C11.8364 11.2165 11.8267 11.1876 11.8249 11.1814C11.8244 11.18 11.824 11.1796 11.8249 11.1805L11.8262 11.18C11.5904 11.1068 11.3519 11.0426 11.1111 10.9876C10.8876 10.9365 10.6564 11.244 10.5556 11.4365H5.33333C5.32036 11.4117 5.30761 11.3868 5.29511 11.3618C5.20089 11.1743 5.08489 10.9427 4.88889 10.9876C4.71778 11.0263 4.54667 11.0707 4.37556 11.1196C4.37004 11.1975 4.36767 11.2757 4.36844 11.3538C4.37022 11.5996 4.39378 11.9005 4.43156 12.2045C4.46933 12.5076 4.52044 12.8027 4.57378 13.0356C4.58889 13.1027 4.604 13.1632 4.61822 13.2152C4.87232 13.2486 5.1114 13.3545 5.30685 13.5202C5.50231 13.686 5.64585 13.9046 5.72029 14.1498C5.79473 14.3951 5.79692 14.6565 5.7266 14.903C5.65627 15.1494 5.51642 15.3704 5.32377 15.5394C5.13112 15.7084 4.89384 15.8183 4.64034 15.856C4.38684 15.8936 4.12786 15.8574 3.89441 15.7517C3.66095 15.646 3.46291 15.4752 3.32399 15.2599C3.18507 15.0445 3.11116 14.7937 3.11111 14.5374Z"
                                    fill="#005FDB" />
                                <path
                                    d="M4.88889 14.5374C4.88889 14.7925 4.68356 14.9885 4.44444 14.9885C4.20533 14.9885 4 14.7929 4 14.5374C4 14.2823 4.20533 14.0863 4.44444 14.0863C4.68356 14.0863 4.88889 14.2818 4.88889 14.5374Z"
                                    fill="#005FDB" />
                            </svg>
                        </div>
                        <div>
                            <h5 class="leading-none text-2xl font-bold text-gray-800 dark:text-white pb-1">Data</h5>
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Nama Semua Anggota IDI</p>
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
                                            <th scope="col" class="px-6 py-4">Nama</th>
                                            <th scope="col" class="px-6 py-4">Asal Rumah Sakit</th>
                                            <th scope="col" class="px-6 py-4">Alamat Lengkap</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $dokter)
                                            <tr class="border-b dark:border-neutral-500">
                                                <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">
                                                    {{ $dokter->nama_lengkap }}</td>
                                            </tr>
                                            <tr class="border-b dark:border-neutral-500">
                                                <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">
                                                    {{ $dokter->ktp_alamat_lengkap }}</td>
                                            </tr>
                                            <tr class="border-b dark:border-neutral-500">
                                                <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-400">
                                                    {{ $dokter->krsp_alamat_lengkap }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                        <div class="flex justify-between items-center pt-5">
                            <a href="#"
                                class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                                Lihat Semua
                                <svg class="w-2.5 h-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <script src="{{ $persebaran->cdn() }}"></script>
    {{ $persebaran->script() }}
    <script src="{{ $perbandingan->cdn() }}"></script>
    {{ $perbandingan->script() }}
@endsection
