@extends('layouts.layout')
@section('title', $product->name . ' - Details')
@section('content')

    @if(session('success'))
        <div class="w-full fixed left-0 top-0">
            <div id="popup"
                class="transform bg-white text-slate-800 px-6 py-4 rounded-lg shadow-lg max-w-[450px] mx-auto flex items-center border border-slate-700 z-50 transition-all duration-300 opacity-0 translate-y-[-20px]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-7">
                    <path fill="green"
                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                </svg>
                <p class="tracking-wide ml-3">{{ session('success') }}</p>
            </div>
        </div>
    @endif
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
    <div class="w-full text-center my-20">
        <h2 class="text-2xl md:text-4xl lg:text-[50px] font-bold inline-block px-3">Product Details</h2>
        <div class="flex justify-center mx-auto mt-2">
            <span class="inline-block w-40 h-1 bg-amber-500 rounded-full"></span>
            <span class="inline-block w-5 h-1 mx-1 bg-amber-500 rounded-full"></span>
            <span class="inline-block w-1 h-1 bg-amber-500 rounded-full"></span>
        </div>

        <p class="max-w-2xl mx-auto mt-5 text-center text-gray-500">
            The Product Detail page offers detailed descriptions, features, and high-quality images of each product. It also
            includes customer reviews and ratings to provide insights from real users.
        </p>

    </div>

    <div class="absolute top-[130px] lg:top-[80px] left-0 w-full flex px-5 md:px-10 lg:px-20 mt-20">
        <a onclick="window.history.back()"
            class="py-2 px-3 hover:text-slate-700 rounded md:text-xl font-medium text-slate-900 cursor-pointer">
            <i class="fa-solid fa-chevron-left text-2xl"></i>
        </a>
    </div>

    <section class="py-5 md:py-10 antialiased my-10 md:my-20">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="shrink-0 w-[250px] md:w-[700px] lg:w-[500px] mx-auto">
                    <img class="w-full rounded md:h-[450px] lg:h-[350px] object-cover"
                        src="{{ asset('storage/' . $product->file) }}" alt="{{ $product->name }}" />
                </div>

                <div
                    class="relative bg-white/50 p-4 rounded sm:mt-8 lg:mt-0 mt-5 min-w-full flex flex-col justify-between h-full">
                    <div>
                        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl">{{ $product->name }}</h1>
                        <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl mt-4">Rs
                            {{ number_format($product->price, 2) }}
                        </p>

                        <div class="mt-6">
                            <p class="text-gray-500">{{ $product->description }}</p>
                        </div>
                    </div>
                    {{-- Like Button --}}
                    <div class="absolute top-3 right-4">
                        <div class="mr-1 mt-2">
                            <div class="like">
                                <a href="javascript:void(0);">
                                    <i class="fa-regular fa-heart bg-white hover:bg-slate-50 p-2 text-[25px] rounded-full text-red-300 cursor-pointer"
                                        id="like{{$product->id}}"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 w-full self-end">
                        @auth
                            <a href="{{route('cart.add', $product->id)}}"
                                class="mt-2 py-2 px-4 w-full rounded-md bg-slate-600 hover:bg-slate-700 text-white text-center block">
                                <i class="fa-solid fa-cart-plus mr-1"></i> Add to Cart
                            </a>
                        @else
                            <a href="{{route('login')}}"
                                class="mt-2 py-2 px-4 w-full rounded-md bg-slate-600 hover:bg-slate-700 text-white text-center block">
                                <i class="fa-solid fa-cart-plus mr-1"></i> Add to Cart
                            </a>
                        @endauth
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="max-w-screen-xl px-4 mx-auto mt-20">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl">Customer Reviews</h1>

            <div class="flex justify-center mx-auto mt-2">
                <span class="inline-block w-40 h-1 bg-amber-500 rounded-full"></span>
                <span class="inline-block w-5 h-1 mx-1 bg-amber-500 rounded-full"></span>
                <span class="inline-block w-1 h-1 bg-amber-500 rounded-full"></span>
            </div>

            <p class="max-w-2xl mx-auto mt-5 text-center text-gray-500">
                Customer reviews provide real feedback and ratings from buyers, helping you make informed decisions about
                our products. Trust their experiences to guide your purchase.
            </p>
        </div>
        <form action="{{ route('reviews.store', $product->id) }}" method="POST" class="mt-2">
            @csrf

            <textarea name="description"
                class="w-full mt-3 p-2 border rounded-lg resize-none outline-none focus:border-slate-400"
                placeholder="Write your review here..." rows="3" required></textarea>

            <div class="flex items-center space-x-2 my-3">
                <div id="star-rating" class="flex space-x-1 cursor-pointer">
                    @for ($i = 1; $i <= 5; $i++)
                        <svg class="star w-6 h-6 text-gray-400 hover:text-yellow-400 transition" data-value="{{ $i }}"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 .587l3.668 7.417L23.32 9.75l-5.836 5.792 1.384 8.064L12 19.354l-7.158 3.772 1.384-8.064L.68 9.75l7.652-1.746z" />
                        </svg>
                    @endfor
                </div>
                <input type="hidden" name="stars" id="stars-input">
            </div>
            @auth
                <button type="submit" class="mt-3 px-4 py-2 bg-amber-500 text-white font-medium rounded-lg hover:bg-amber-600">
                    Submit Review
                </button>
            @else
                <a href="{{route('login')}}"
                    class="mt-5 px-4 py-2 bg-amber-500 text-white font-medium rounded-lg hover:bg-amber-600">Login First</a>
            @endauth
        </form>
        <div class="flex flex-wrap items-center space-x-2 my-3">
            <p class="text-lg font-semibold">Average Rating:</p>
            <div class="flex items-center space-x-1">
                @php
                    $averageStars = $product->Reviews->avg('stars');
                @endphp

                @for ($i = 1; $i <= 5; $i++)
                    <svg class="w-3 h-3 {{ $averageStars ? 'text-yellow-400' : 'text-gray-400' }}"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 .587l3.668 7.417L23.32 9.75l-5.836 5.792 1.384 8.064L12 19.354l-7.158 3.772 1.384-8.064L.68 9.75l7.652-1.746z" />
                    </svg>
                @endfor
            </div>
            <p class="text-gray-500">({{ $product->Reviews->count() }} reviews)</p>
        </div>
        <div class="my-4 max-w-[800px]">
            @if($product->Reviews->isEmpty())
                <div class="text-2xl font-medium tracking-wide text-center mb-20">
                    <img src="{{asset('assets/svg/undraw_empty-cart_574u.svg')}}" class="w-60 mb-3 mx-auto" alt="">
                    <p>No reviews yet. Be the first to leave a review!</p>
                </div>
            @endif
            @foreach ($product->Reviews->sortByDesc('created_at') as $review)
                <div class="flex items-start space-x-4 sm:p-3 w-full my-5">
                    <img src="{{ asset('storage/' . $review->user->file) }}" alt="{{ $review->user->name }}"
                        class="min-w-8 max-w-8 h-8 md:max-w-14 md:min-w-14 md:h-14 object-cover rounded-full">
                    <div class="p-0">
                        <p class="font-medium text-xs md:text-sm">{{ $review->user->name }}
                            <span
                                class="ml-1 text-gray-400 text-xs">{{ $review->created_at->diffForHumans(null, false, true) }}</span>
                        </p>
                        <p class="text-gray-600 text-sm md:text-normal my-1">{{ $review->description }}</p>
                        <div class="flex items-center text-yellow-400 mb-1">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg class="w-3 h-3 {{ $i <= $review->stars ? 'text-yellow-400' : 'text-gray-300' }}"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 .587l3.668 7.417L23.32 9.75l-5.836 5.792 1.384 8.064L12 19.354l-7.158 3.772 1.384-8.064L.68 9.75l7.652-1.746z" />
                                </svg>
                            @endfor
                        </div>
                        @if(auth()->id() == $review->user_id)
                            <a href="{{route("reviews.destroy", $review->id)}}" class=" text-xs text-slate-400">Delete</a>
                        @endif

                    </div>
                </div>
                <hr class="mx-10">
            @endforeach

        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const stars = document.querySelectorAll('.star');
            const starsInput = document.getElementById('stars-input');
            stars.forEach((star, index) => {
                star.addEventListener('click', () => {
                    const value = star.dataset.value;
                    // Update hidden input
                    starsInput.value = value;
                    // Highlight stars up to the clicked one
                    stars.forEach((s, i) => {
                        s.classList.toggle('text-yellow-400', i < value);
                        s.classList.toggle('text-gray-400', i >= value);
                    });
                });
            });
        });
        const like = document.getElementById('like{{$product->id}}');
        like.addEventListener('click', () => {
            like.classList.toggle('fa-solid');
            like.classList.toggle('text-red-500');
            like.classList.toggle('text-red-300');
        });
    </script>

@endsection


{{--
<form action="{{ route('reviews.update', $review->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="number" name="stars" value="{{ $review->stars }}" min="1" max="5" required>
    <textarea name="description" required>{{ $review->description }}</textarea>
    <button type="submit">Update Review</button>
</form>

<form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Review</button>
</form> --}}