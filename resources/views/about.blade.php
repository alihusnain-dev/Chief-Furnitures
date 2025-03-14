@extends('layouts.layout')
@section('title', 'About - Chief Furnitures')
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
            <h2 class="text-2xl md:text-4xl lg:text-[50px] font-bold inline-block px-3">About us</h2>
            <div class="flex justify-center mx-auto mt-3">
                <span class="inline-block w-40 h-1 bg-amber-500 rounded-full"></span>
                <span class="inline-block w-5 h-1 mx-1 bg-amber-500 rounded-full"></span>
                <span class="inline-block w-1 h-1 bg-amber-500 rounded-full"></span>
            </div>

            <p class="max-w-2xl mx-auto mt-6 text-center text-slate-500">
                Thank you for choosing Chief Furnitures®. Where Fine Wood and Steel craftsmanship meet your vision
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
                <img class="object-cover w-full h-64 rounded-lg lg:h-96" src="https://images.unsplash.com/photo-1647426994723-ab685e4b8c77?q=80&w=2123&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
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
                        <p class="mt-2 text-sm text-slate-500">Mon-Fri from 8am to 5pm.</p>
                        <a href="tel:+923004479976" class="mt-2 text-sm text-indigo-500">+92 (300) 447-9976</a>
                    </div>
                </div>
            </div>
        </section>


        <section>

            <div class="container px-6 py-10 mx-auto">
            <h1 class="text-2xl font-semibold text-gray-800 lg:text-3xl">FAQ's</h1>

            <hr class="my-6 border-gray-200">

            <div>
                <!-- FAQ 1 -->
                <div>
                    <button class="flex items-center focus:outline-none w-full" onclick="toggleAnswer(1)">
                        <svg id="icon-1" class="flex-shrink-0 w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path id="icon-path-1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        <h1 class="mx-4 text-lg text-gray-700 lg:text-xl">What services do you offer at Chief Furnitures?</h1>
                    </button>
                    <div id="answer-1" class="max-w-3xl mt-3 px-4 text-gray-500 hidden">
                        <ul>
                            <li><strong>Manufacturing:</strong> Custom-made furniture crafted to your specifications.</li>
                            <li><strong>Re-New:</strong> Revitalize your old furniture to look and feel brand new.</li>
                            <li><strong>Polish & Paint:</strong> Expert finishing services to enhance the appearance and longevity of your furniture.</li>
                            <li><strong>Interior Designing:</strong> Professional design services to create a cohesive and stylish interior space.</li>
                            <li><strong>Redressing:</strong> Refreshing the look of your furniture with new fabrics or finishes.</li>
                            <li><strong>Repairing:</strong> Fixing and restoring damaged furniture to its original condition.</li>
                        </ul>
                    </div>
                </div>

                <hr class="my-8 border-gray-200">

                <!-- FAQ 2 -->
                <div>
                    <button class="flex items-center focus:outline-none w-full" onclick="toggleAnswer(2)">
                        <svg id="icon-2" class="flex-shrink-0 w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path id="icon-path-2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        <h1 class="mx-4 text-lg text-gray-700 lg:text-xl">How can I request a custom furniture piece?</h1>
                    </button>
                    <div id="answer-2" class="max-w-3xl mt-3 px-4 text-gray-500 hidden">
                        <p>To request a custom piece, you can either fill out the contact form on our website or call us directly. Please provide details such as dimensions, materials, and any design preferences you have. Our team will get in touch with you to discuss your project and provide a quote.</p>
                    </div>
                </div>

                <hr class="my-8 border-gray-200">

                <!-- FAQ 3 -->
                <div>
                    <button class="flex items-center focus:outline-none w-full" onclick="toggleAnswer(3)">
                        <svg id="icon-3" class="flex-shrink-0 w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path id="icon-path-3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        <h1 class="mx-4 text-lg text-gray-700 lg:text-xl">What materials do you use for manufacturing?</h1>
                    </button>
                    <div id="answer-3" class="max-w-3xl mt-3 px-4 text-gray-500 hidden">
                        <p>We use a variety of high-quality materials including solid wood, metal, and premium upholstery fabrics. If you have specific material preferences or requirements, let us know, and we’ll do our best to accommodate them.</p>
                    </div>
                </div>

                <hr class="my-8 border-gray-200">

                <!-- FAQ 4 -->
                <div>
                    <button class="flex items-center focus:outline-none w-full" onclick="toggleAnswer(4)">
                        <svg id="icon-4" class="flex-shrink-0 w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path id="icon-path-4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        <h1 class="mx-4 text-lg text-gray-700 lg:text-xl">How long does it take to complete a custom furniture order?</h1>
                    </button>
                    <div id="answer-4" class="max-w-3xl mt-3 px-4 text-gray-500 hidden">
                        <p>The timeline for custom orders varies based on the complexity of the design and our current workload. On average, it takes between 4 to 8 weeks. We will provide a more accurate timeframe when you place your order.</p>
                    </div>
                </div>

                <hr class="my-8 border-gray-200">

                <!-- FAQ 5 -->
                <div>
                    <button class="flex items-center focus:outline-none w-full" onclick="toggleAnswer(5)">
                        <svg id="icon-5" class="flex-shrink-0 w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path id="icon-path-5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        <h1 class="mx-4 text-lg text-gray-700 lg:text-xl">Can you help with furniture design ideas?</h1>
                    </button>
                    <div id="answer-5" class="max-w-3xl mt-3 px-4 text-gray-500 hidden">
                        <p>Absolutely! Our interior designers are here to help you with design ideas and suggestions. Whether you’re looking for inspiration or need a complete redesign, we can provide professional guidance to match your vision and style.</p>
                    </div>
                </div>

                <hr class="my-8 border-gray-200">

                <!-- FAQ 6 -->
                <div>
                    <button class="flex items-center focus:outline-none w-full" onclick="toggleAnswer(6)">
                        <svg id="icon-6" class="flex-shrink-0 w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path id="icon-path-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        <h1 class="mx-4 text-lg text-gray-700 lg:text-xl">What is the process for furniture redressing?</h1>
                    </button>
                    <div id="answer-6" class="max-w-3xl mt-3 px-4 text-gray-500 hidden">
                        <p>For redressing, we start with an assessment of your existing furniture. You’ll select new fabrics or finishes from our range of options, and our team will handle the rest, including removal of old materials and application of the new ones.</p>
                    </div>
                </div>

                <hr class="my-8 border-gray-200">

                <!-- FAQ 7 -->
                <div>
                    <button class="flex items-center focus:outline-none w-full" onclick="toggleAnswer(7)">
                        <svg id="icon-7" class="flex-shrink-0 w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path id="icon-path-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        <h1 class="mx-4 text-lg text-gray-700 lg:text-xl">Do you offer furniture repair services?</h1>
                    </button>
                    <div id="answer-7" class="max-w-3xl mt-3 px-4 text-gray-500 hidden">
                        <p>Yes, we offer repair services for various types of furniture. Whether it’s structural repairs or cosmetic touch-ups, our skilled craftsmen can handle it. Please contact us to describe the issue, and we’ll provide a solution.</p>
                    </div>
                </div>

                <hr class="my-8 border-gray-200">

                <!-- FAQ 8 -->
                <div>
                    <button class="flex items-center focus:outline-none w-full" onclick="toggleAnswer(8)">
                        <svg id="icon-8" class="flex-shrink-0 w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path id="icon-path-8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        <h1 class="mx-4 text-lg text-gray-700 lg:text-xl">How can I schedule a consultation for interior design?</h1>
                    </button>
                    <div id="answer-8" class="max-w-3xl mt-3 px-4 text-gray-500 hidden">
                        <p>To schedule a consultation, use the online booking system on our website or call us directly. We offer both in-home and virtual consultations to discuss your interior design needs and preferences.</p>
                    </div>
                </div>

                <hr class="my-8 border-gray-200">

                <!-- FAQ 9 -->
                <div>
                    <button class="flex items-center focus:outline-none w-full" onclick="toggleAnswer(9)">
                        <svg id="icon-9" class="flex-shrink-0 w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path id="icon-path-9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        <h1 class="mx-4 text-lg text-gray-700 lg:text-xl">Do you offer delivery services for large furniture pieces?</h1>
                    </button>
                    <div id="answer-9" class="max-w-3xl mt-3 px-4 text-gray-500 hidden">
                        <p>Yes, we offer delivery services for large furniture pieces. Our team will coordinate with you to ensure that the delivery is scheduled at a time that is convenient for you.</p>
                    </div>
                </div>

                <hr class="my-8 border-gray-200">

                <!-- FAQ 10 -->
                <div>
                    <button class="flex items-center focus:outline-none w-full" onclick="toggleAnswer(10)">
                        <svg id="icon-10" class="flex-shrink-0 w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path id="icon-path-10" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        <h1 class="mx-4 text-lg text-gray-700 lg:text-xl">Can I modify the design of my custom furniture after ordering?</h1>
                    </button>
                    <div id="answer-10" class="max-w-3xl mt-3 px-4 text-gray-500 hidden">
                        <p>Once an order has been placed, modifications are possible, but they may incur additional costs depending on the changes. Contact us as soon as possible to discuss your desired modifications before production begins.</p>
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

<script>
    function toggleAnswer(id) {
       const answer = document.getElementById('answer-' + id);
       const icon = document.getElementById('icon-' + id);
       const iconPath = document.getElementById('icon-path-' + id);
       answer.classList.toggle('hidden');
   
       // Toggle the SVG icon (change from + to -)
       if (answer.classList.contains('hidden')) {
           iconPath.setAttribute('d', 'M12 4v16m8-8H4');
       } else {
           iconPath.setAttribute('d', 'M20 12H4');
       }
   
       // Reduce font size when answer is open
       const questionText = icon.nextElementSibling;
       if (!answer.classList.contains('hidden')) {
           questionText.classList.add('text-sm');
       } else {
           questionText.classList.remove('text-sm');
       }
   }
   </script>