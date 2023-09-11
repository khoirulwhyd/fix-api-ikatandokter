<!doctype html>
<html class="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <script src="../path/to/flowbite/dist/datepicker.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>
   <!-- <link href="{{ asset('css/login.css') }}" rel="stylesheet"> -->
  @vite(['resources/css/app.css','resources/js/app.js'])
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    
<nav class="fixed top-0 z-50 w-full bg-white border-b shadow-md border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="" class="flex ml-2 md:mr-24">
          <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo" /> -->
            <img class="h-10 mr-3" src="{{ url('Assets/logoidi.png') }}" alt="description of myimage">
          <span class="self-center text-sm font-semibold sm:text-lg whitespace-nowrap text-primary-800 dark:text-white">IDI Malang Raya</span>
        </a>
      </div>
      <form class="md:flex flex-row flex-wrap items-center lg:ml-auto mr-3">
                        <div class="relative flex w-full flex-wrap items-stretch">
                            <span class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21.0002 21L16.6572 16.657M16.6572 16.657C17.4001 15.9141 17.9894 15.0322 18.3914 14.0615C18.7935 13.0909 19.0004 12.0506 19.0004 11C19.0004 9.94938 18.7935 8.90906 18.3914 7.93843C17.9894 6.9678 17.4001 6.08587 16.6572 5.34298C15.9143 4.60009 15.0324 4.0108 14.0618 3.60875C13.0911 3.2067 12.0508 2.99977 11.0002 2.99977C9.9496 2.99977 8.90929 3.2067 7.93866 3.60875C6.96803 4.0108 6.08609 4.60009 5.34321 5.34298C3.84288 6.84331 3 8.87819 3 11C3 13.1218 3.84288 15.1566 5.34321 16.657C6.84354 18.1573 8.87842 19.0002 11.0002 19.0002C13.122 19.0002 15.1569 18.1573 16.6572 16.657Z" stroke="#A7A8A9" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            </span>
                            <input
                                type="text"
                                placeholder="Search here..."
                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10"
                            />
                        </div>
                    </form>
      <div class="flex items-center">
          <div class="flex items-center ml-3">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open admin menu</span>
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-900 dark:text-white" role="none">
                    {{Auth::user()->role}}
                </p>
                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                  {{Auth::user()->nama_lengkap}}
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a href="{{route('logoutAdmin')}}" class="block px-4 py-2 text-sm text-red-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700 shadow-md" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="/adminDashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 28 28" fill="none">
                <path d="M15.6667 9.33452V9.33334V4.66667C15.6667 4.4623 15.7304 4.31417 15.8562 4.18839C15.9819 4.06267 16.1293 3.99952 16.3322 4H16.3333H23.3333C23.5377 4 23.6858 4.06377 23.8116 4.18956L24.1641 3.83707L23.8116 4.18956C23.9373 4.31528 24.0005 4.46264 24 4.66549V4.66667V9.33334C24 9.53771 23.9362 9.68583 23.8105 9.81162L24.164 10.1652L23.8104 9.81162C23.6847 9.93734 23.5374 10.0005 23.3345 10H23.3333H16.3333C16.129 10 15.9808 9.93623 15.8551 9.81045C15.7293 9.68473 15.6662 9.53737 15.6667 9.33452ZM4 14.0012V14V4.66667C4 4.4623 4.06377 4.31417 4.18956 4.18839C4.31528 4.06267 4.46264 3.99952 4.66549 4V4H4.66667H11.6667C11.871 4 12.0192 4.06377 12.1449 4.18956C12.2707 4.31528 12.3338 4.46264 12.3333 4.66549V4.66667V14C12.3333 14.2044 12.2696 14.3525 12.1438 14.4783C12.0181 14.604 11.8707 14.6672 11.6678 14.6667H11.6667H4.66667C4.4623 14.6667 4.31417 14.6029 4.18839 14.4771C4.06267 14.3514 3.99952 14.204 4 14.0012ZM15.6667 23.3345V23.3333V14C15.6667 13.7956 15.7304 13.6475 15.8562 13.5217C15.9819 13.396 16.1293 13.3329 16.3322 13.3333H16.3333H23.3333C23.5377 13.3333 23.6858 13.3971 23.8116 13.5229C23.9373 13.6486 24.0005 13.796 24 13.9988V14V23.3333C24 23.5377 23.9362 23.6858 23.8105 23.8116L24.164 24.1652L23.8104 23.8116C23.6847 23.9373 23.5374 24.0005 23.3345 24H23.3333H16.3333C16.129 24 15.9808 23.9362 15.8551 23.8105C15.7293 23.6847 15.6662 23.5374 15.6667 23.3345ZM4.18839 23.8105L3.83532 24.1635L4.18839 23.8104C4.06267 23.6847 3.99952 23.5374 4 23.3345V23.3333V18.6667C4 18.4623 4.06377 18.3142 4.18956 18.1884C4.31528 18.0627 4.46264 17.9995 4.66549 18H4.66667H11.6667C11.871 18 12.0192 18.0638 12.1449 18.1896C12.2707 18.3153 12.3338 18.4626 12.3333 18.6655V18.6667V23.3333C12.3333 23.5377 12.2696 23.6858 12.1438 23.8116C12.0181 23.9373 11.8707 24.0005 11.6678 24H11.6667H4.66667C4.4623 24 4.31417 23.9362 4.18839 23.8105Z" fill="#495057" stroke="#495057"/>
              </svg>
               <span class="text-base ml-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="/anggota" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 28 28" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.2476 9.05615C19.2476 12.1405 16.7237 14.6123 13.5741 14.6123C10.4257 14.6123 7.90057 12.1405 7.90057 9.05615C7.90057 5.97176 10.4257 3.5 13.5741 3.5C16.7237 3.5 19.2476 5.97176 19.2476 9.05615ZM4.99988 20.9036C4.99988 18.0484 8.94966 17.334 13.5741 17.334C18.2237 17.334 22.1483 18.073 22.1483 20.9304C22.1483 23.7856 18.1985 24.5 13.5741 24.5C8.92454 24.5 4.99988 23.761 4.99988 20.9036Z" fill="#495057"/>
              </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Master Data Anggota</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

    @yield('content')
</body>
            <div class="fixed-bottom p-4 md:ml-64 mt-10 md:mt-4">
                <div class="grid-cols-2">
                    <footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
                        <div class="w-full max-w-screen-xl p-4 md:flex md:justify-between">
                        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="" class="hover:underline">Admin IDI Malang Raya</a>. All Rights Reserved.
                        </span>
                        <div class="justify-end -mr-16">
                        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                            <li>
                                <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                            </li>
                            <li>
                                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Contact</a>
                            </li>
                        </ul>
                        </div>
                        </div>
                    </footer>
                </div>
            </div>
    

</html>