<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Chief Furnitures')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- JQuery - Ajax - Link 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100">
    <div class="w-full py-1 bg-slate-200">
        <div class="tracking-[5px] text-center">
            <a href="mailto:chiechieffurnitures1984@gmail.com" class="mx-5 mx-8" >info@chieffurnitures</a>
             | 
            <a href="tel:+92-300-4479976" class="mx-5 mx-8">+92-300-4479976 </a> </div>
    </div>

    <main class="p-5">
        @yield('content')
    </main>

    <footer class="bg-slate-800 mt-10">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="/logo-white.png" class="h-8" alt="Chief Furniture Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Chief Furnitures&reg;</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-400 sm:mb-0">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-4 sm:mx-auto border-gray-700 lg:my-8" />
            <span class="block text-sm sm:text-center text-gray-300">© 2025 <a href="https://chieffurnitures.rf.gd/" class="hover:underline">Chief Furnitures&reg;</a>. All Rights Reserved.</span>
        </div>
    </footer>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const popup = document.getElementById('popup');
        setTimeout(() => {
            popup.classList.remove('opacity-0', 'translate-y-[-20px]');
            popup.classList.add('opacity-100', 'translate-y-[20px]');
        }, 100);
        document.addEventListener('click', function(event) {
            if (!popup.contains(event.target)) {
                popup.classList.add('opacity-0', 'translate-y-[-20px]');
                popup.classList.remove('opacity-100', 'translate-y-[20px]');
                setTimeout(() => {
                    popup.remove();
                }, 300);
            }
        });
    });
</script>

</body>
</html>