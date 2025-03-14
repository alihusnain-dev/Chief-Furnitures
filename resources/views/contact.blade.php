@extends('layouts.layout')
@section('title', 'Contact - Chief Furnitures')
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
            <h2 class="text-2xl md:text-4xl lg:text-[50px] font-bold inline-block px-3">Contact us</h2>
            <div class="flex justify-center mx-auto mt-3">
                <span class="inline-block w-40 h-1 bg-amber-500 rounded-full"></span>
                <span class="inline-block w-5 h-1 mx-1 bg-amber-500 rounded-full"></span>
                <span class="inline-block w-1 h-1 bg-amber-500 rounded-full"></span>
            </div>

            <p class="max-w-2xl mx-auto mt-6 text-center text-slate-500">
                We love to hear from you. Chat to our friendly team.
            </p>
        </div>
        @if(session('success'))
            <div class="w-full fixed left-0 top-0">
                <div id="popup" class="transform bg-white text-slate-800 px-6 py-4 rounded-lg shadow-lg max-w-[450px] mx-auto flex items-center border border-slate-700 z-50 transition-all duration-300 opacity-0 translate-y-[-20px]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-7">
                        <path fill="green" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                    </svg>
                    <p class="tracking-wide ml-3">{{ session('success') }}</p>
                </div>
            </div>
        @endif
        


        <section class="">
            <div class="container px-6 py-12 mx-auto">
                <img class="object-cover w-full h-64 rounded-lg lg:h-96" src="https://images.unsplash.com/photo-1626310615151-016a96a2c39b?q=80&w=2074&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-3 sm:grid-cols-2 ">
                    <div class="p-4 rounded-lg bg-white md:p-6">
                        <span class="inline-block p-3 text-amber-500 rounded-lg bg-amber-100/80">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </span>
        
                        <h2 class="mt-4 text-base font-medium text-slate-800">Chat to Customer Services</h2>
                        <p class="mt-2 text-sm text-slate-500">Speak to our friendly team.</p>
                        <a href="mailto:chieffurnitures1984@gmail.com" class="mt-2 text-sm text-indigo-500">chieffurnitures1984@gmail.com</a>
                    </div>
        
                    <div class="p-4 rounded-lg bg-white md:p-6">
                        <span class="inline-block p-3 text-amber-500 rounded-lg bg-amber-100/80">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </span>
                        
                        <h2 class="mt-4 text-base font-medium text-slate-800">Visit us</h2>
                        <p class="mt-2 text-sm text-slate-500">Visit our Office</p>
                        <a href="javascript:void(0)" class="mt-2 text-sm text-indigo-500">Plot-1, Main Bazar, Kot Khawaja Saeed, lhr</a>
                    </div>
        
                    <div class="p-4 rounded-lg bg-white md:p-6">
                        <span class="inline-block p-3 text-amber-500 rounded-lg bg-amber-100/80">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </span>
                        
                        <h2 class="mt-4 text-base font-medium text-slate-800">Call us</h2>
                        <p class="mt-2 text-sm text-slate-500">Mon-Sat from 8am to 10pm.</p>
                        <a href="tel:+923004479976" class="mt-2 text-sm text-indigo-500">+92 (300) 447-9976</a>
                    </div>
                </div>
            </div>
        </section>

        

        <section>
            <div class="container px-6 py-10 mx-auto mt-5">
                <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl">Connect with us</h1>
    
                <div class="flex justify-center mx-auto mt-2">
                    <span class="inline-block w-40 h-1 bg-amber-500 rounded-full"></span>
                    <span class="inline-block w-5 h-1 mx-1 bg-amber-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 bg-amber-500 rounded-full"></span>
                </div>
    
                <p class="max-w-2xl mx-auto mt-5 text-center text-gray-500">
                    Contact us for more info and If you want to ask anything you can easily ask us by drop you message in below section
                </p>
            </div>
            <div class="container px-6 py-12 mx-auto">
                <div class="lg:flex lg:items-center lg:-mx-6">
                    <div class="lg:w-1/2 lg:mx-6">
                        <h1 class="text-2xl font-semibold text-slate-800 capitalize lg:text-3xl">
                            Contact us for <br> more info
                        </h1>
        
                        <div class="mt-6 space-y-8 md:mt-8">
                            <p class="flex items-start -mx-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
        
                                <span class="mx-2 text-slate-700 truncate w-72">
                                    Milad Chowk, Mehmood Booti, Ring Road, Lhr.
                                </span>
                            </p>
        
                            <p class="flex items-start -mx-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="mx-2 text-slate-700 truncate w-72">+92 (300) 4479976</span>
                            </p>
                            
                            <p class="flex items-start -mx-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="mx-2 text-slate-700 truncate w-72">+92 (334) 4949160</span>
                            </p>
        
                            <p class="flex items-start -mx-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
        
                                <span class="mx-2 text-slate-700 truncate w-72">chieffurnitures1984@gmail.com</span>
                            </p>
                        </div>
        
                        <div class="mt-6 w-80 md:mt-8">
                            <h3 class="text-slate-600">Follow us</h3>
        
                            <div class="flex mt-4 -mx-1.5 ">
                                <a class="mx-1.5 text-slate-400 transition-colors duration-300 transform hover:text-indigo-500" href="https://x.com/chieffurnitures">
                                    <svg class="w-10 h-10 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.6668 6.67334C18.0002 7.00001 17.3468 7.13268 16.6668 7.33334C15.9195 6.49001 14.8115 6.44334 13.7468 6.84201C12.6822 7.24068 11.9848 8.21534 12.0002 9.33334V10C9.83683 10.0553 7.91016 9.07001 6.66683 7.33334C6.66683 7.33334 3.87883 12.2887 9.3335 14.6667C8.0855 15.498 6.84083 16.0587 5.3335 16C7.53883 17.202 9.94216 17.6153 12.0228 17.0113C14.4095 16.318 16.3708 14.5293 17.1235 11.85C17.348 11.0351 17.4595 10.1932 17.4548 9.34801C17.4535 9.18201 18.4615 7.50001 18.6668 6.67268V6.67334Z" />
                                    </svg>
                                </a>
        
                                <a class="mx-1.5 text-slate-400 transition-colors duration-300 transform hover:text-indigo-500" href="#">
                                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.2 8.80005C16.4731 8.80005 17.694 9.30576 18.5941 10.2059C19.4943 11.1061 20 12.327 20 13.6V19.2H16.8V13.6C16.8 13.1757 16.6315 12.7687 16.3314 12.4687C16.0313 12.1686 15.6244 12 15.2 12C14.7757 12 14.3687 12.1686 14.0687 12.4687C13.7686 12.7687 13.6 13.1757 13.6 13.6V19.2H10.4V13.6C10.4 12.327 10.9057 11.1061 11.8059 10.2059C12.7061 9.30576 13.927 8.80005 15.2 8.80005Z" fill="currentColor" />
                                        <path d="M7.2 9.6001H4V19.2001H7.2V9.6001Z" fill="currentColor" />
                                        <path d="M5.6 7.2C6.48366 7.2 7.2 6.48366 7.2 5.6C7.2 4.71634 6.48366 4 5.6 4C4.71634 4 4 4.71634 4 5.6C4 6.48366 4.71634 7.2 5.6 7.2Z" fill="currentColor" />
                                    </svg>
                                </a>
        
                                <a class="mx-1.5 text-slate-400 transition-colors duration-300 transform hover:text-indigo-500" href="https://www.facebook.com/ChiefFurnitures/">
                                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 10.2222V13.7778H9.66667V20H13.2222V13.7778H15.8889L16.7778 10.2222H13.2222V8.44444C13.2222 8.2087 13.3159 7.9826 13.4826 7.81591C13.6493 7.64921 13.8754 7.55556 14.1111 7.55556H16.7778V4H14.1111C12.9324 4 11.8019 4.46825 10.9684 5.30175C10.1349 6.13524 9.66667 7.2657 9.66667 8.44444V10.2222H7Z" fill="currentColor" />
                                    </svg>
                                </a>
        
                                <a class="mx-1.5 text-slate-400 transition-colors duration-300 transform hover:text-indigo-500" href="https://www.instagram.com/chieffurnitures">
                                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.9294 7.72275C9.65868 7.72275 7.82715 9.55428 7.82715 11.825C7.82715 14.0956 9.65868 15.9271 11.9294 15.9271C14.2 15.9271 16.0316 14.0956 16.0316 11.825C16.0316 9.55428 14.2 7.72275 11.9294 7.72275ZM11.9294 14.4919C10.462 14.4919 9.26239 13.2959 9.26239 11.825C9.26239 10.354 10.4584 9.15799 11.9294 9.15799C13.4003 9.15799 14.5963 10.354 14.5963 11.825C14.5963 13.2959 13.3967 14.4919 11.9294 14.4919ZM17.1562 7.55495C17.1562 8.08692 16.7277 8.51178 16.1994 8.51178C15.6674 8.51178 15.2425 8.08335 15.2425 7.55495C15.2425 7.02656 15.671 6.59813 16.1994 6.59813C16.7277 6.59813 17.1562 7.02656 17.1562 7.55495ZM19.8731 8.52606C19.8124 7.24434 19.5197 6.10901 18.5807 5.17361C17.6453 4.23821 16.51 3.94545 15.2282 3.88118C13.9073 3.80621 9.94787 3.80621 8.62689 3.88118C7.34874 3.94188 6.21341 4.23464 5.27444 5.17004C4.33547 6.10544 4.04628 7.24077 3.98201 8.52249C3.90704 9.84347 3.90704 13.8029 3.98201 15.1238C4.04271 16.4056 4.33547 17.5409 5.27444 18.4763C6.21341 19.4117 7.34517 19.7045 8.62689 19.7687C9.94787 19.8437 13.9073 19.8437 15.2282 19.7687C16.51 19.708 17.6453 19.4153 18.5807 18.4763C19.5161 17.5409 19.8089 16.4056 19.8731 15.1238C19.9481 13.8029 19.9481 9.84704 19.8731 8.52606ZM18.1665 16.5412C17.8881 17.241 17.349 17.7801 16.6456 18.0621C15.5924 18.4799 13.0932 18.3835 11.9294 18.3835C10.7655 18.3835 8.26272 18.4763 7.21307 18.0621C6.51331 17.7837 5.9742 17.2446 5.69215 16.5412C5.27444 15.488 5.37083 12.9888 5.37083 11.825C5.37083 10.6611 5.27801 8.15832 5.69215 7.10867C5.97063 6.40891 6.50974 5.8698 7.21307 5.58775C8.26629 5.17004 10.7655 5.26643 11.9294 5.26643C13.0932 5.26643 15.596 5.17361 16.6456 5.58775C17.3454 5.86623 17.8845 6.40534 18.1665 7.10867C18.5843 8.16189 18.4879 10.6611 18.4879 11.825C18.4879 12.9888 18.5843 15.4916 18.1665 16.5412Z" fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
        
                    <div class="mt-8 lg:w-1/2 lg:mx-6">
                        <div
                            class="w-full px-8 py-10 mx-auto overflow-hidden bg-white rounded-lg shadow-2x lg:max-w-xl shadow-slate-300/50">
                            <h1 class="text-lg font-medium text-slate-700">What do you want to ask</h1>
        
                            <form class="mt-6">
                                <div class="flex-1">
                                    <label class="block mb-2 text-sm text-slate-600">Full Name</label>
                                    <input type="text" placeholder="Muhammad Ali" class="block w-full px-5 py-3 mt-2 text-slate-700 placeholder-slate-300 bg-white border border-slate-200 rounded-md  focus:outline-none focus:border-slate-400" />
                                </div>
        
                                <div class="flex-1 mt-6">
                                    <label class="block mb-2 text-sm text-slate-600">Email address</label>
                                    <input type="email" placeholder="muhammadali@example.com" class="block w-full px-5 py-3 mt-2 text-slate-700 placeholder-slate-300 bg-white border border-slate-200 rounded-md focus:outline-none focus:border-slate-400" />
                                </div>
        
                                <div class="w-full mt-6">
                                    <label class="block mb-2 text-sm text-slate-600">Message</label>
                                    <textarea class="block resize-none w-full h-32 px-5 py-3 mt-2 text-slate-700 placeholder-slate-300 bg-white border border-slate-200 rounded-md md:h-48 focus:outline-none focus:border-slate-400" placeholder="Message"></textarea>
                                </div>
        
                                <button class="w-full px-6 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-amber-500 rounded-md hover:bg-amber-500/80  focus:outline-none">
                                    get in touch
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        




        <section>
            <div class="container px-6 py-12 mx-auto">
            </div>
        </section>
    </main>
@endsection
