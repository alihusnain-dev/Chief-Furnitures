<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login to Chief Furnitures&reg;</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
    <div class="max-w-screen-xl m-0 sm:m-20 bg-white shadow sm:rounded-lg flex justify-center flex-1">
        <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
            <div class="text-center">
                <img src="/logo.png" class="w-32 mx-auto" alt="Chief Furnitures Logo" />
            </div>
            <div class="mt-12 flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-extrabold">
                    Login to Chief Furnitures
                </h1>
                @if(session('success'))
                    <div class="flex w-full max-w-sm overflow-hidden bg-gray-50 rounded-lg mt-5">
                        <div class="flex items-center justify-center w-12 bg-emerald-500">
                            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
                            </svg>
                        </div>

                        <div class="px-4 py-2 -mx-3">
                            <div class="mx-3">
                                <span class="font-semibold text-emerald-500 dark:text-emerald-400">Success</span>
                                <p class="text-sm text-gray-600">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                @if(session('error'))
                    <div class="my-5">
                        <div
                            class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4 w-full max-w-xs">
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </div>
                    </div>
                @endif
                <div class="w-full flex-1 mt-8">
                    <form action="{{route("loginto")}}" method="post">
                        <div class="mx-auto max-w-xs">
                            @csrf
                            <input
                                class="w-full px-4 py-3 rounded-lg font-medium bg-gray-50 border border-gray-200 placeholder-gray-500 focus:outline-none focus:border-gray-400 focus:bg-white"
                                type="email" name="email" placeholder="Email" value="{{old("email")}}" />
                            @error("name")
                                <span class="text-red-500">{{$message}}</span>
                            @enderror
                            <input
                                class="w-full px-4 py-3 rounded-lg font-medium bg-gray-50 border border-gray-200 placeholder-gray-500 focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                type="password" name="password" placeholder="Password" />
                            @error("name")
                                <span class="text-red-500">{{$message}}</span>
                            @enderror
                            <label class="text-slate-500">
                                <input type="checkbox" name="remember" class="mt-5"> Remember Me
                            </label>
                            <div class="p-5">
                                <a href="/signup" class="float-right text-sm text-indigo-500 hover:text-indigo-700">
                                    Don't have an account?
                                </a>
                            </div>
                            <button
                                class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                <span class="ml-3">Login</span>
                            </button>
                            <p class="mt-6 text-xs text-gray-600 text-center">
                                I agree to Chief Furnitures&reg;
                                <a href="#" class="border-b border-gray-500 border-dotted">Terms of Service</a>
                                and its
                                <a href="#" class="border-b border-gray-500 border-dotted">Privacy Policy</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
            <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                style="background-image: url('https://storage.googleapis.com/devitary-image-host.appspot.com/15848031292911696601-undraw_designer_life_w96d.svg');">
            </div>
        </div>
    </div>

</body>

</html>