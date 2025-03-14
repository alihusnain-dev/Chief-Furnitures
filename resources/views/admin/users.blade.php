@extends('admin.admin')
@section('title', 'Admin - Users')
@section('content')
    <div class="flex items-center py-4 overflow-x-auto whitespace-nowrap ">
        <a href="{{route('admin.dashboard')}}" class="dark:text-gray-600 text-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">dark:
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
        </a>

        <span class="mx-5 text-gray-600 dark:text-gray-900">
            /
        </span>

        <a href="javascript:void(0)" class="dark:text-gray-600 text-gray-200 hover:underline">
            Admin
        </a>

        <span class="mx-5 text-gray-500 dark:text-gray-900">
            /
        </span>

        <a href="{{route('admin.dashboard')}}" class="dark:text-gray-600 text-gray-200 hover:underline">
            Dashboard
        </a>

        <span class="mx-5 text-gray-500 dark:text-gray-900">
            /
        </span>

        <a href="{{route('admin.users')}}" class="dark:text-gray-800 text-gray-200 hover:underline">
            Users
        </a>
    </div>
    <div class="p-5">
        <h2 class="font-semibold text-2xl">All Customers </h2>
        <p class="text-gray-500">Total Users: <span class="text-red-500">{{$users->count()}}</span></p>
        <div class="my-10">
            <div class="flex flex-col mt-6">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr class="">
                                        <th scope="col" class="py-3.5 px-4 text-md text-left rtl:text-right text-gray-500 font-medium">
                                            <div class="flex items-center gap-x-3">
                                                {{-- <input type="checkbox" class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700"> --}}
                                                <span>Name</span>
                                            </div>
                                        </th>  
                                        <th scope="col" class="py-3.5 px-4 text-md text-left rtl:text-right text-gray-500 font-medium">
                                            <div class="flex items-center gap-x-3">
                                                <span>Email</span>
                                            </div>
                                        </th>  
                                        <th scope="col" class="py-3.5 px-4 text-md text-left rtl:text-right text-gray-500 font-medium">
                                            <div class="flex items-center gap-x-3">
                                                <span>Mobile</span>
                                            </div>
                                        </th>  
                                        <th scope="col" class="py-3.5 px-4 text-md text-left rtl:text-right text-gray-500 font-medium">
                                            <div class="flex items-center gap-x-3">
                                                <span>City</span>
                                            </div>
                                        </th>  
                                        <th scope="col" class="py-3.5 px-4 text-md text-left rtl:text-right text-gray-500 font-medium">
                                            <div class="flex items-center gap-x-3">
                                                <span>Status</span>
                                            </div>
                                        </th>  
                                        <th scope="col" class="py-3.5 px-4 text-md text-left rtl:text-right text-gray-500 font-medium">
                                            <div class="flex items-center gap-x-3">
                                                <span>Reviews</span>
                                            </div>
                                        </th>  
                                        <th scope="col" class="py-3.5 px-4 text-md text-left rtl:text-right text-gray-500 font-medium">
                                            <div class="flex items-center gap-x-3">
                                                <span>Action</span>
                                            </div>
                                        </th>  
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @forEach($users as $user)
                                        <tr>
                                            <td class="px-4 py-4 text-sm font-mediumwhitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-3">
                                                    <div class="flex items-center gap-x-2">
                                                        <img class="object-cover w-12 h-12 rounded" src="{{asset('storage/'. $user->file)}}" alt="">
                                                        <div>
                                                            <h2 class="font-medium text-gray-800">{{$user->name}}</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm font-mediumwhitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-3"> 
                                                    <div class="flex items-center gap-x-2">
                                                        <div>
                                                            <p class=" text-gray-800 tracking-wide">{{$user->email}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm font-mediumwhitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-3"> 
                                                    <div class="flex items-center gap-x-2">
                                                        <div>
                                                            <p class=" text-gray-800">{{$user->phone}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm font-mediumwhitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-3"> 
                                                    <div class="flex items-center gap-x-2">
                                                        <div>
                                                            <p class=" text-gray-800">{{$user->city}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-2 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-emerald-100/60">
                                                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
            
                                                    <h2 class="text-sm font-normal text-emerald-500">Active</h2>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm font-mediumwhitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-3"> 
                                                    <div class="flex items-center gap-x-2">
                                                        <div>
                                                            <p class=" text-gray-800">{{$user->Reviews->count()}} - Reviews</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div class="flex items-center gap-x-6">
                                                    <button class="hover:text-red-400 transition-colors duration-200  text-red-500 focus:outline-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                        </svg>
                                                    </button>
            
                                                    <button class="hover:text-amber-400 transition-colors duration-200  text-amber-500 focus:outline-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection