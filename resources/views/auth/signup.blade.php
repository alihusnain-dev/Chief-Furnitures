<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup to Chief Furnitures&reg;</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        // JavaScript to handle file input preview
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function () {
                const preview = document.getElementById('file-preview');
                preview.src = reader.result;
                preview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        }
    </script>
</head>

<body class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
    <div class="max-w-screen-xl m-0 sm:mx-20 bg-white shadow sm:rounded-lg flex justify-center flex-1">
        <div class="lg:w-5/12 p-6 sm:p-12">
            <div>
                <img src="/logo.png" class="w-32 mx-auto" alt="Chief Furnitures Logo">
            </div>
            <div class="mt-12 flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-extrabold">
                    SignUp - Chief Furnitures&reg;
                </h1>
                @if(session()->has('success'))
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
                <div class="lg:w-[900px] md:w-[500px] mt-8">
                    <form action="{{ route('signupas') }}" method="POST" enctype="multipart/form-data">
                        <div
                            class="mx-auto md:w-[150px] md:h-[150px] lg:w-[190px] lg:h-[190px] rounded-full relative flex justify-center items-center overflow-hidden border-2 border-gray-300 cursor-pointer">
                            <input class="absolute opacity-0 w-full h-full" type="file" name="file" id="file-input"
                                accept="image/*" onchange="previewImage(event)">
                            <img id="file-preview" src="" alt="Profile Picture" class="hidden w-full h-full object-cover" />
                                <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 512 512"><path fill="#b6bec954" d="M149.1 64.8L138.7 96 64 96C28.7 96 0 124.7 0 160L0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-256c0-35.3-28.7-64-64-64l-74.7 0L362.9 64.8C356.4 45.2 338.1 32 317.4 32L194.6 32c-20.7 0-39 13.2-45.5 32.8zM256 192a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>
                        </div>
                        @error("file")
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="mx-auto grid  gap-5 grid-cols-1 md:grid-cols-2 ">
                            @csrf

                            <div class="flex flex-col mt-5">
                                <label for="name" class="ml-1 mb-1 text-sm font-medium text-slate-500">Name <span class="text-red-500">*</span></label>
                                <input
                                    class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 focus:outline-none focus:border-gray-200 focus:bg-gray-50"
                                    type="text" name="name" value="{{ old('name') }}">
                                @error("name")
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex flex-col mt-5">
                                <label for="" class="ml-1 mb-1 text-sm font-medium text-slate-500">Mobile <span class="text-red-500">*</span></label>
                                <input
                                    class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 focus:outline-none focus:border-gray-200 focus:bg-gray-50"
                                    type="text" name="phone" value="{{ old('phone') }}">
                                @error("phone")
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex flex-col mt-5">
                                <label for="email" class="ml-1 mb-1 text-sm font-medium text-slate-500">Email <span class="text-red-500">*</span></label>
                                <input
                                    class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 focus:outline-none focus:border-gray-200 focus:bg-gray-50"
                                    type="email" name="email" value="{{ old('email') }}">
                                @error("email")
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex flex-col mt-5">
                                <label for="birth" class="ml-1 mb-1 text-sm font-medium text-slate-500">Date of Birth <span class="text-red-500"></span></label>
                                <input
                                    class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 focus:outline-none focus:border-gray-200 focus:bg-gray-50 placeholder-gray-500"
                                    type="date" name="birth" value="{{ old('birth') }}" placeholder="DD/MM/YYYY">
                                @error("birth")
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex flex-col mt-5">
                                <label for="address" class="ml-1 mb-1 text-sm font-medium text-slate-500">Address <span class="text-red-500">*</span></label>
                                <input
                                    class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 focus:outline-none focus:border-gray-200 focus:bg-gray-50"
                                    type="text" name="address" value="{{ old('address') }}">
                                @error("address")
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex flex-col mt-5">
                                <label for="city" class="ml-1 mb-1 text-sm font-medium text-slate-500">City <span class="text-red-500">*</span></label>
                                <input
                                    class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 focus:outline-none focus:border-gray-200 focus:bg-gray-50"
                                    type="text" name="city" value="{{ old('city') }}">
                                @error("city")
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="flex flex-col mt-5">
                                <label for="gender" class="ml-1 mb-1 text-sm font-medium text-slate-500">Gender <span class="text-red-500">*</span></label>
                                <select
                                    class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 focus:outline-none focus:border-gray-200 focus:bg-gray-50  appearance-none"
                                    name="gender" id="gender">
                                    <option value="" class="bg-gray-100 text-gray-700 py-2 px-4 rounded p-3 my-3"></option>
                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }} class="bg-gray-100 text-gray-700 py-2 px-4 rounded p-3 my-3">Male</option>
                                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }} class="bg-gray-100 text-gray-700 py-2 px-4 rounded p-3 my-3">Female</option>
                                </select>
                                @error("gender")
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex flex-col mt-5">
                                <label for="" class="ml-1 mb-1 text-sm font-medium text-slate-500">Password <span class="text-red-500">*</span></label>
                                <input
                                    class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 focus:outline-none focus:border-gray-200 focus:bg-gray-50"
                                    type="password" name="password">
                                @error("password")
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="p-5 text-right">
                            <a href="/login" class="text-sm text-indigo-500 hover:text-indigo-700">Have an Account?</a>
                        </div>

                        <button type="submit"
                            class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                            <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                <circle cx="8.5" cy="7" r="4" />
                                <path d="M20 8v6M23 11h-6" />
                            </svg>
                            <span class="ml-3">Sign Up</span>
                        </button>

                        <p class="mt-6 text-xs text-gray-600 text-center">
                            I agree to Chief Furnitures&reg;
                            <a href="#" class="border-b border-gray-500 border-dotted">Terms of Service</a>
                            and its
                            <a href="#" class="border-b border-gray-500 border-dotted">Privacy Policy</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>