@extends('layouts.layout')
@section('title', 'Your Cart')
@section('content')
    @if(session('successCart'))
        <div class="w-full fixed left-0 top-0">
            <div id="popup"
                class="transform bg-white text-slate-800 px-6 py-4 rounded-lg shadow-lg max-w-[450px] mx-auto flex items-center border border-slate-700 z-50 transition-all duration-300 opacity-0 translate-y-[-20px]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-7">
                    <path fill="green"
                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                </svg>
                <p class="tracking-wide ml-3"><b>{{ session('successCart') }}</b></p>
            </div>
        </div>
    @endif
    <div class="w-full text-center my-20 ">
        <h2 class="text-2xl md:text-4xl lg:text-[50px] font-bold inline-block px-3">Your Cart</h2>
        <div class="flex justify-center mx-auto mt-3">
            <span class="inline-block w-40 h-1 bg-amber-500 rounded-full"></span>
            <span class="inline-block w-5 h-1 mx-1 bg-amber-500 rounded-full"></span>
            <span class="inline-block w-1 h-1 bg-amber-500 rounded-full"></span>
        </div>

        <p class="max-w-2xl mx-auto mt-6 text-center text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error alias,
            adipisci rem similique, at omnis eligendi optio eos harum.
        </p>
    </div>
    <div class="absolute top-[130px] lg:top-[80px] left-0 w-full flex px-5 md:px-10 lg:px-20 mt-20">
        <a onclick="window.history.back()" href="{{ route('products')}}"
            class="py-2 px-3 hover:text-slate-700 rounded md:text-xl font-medium text-slate-900 cursor-pointer">
            <i class="fa-solid fa-chevron-left text-2xl"></i>
        </a>
    </div>
    <section class="py-5 antialiased rounded-lg my-10 md:py-16">
        <div class="mx-auto max-w-screen-xl md:px-4 2xl:px-0">
            <div class="flex justify-center flex-col items-start mb-14">
                <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl">Shopping Cart</h2>
                <div class="flex justify-center mt-1">
                    <span class="inline-block w-36 h-1 bg-amber-500 rounded-full"></span>
                    <span class="inline-block w-4 h-1 mx-1 bg-amber-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 bg-amber-500 rounded-full"></span>
                </div>
            </div>


            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                    <div class="space-y-6">
                        @if ($carts->isEmpty())
                            <div class="text-2xl font-medium tracking-wide text-center mb-20">
                                <img src="{{asset('assets/svg/undraw_empty-cart_574u.svg')}}" class="w-60 mb-3 mx-auto" alt="">
                                <p>Your cart is empty!</p>
                            </div>
                        @else
                            @foreach ($carts as $cart)
                                <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm md:p-6"
                                    data-cart-id="{{ $cart->id }}">
                                    <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                        <a href="#" class="shrink-0 md:order-1 mx-auto md:mx-0">
                                            <img class="h-60 w-100 mx-auto md:h-32 md:w-32 object-cover rounded-lg"
                                                src="{{ asset('storage/' . $cart->product->file) }}"
                                                alt="{{ $cart->product->name }}" />
                                        </a>

                                        <label for="counter-input" class="sr-only">Choose quantity:</label>
                                        <div class="flex items-center justify-between flex-col md:order-3 md:justify-end">
                                            <div class="flex items-center">
                                                <!-- Decrement button -->
                                                <button type="button"
                                                    class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-md border border-indigo-600 bg-indigo-500 hover:bg-indigo-500/90 focus:outline-none mr-3"
                                                    data-action="decrement">
                                                    <svg class="h-2.5 w-2.5 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M1 1h16" />
                                                    </svg>
                                                </button>
                                                <input type="number" id="counter-input-{{ $cart->id }}"
                                                    class="w-10 shrink-0 border-0 bg-transparent text-center text-lg font-medium text-gray-900 focus:outline-none focus:ring-0"
                                                    value="{{ $cart->quantity }}" min="1" required readonly />
                                                <button type="button"
                                                    class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-md border border-indigo-600 bg-indigo-500 hover:bg-indigo-500/90 focus:outline-none "
                                                    data-action="increment">
                                                    <svg class="h-2.5 w-2.5 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M9 1v16M1 9h16" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="text-center mt-5 md:order-4 md:w-32">
                                                <p class="text-base font-bold text-gray-900 product-price">Rs
                                                    {{ number_format($cart->product->price * $cart->quantity, 1) }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                            <a href="{{route('product.detail', $cart->product->slug)}}"
                                                class="text-lg font-semibold text-gray-900 hover:underline">{{ $cart->product->name }}</a>
                                            <p class="text-base text-gray-900 truncate">{{ $cart->product->description }}</p>
                                            <div class="flex items-center gap-4 justify-between flex-col md:flex-row">
                                                <p class="text-base font-semibold text-slate-400 product-price">Price: <span
                                                        class="text-slate-600">Rs
                                                        {{ number_format($cart->product->price) }}</span>
                                                </p>
                                                <form action="{{ route('cart.remove', $cart->id) }}" method="POST" class="mb-0">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="inline-flex items-center text-sm font-medium text-red-600 hover:underline">
                                                        <svg class="me-1.5 h-5 w-5" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                            viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M6 18 17.94 6M18 18 6.06 6" />
                                                        </svg>
                                                        Remove from Cart
                                                    </button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        @endif
                    </div>

                </div>

                <div class="mx-auto mt-6 max-w-[1300px] flex-1 space-y-6 lg:mt-0 lg:w-full">
                    <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-smsm:p-6">
                        <p class="text-xl font-semibold text-gray-900">Order summary</p>

                        <div class="space-y-4">
                            <div class="space-y-2">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500">Original Price</dt>
                                    <dd class="text-base font-medium text-gray-900 order-original">
                                        Rs{{ number_format($totalPrice, 2) }}</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500">Savings <span
                                            class="text-slate-300 text-xs">(5%)</span></dt>
                                    <dd class="text-base font-medium text-green-600 order-savings">Rs
                                        {{ number_format($totalPrice * 0.05, 2) }}
                                    </dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500">GST <span
                                            class="text-slate-300 text-xs">(18%)</span></dt>
                                    <dd class="text-base font-medium text-gray-900 order-gst">Rs
                                        {{ number_format($totalPrice * 0.18, 2) }}
                                    </dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2">
                                    <dt class="text-base font-bold text-gray-900">Total</dt>
                                    <dd class="text-base font-bold text-gray-900 order-total">
                                        Rs
                                        {{ number_format(($totalPrice + ($totalPrice * 0.18) - ($totalPrice * 0.10)), 2) }}
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <a href="javascript:void(0)"
                            class="flex w-full items-center justify-center rounded-lg bg-indigo-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-indigo-500/90 focus:outline-none">Proceed
                            to Checkout</a>

                        <div class="flex items-center justify-center gap-2">
                            <span class="text-sm font-normal text-gray-500"> or </span>
                            <a href="#" onclick="window.history.back()" title=""
                                class="inline-flex items-center gap-2 text-sm font-medium text-indigo-500 underline hover:no-underline ">
                                Continue Shopping
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm sm:p-6">
                        <form class="space-y-4">
                            <div>
                                <label for="voucher" class="mb-2 block text-sm font-medium text-gray-900"> Do you have a
                                    voucher or gift card? </label>
                                <input type="text" id="voucher"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-amber-500 focus:ring-amber-500"
                                    placeholder="" required />
                            </div>
                            <button type="submit"
                                class="flex w-full items-center justify-center rounded-lg bg-amber-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-amber-500/90 focus:outline-none ">Apply
                                Code</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('[data-action="increment"], [data-action="decrement"]').forEach(button => {
            button.addEventListener('click', function () {
                const action = this.getAttribute('data-action');
                const cartItemDiv = this.closest('[data-cart-id]');
                const cartId = cartItemDiv.dataset.cartId;
                const quantityInput = document.getElementById(`counter-input-${cartId}`);

                let currentValue = parseInt(quantityInput.value);

                if (action === 'increment') {
                    currentValue += 1;
                } else if (action === 'decrement' && currentValue > 1) {
                    currentValue -= 1;
                }

                quantityInput.value = currentValue; // Update input value

                fetch(`/cart/update/${cartId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        quantity: currentValue // Send as integer
                    })
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            // Update product price display
                            const productPriceElement = cartItemDiv.querySelector('.product-price');
                            if (productPriceElement) {
                                productPriceElement.textContent = `Rs ${data.productPrice.toFixed(2)}`;
                            }

                            // Update order summary
                            document.querySelector('.order-original').textContent = `Rs ${data.totalPrice.toFixed(2)}`;
                            document.querySelector('.order-savings').textContent = `Rs ${(data.totalPrice * 0.05).toFixed(2)}`;
                            document.querySelector('.order-gst').textContent = `Rs ${(data.totalPrice * 0.18).toFixed(2)}`;
                            document.querySelector('.order-total').textContent = `Rs ${(data.totalPrice * 1.13).toFixed(2)}`; // 5% discount + 18% GST
                        } else {
                            alert('Failed to update cart: ' + (data.message || 'Unknown error'));
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Error updating cart. Check console for details.');
                    });
            });
        });
    });
</script>