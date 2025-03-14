<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title','Admin - Chief Furnitures')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .transition-width {
            transition: width 0.3s ease-in-out;
        }
        /* Tailwind uses classes, so apply styles dynamically */
        .menu-open span:nth-child(1) {
          transform: rotate(45deg) translate(5px, 5px);
        }
      
        .menu-open span:nth-child(2) {
          opacity: 0;
        }
      
        .menu-open span:nth-child(3) {
          transform: rotate(-45deg) translate(5px, -5px);
        }
      </style>
</head>
<body class="bg-gray-200 h-screen w-screen overflow-hidden">
    <main class="flex h-screen">
        <!-- Sidebar -->
        <div id="sidebar" class="flex flex-col items-center h-full overflow-hidden text-gray-400 bg-gray-900 transition-width w-16">
            <a class="flex items-center mt-3" href="{{route('admin.dashboard')}}">
                <img src="/logo-white.png" alt="Chief Furnitures" class="h-[35px]"/>
            </a>
            <div class="links flex flex-col items-center mt-3 pt-6 border-t border-gray-700 w-full px-2">
                <!-- Add Links -->
                <a class="flex items-center w-full h-12 px-3 my-1 justify-center rounded hover:bg-gray-700 hover:text-gray-300" href="{{route('admin.dashboard')}}">
                    <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="ml-2 text-sm font-medium hidden">Dashboard</span>
                </a>
                <a class="flex items-center w-full h-12 px-3 my-1 justify-center rounded hover:bg-gray-700 hover:text-gray-300" href="{{route('admin.product')}}">
                    <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="ml-2 text-sm font-medium hidden">Products</span>
                </a>
                <a class="flex items-center w-full h-12 px-3 my-1 justify-center rounded hover:bg-gray-700 hover:text-gray-300" href="{{route('admin.orders')}}">
                    <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                    </svg>
                    <span class="ml-2 text-sm font-medium hidden">Orders</span>
                </a>
                <a class="flex items-center w-full h-12 px-3 my-1 justify-center rounded hover:bg-gray-700 hover:text-gray-300" href="{{route('admin.users')}}">
                    <svg class="w-6 h-6 stroke-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="6" r="4" stroke="#9ca3af" w-6="" h-6="" stroke-current""="" stroke-width="1.5"></circle> <path d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634" stroke="#9ca3af" w-6="" h-6="" stroke-current""="" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                    <span class="ml-2 text-sm font-medium hidden">Customers</span>
                </a>
                <a class="flex items-center w-full h-12 px-3 my-1 justify-center rounded hover:bg-gray-700 hover:text-gray-300" href="{{route('admin.dashboard')}}">
                    <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3v18h18V3H3z" />
                    </svg>
                    <span class="ml-2 text-sm font-medium hidden">Reports</span>
                </a>
                <a class="flex items-center w-full h-12 px-3 my-1 justify-center rounded hover:bg-gray-700 hover:text-gray-300" href="{{route('admin.dashboard')}}">
                    <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    <span class="ml-2 text-sm font-medium hidden">Settings</span>
                </a>
                <hr class="border border-gray-700 w-full my-3">
                <a class="flex items-center w-full h-12 px-3 my-1 justify-center rounded hover:bg-gray-700 hover:text-gray-300" href="{{route('admin.add.product')}}">
                    <svg class="w-6 h-6 stroke-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#9ca3af" stroke-width="1.5"></circle> <path d="M15 12L12 12M12 12L9 12M12 12L12 9M12 12L12 15" stroke="#9ca3af" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                    <span class="ml-2 text-sm font-medium hidden">Add Products</span>
                </a>
            </div>
            <a class="flex items-center justify-center w-full h-16 mt-auto bg-gray-800 hover:bg-gray-700 hover:text-gray-300" href="{{route('admin.add.product')}}">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="ml-2 text-sm font-medium hidden">Account</span>
            </a>
        </div>

        <!-- Main Content -->
        <div id="main-content" class="w-full flex flex-col transition-width overflow-y-auto">
            <header class="w-full bg-white flex items-center justify-between p-4">
                <div class="flex items-center">
                    <button id="toggle-sidebar" class=" bg-gray-800 text-white rounded px-2 py-1">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <h2 class="ml-4 font-semibold text-2xl uppercase text-slate-800">Chief Furnitures&reg;</h2> 
                </div>
                <div class="">
                    <div class="profile">
                        <img src="" alt="">
                    </div>
                </div>
            </header>
            <div class="main p-4">
                
                @yield('content')
            </div>
        </div>
    </main>

    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleSidebar = document.getElementById('toggle-sidebar');

        toggleSidebar.addEventListener('click', () => {
            const isExpanded = sidebar.classList.contains('w-16');
            sidebar.classList.toggle('w-16', !isExpanded);
            sidebar.classList.toggle('w-[200px]', isExpanded);

            const textElements = sidebar.querySelectorAll('span');
            const iconElements = sidebar.querySelectorAll('.links a');
            setTimeout(() => {
                textElements.forEach(span => span.classList.toggle('hidden', !isExpanded));
                iconElements.forEach(span => span.classList.toggle('justify-center', !isExpanded));
            }, 200);

        });
        // Get the SVG and path elements
        const svg = document.getElementById('mySVG');
        const path = document.getElementById('svgPath');

        function toggleMenu() {
            const menuIcon = document.getElementById('menu-icon');
            menuIcon.classList.toggle('menu-open');
        }
    </script>
</body>
</html>
