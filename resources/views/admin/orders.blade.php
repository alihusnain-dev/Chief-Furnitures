@extends('admin.admin')
@section('title', 'Admin - Orders')
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

        <a href="{{route('admin.orders')}}" class="dark:text-gray-800 text-gray-200 hover:underline">
            Orders
        </a>
    </div>
    <div class="p-5">
        <h2 class="font-semibold text-2xl">All Orders </h2>
        <p class="text-gray-500">Total Orders: <span class="text-red-500">0</span></p>
        <div class="my-10">

        </div>
    </div>
@endsection