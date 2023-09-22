@extends('Admin.Layouts.master')
@section('content')
            <div class="p-4 sm:ml-64">
                <div class="p-4  border-gray-200 border-dashed rounded-lg dark:border-gray-700 md:mt-14 mt-14 overflow-x-auto">
                    <div class="grid grid-cols-0 gap-4 mb-4">
                        <div class="max-w-full overflow-auto h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h1 class="text-xl font-bold text-gray-800">Master Data Anggota</h1>
                            <div class="mt-2 flex items-start gap-2 justify-start mb-4">
                               <a>
                                    <div>
                                    <p class="text-sm justify-center font-semibold text-gray-800 hover:text-primary-600 md:text-sm">
                                        Permintaan Persetujuan
                                    </p>
                                </div>
                               </a>
                            </div>

                            <div class="justify-start mt-4">
                                <div class="justify-start py-2">
                                    <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                                        <ul class="flex flex-wrap -mb-px">
                                            <a>
                                                <li class="mr-2">
                                                    <a href="/anggota" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg active dark:text-blue-500 dark:border-blue-500">
                                                        Semua Anggota
                                                    </a>
                                                </li>
                                            </a>  
                                            <a>
                                                <li class="mr-2">
                                                    <a href="#" class="inline-block p-4 border-b-2 text-primary-700 border-primary-700 rounded-t-lg hover:text-primary-800 hover:border-primary-800  dark:hover:text-gray-300">
                                                        Meminta Persetujuan
                                                    </a>
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            
                                <div class="relative overflow-x-auto border sm:rounded-lg mt-2">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                         
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    Nama Lengkap
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    NIK
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    NPA IDI
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    NO TELEPON
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Email
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Status Role
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            @forelse ($user as $users)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                <td class="px-6 py-4 font-medium text-gray-800">
                                                    {{ $users->nama_lengkap }}
                                                </td>
                                                <td class="px-6 py-4 font-regular text-gray-700">
                                                    {{ $users->nik }}
                                                </td>
                                                <td class="px-6 py-4 font-regular text-gray-700 dark:text-white">
                                                    {{ $users->npaidi }}
                                                </td>
                                                <td class="px-6 py-4 font-regular text-gray-700 dark:text-white">
                                                    {{ $users->no_telepon }}
                                                </td>
                                                <td class="px-6 py-4 font-regular text-gray-700 dark:text-white">
                                                    {{ $users->email }}
                                                </td>
                                                <td class="px-6 py-4 font-regular text-gray-700 dark:text-white">
                                                    {{ $users->role }}
                                                </td>
                                                <td class="px-6 py-4 flex">
                                                    <form action="{{ route('persetujuan.destroy', $users->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit"
                                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 show_confirm" data-toggle="tooltip" title='Delete'>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                            viewBox="0 0 11 13" fill="none">
                                                            <path
                                                                d="M9.64134 4.90186C9.64134 4.90186 9.32508 8.82457 9.14161 10.4769C9.05425 11.2661 8.56675 11.7286 7.76823 11.7432C6.24865 11.7705 4.72732 11.7723 3.20832 11.7403C2.44009 11.7245 1.96074 11.2562 1.87513 10.481C1.69049 8.81409 1.37598 4.90186 1.37598 4.90186"
                                                                stroke="white" stroke-width="1.04839" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M10.4473 3.02144H0.570312" stroke="white" stroke-width="1.04839"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M8.54438 3.02138C8.08716 3.02138 7.69343 2.69813 7.60374 2.25023L7.46221 1.54199C7.37484 1.21524 7.07896 0.989258 6.74173 0.989258H4.27628C3.93904 0.989258 3.64317 1.21524 3.5558 1.54199L3.41427 2.25023C3.32457 2.69813 2.93085 3.02138 2.47363 3.02138"
                                                                stroke="white" stroke-width="1.04839" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="sr-only">Icon description</span>
                                                    </button>
                                                </form>

                                                    <a href="{{ route('persetujuan.edit', $users->id) }}">
                                                        <button type="button" class="text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 42 42" fill="none">
                                                        <path d="M15.7499 35.735L4.88245 24.8675L9.83495 19.915L15.7499 25.8475L33.0399 8.53998L37.9924 13.4925L15.7499 35.735Z" fill="white"/>
                                                        </svg>
                                                            <span class="sr-only">Icon description</span>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td class="text-center text-mute" colspan="8">
                                                    <div class="mx-auto max-w-sm justify-center mt-10">
                                                    <img class="w-full" src="/Assets/emptystate.png" class="justify-center items-center" alt="user photo" />
                                                    <div class="py-4">
                                                        <p class="text-center font-medium text-lg">Tidak ada <strong class="text-primary-600">permintaan masuk</strong> untuk saat ini, mungkin lain kali</p>
                                                    </div>
                                                </div>
                                                </td>
                                                
                                            </tr>
                                         @endforelse
                                        </tbody>
                                        
                                    </table>                            
                                </div>

                            </div>

                        </div>



                    </div>
                </div>
            </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
                <script type="text/javascript">
                    $('.show_confirm').click(function(event) {
                    var form =  $(this).closest("form");
                    var name = $(this).data("name");
                    event.preventDefault();
                    swal({
                        title: `Apakah anda yakin ingin menhhapus data ini?`,
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                        form.submit();
                        }
                    });
                });
                </script>
@endsection
