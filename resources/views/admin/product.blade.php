@extends('admin.admin')
@section('title', 'Admin - Product')
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

        <a href="{{route('admin.product')}}" class="dark:text-gray-800 text-gray-200 hover:underline">
            Products
        </a>
    </div>
    <div class="p-5">
        <h2 class="font-semibold text-2xl">All Products</h2>
        <div class="my-10 grid grid-cols-1 sm:grid-cols-3 md-grid-cols-4 lg:grid-cols-5 xl-grid-cols-6">
            @forEach($products as $product)
                <div class="m-w-[290px] flex flex-col mx-auto my-5 bg-white/30 rounded p-3">
                    <div class="w-[270px] h-[180px] overflow-hidden">
                        <img src="{{ asset('storage/' . $product->file) }}" class="w-full h-full object-cover" alt=". . . Loading...">
                    </div>
                    <p class="font-medium text-lg">{{$product->name}}</p>
                    <p class=" text-lg">{{$product->slug}}</p>
                    <p class="font-medium text-xl">Rs: {{$product->price}}</p>
                    <div class="flex justify-between mt-1">
                        <a href="javascript:void(0)" class="py-1 px-2 rounded bg-green-500 text-white">Update</a>
                        <a href="javascript:void(0)" class="py-1 px-2 rounded bg-red-500 text-white">Drop</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection