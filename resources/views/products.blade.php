@extends('layouts.layout')
@section('title', 'Products - Chief Furnitures')
@section('content')
    @if(session('success'))
        <div class="my-5 bg-green-50 text-green-700 font-semibold rounded p-5 w-[60%] mx-[20%] border border-green-300">
            <span>
                Welcome, {{session('success')}}
            </span>
        </div>
    @endif
    <br>
    <main class="max-w-screen">
        <div class="w-full text-center my-20 ">
            <h2 class="text-2xl md:text-4xl lg:text-[50px] font-bold inline-block px-3">Products For You</h2>
            <div class="flex justify-center mx-auto mt-2">
                <span class="inline-block w-40 h-1 bg-amber-500 rounded-full"></span>
                <span class="inline-block w-5 h-1 mx-1 bg-amber-500 rounded-full"></span>
                <span class="inline-block w-1 h-1 bg-amber-500 rounded-full"></span>
            </div>

            <p class="max-w-2xl mx-auto mt-6 text-center text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error
                alias, adipisci rem similique, at omnis eligendi optio eos harum.
            </p>
        </div>
        @if(session('successCart'))
            <div class="w-full fixed left-0 top-0">
                <div id="popup"
                    class="transform bg-white text-slate-800 px-6 py-4 rounded-lg shadow-lg max-w-[450px] mx-auto flex items-center border border-slate-700 z-50 transition-all duration-300 opacity-0 translate-y-[-20px]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-7">
                        <path fill="green"
                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                    </svg>
                    <p class="tracking-wide ml-3">{{ session('successCart') }}</p>
                </div>
            </div>
        @endif
        <div class="w-full flex justify-end px-5">
            @auth
                <a href="{{route('cart', auth()->user()->id)}}"
                    class=" py-2 px-5 bg-slate-600 hover:bg-slate-700 hover:shadow rounded md:text-xl font-medium text-white relative">
                    <span
                        class="text-sm absolute top-[-10px] right-[-10px] bg-red-500 w-[22px] h-[22px] rounded-full flex items-center justify-center">{{ auth()->check() ? auth()->user()->carts()->count() : 0 }}</span>
                    <span class="mr-2">Cart</span>
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            @else
                <a href="{{route('login')}}"
                    class=" py-2 px-5 bg-slate-600 hover:bg-slate-700 hover:shadow rounded md:text-xl font-medium text-white">
                    <span class="mr-2">Cart</span>
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            @endauth
        </div>
        @if ($products->isEmpty())
            <div class="text-2xl font-medium tracking-wide text-center my-20">
                <img src="{{asset('assets/svg/undraw_blank-canvas_a6x5.svg')}}" class="w-60 mb-3 mx-auto" alt="">
                <p>Product Section is empty!</p>
            </div>
        @else
            <div
                class="products my-5 p-2 grid gap-10 grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 2xl:grid-cols-5 justify-center item-center mx-auto">
                @foreach ($products as $product)
                    <div class="product flex flex-col rounded overflow-hidden pb-5 w-full sm:w-[320px] mx-auto">
                        <a href="{{route('product.detail', $product->slug)}}" class="w-full">
                            <div class="w-full cursor-pointer rounded-xl overflow-hidden">
                                <img class="rounded-xl w-full h-[220px] object-cover hover:scale-105 transition-all ease-in-out duration-500"
                                    src="{{ asset('storage/' . $product->file) }}"
                                    alt="{{ $product->name . " - " . $product->id}}" />
                            </div>
                        </a>
                        <div class="flex justify-between">
                            <div class="">
                                <h4 class="mt-1 font-semibold tracking-wide text-lg">{{Str::limit($product->name, 25)}}</h4>
                                <div class="reviews flex items-center">
                                    <i class="fa-solid fa-star text-yellow-400"></i>
                                    <p class="text-gray-500 ml-2"> 4.5</p>
                                    <p class="text-gray-400 ml-2 text-xs">({{$product->Reviews->count()}} Reviews)</p>
                                </div>
                                <p class="text-gray-700 text-xl">Rs <span class="font-medium text-2xl">{{
                        number_format($product->price, 2) }}</span></p>
                            </div>
                            <div class="mr-1 mt-2">
                                <div class="like">
                                    <a href="javascript:void(0);" onclick="likeProduct({{ $product->id }})">
                                        <i class="fa-regular fa-heart bg-white hover:bg-slate-50 p-2 text-[25px] rounded-full text-red-300 cursor-pointer"
                                            id="like{{$product->id}}"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @auth
                            <a href="{{route('cart.add', $product->id)}}"
                                class="mt-2 py-1 px-2 rounded-md bg-slate-600 hover:bg-slate-700 text-white text-center w-[100%] ml-[0%]">
                                <i class="fa-solid fa-cart-plus mr-1"></i> Add to Cart
                            </a>
                        @else
                            <a href="{{route('login')}}"
                                class="mt-2 py-1 px-2 rounded-md bg-slate-600 hover:bg-slate-700 text-white text-center w-[100%] ml-[0%]">
                                <i class="fa-solid fa-cart-plus mr-1"></i> Add to Cart
                            </a>
                        @endauth
                    </div>
                @endforeach
            </div>
            <div class="pagination mx-32">
                {{$products->links()}}
            </div>
        @endif
    </main>
    <script>
        const likeButtons = document.querySelectorAll('.fa-heart');

        likeButtons.forEach(button => {
            button.addEventListener('click', function () {
                this.classList.toggle('fa-solid');
                this.classList.toggle('text-red-500');
                this.classList.toggle('text-red-300');
            });
        });
    </script>


@endsection