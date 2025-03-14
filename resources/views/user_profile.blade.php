@extends('layouts.setting_layout')
@section('title', Str::limit(auth()->user()->name, 10) . ' - Profile')
@section('content')
    @if(session('successProfile'))
        <div class="w-full fixed left-0 top-0">
            <div id="popup"
                class="transform bg-white text-slate-800 px-6 py-4 rounded-lg shadow-lg max-w-[460px] mx-auto flex items-center border border-slate-700 z-50 transition-all duration-300 opacity-0 translate-y-[-20px]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-7">
                    <path fill="green"
                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                </svg>
                <p class="tracking-wide ml-3"><b>{{ session('successProfile') }}</b></p>
            </div>
        </div>
    @endif
    <div class="w-full text-center my-20">
        <h2 class="text-2xl md:text-4xl lg:text-[50px] font-bold inline-block px-3">User Profile</h2>
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
        <a onclick="window.history.back()"
            class="py-2 px-3 hover:text-slate-700 rounded md:text-xl font-medium text-slate-900 cursor-pointer">
            <i class="fa-solid fa-chevron-left text-2xl"></i>
        </a>
    </div>
    <section class="sm:min-w-screen md:w-full md:px-28 mt-10 mx-auto max-w-[1600px]">
        <form action="{{ route('setting.user.update', auth()->user()->id) }}" method="POST" enctype="multipart/form-data"
            class="bg-white shadow rounded-lg p-3 md:p-10 lg:p-32">
            @csrf
            @method('PUT')

            <div class="flex justify-center items-center flex-col xl:flex-row">
                <div class="p-5 sm:p-10 md:p-15 lg:p-20">
                    <div
                        class="mx-auto w-[130px] h-[130px] md:w-[180px] md:h-[180px] lg:w-[280px] lg:h-[280px] rounded-full relative flex justify-center items-center overflow-hidden border-2 border-gray-300 cursor-pointer">
                        <input class="absolute opacity-0 w-full h-full" type="file" name="file" id="file-input"
                            accept="image/*" onchange="previewImage(event)">
                        <img id="file-preview" src="{{ asset('storage/' . auth()->user()->file) }}" alt="Profile Picture"
                            class="w-full h-full object-cover" />
                    </div>
                </div>
                <div class="w-full">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name', auth()->user()->name) }}"
                                class="py-2 px-3 bg-slate-50 rounded-lg outline-none border focus:bg-slate-100 mx-auto w-full"
                                required>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', auth()->user()->email) }}"
                                class="py-2 px-3 bg-slate-50 rounded-lg outline-none border focus:bg-slate-100 mx-auto w-full"
                                required>
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone', auth()->user()->phone) }}"
                                class="py-2 px-3 bg-slate-50 rounded-lg outline-none border focus:bg-slate-100 mx-auto w-full">
                        </div>

                        <!-- City -->
                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                            <input type="text" name="city" id="city" value="{{ old('city', auth()->user()->city) }}"
                                class="py-2 px-3 bg-slate-50 rounded-lg outline-none border focus:bg-slate-100 mx-auto w-full">
                        </div>

                        <!-- Date of Birth -->
                        <div>
                            <label for="birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                            <input type="date" name="birth" id="birth" value="{{ old('birth', auth()->user()->birth) }}"
                                class="py-2 px-3 bg-slate-50 rounded-lg outline-none border focus:bg-slate-100 mx-auto w-full">
                        </div>

                        <!-- Gender -->
                        <div>
                            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                            <select name="gender" id="gender"
                                class="py-2 px-3 bg-slate-50 rounded-lg outline-none border focus:bg-slate-100 mx-auto w-full appearance-none">
                                <option value="Male" {{ old('gender', auth()->user()->gender) == 'Male' ? 'selected' : '' }}>
                                    Male</option>
                                <option value="Female" {{ old('gender', auth()->user()->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>

                        <!-- Address -->
                    </div>
                    <div class="my-5">
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <textarea name="address" id="address" rows="3"
                            class="w-full resize-none py-2 px-3 bg-slate-50 rounded-lg outline-none border focus:bg-slate-100">{{ old('address', auth()->user()->address) }}</textarea>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex flex-col md:flex-row justify-end">
                <button type="submit"
                    class="px-6 py-2 mb-3 md:mb-0 md:mr-5 bg-indigo-500 hover:bg-indigo-600 text-white rounded-md font-medium">
                    Change Password
                </button>
                <button type="submit" class="px-6 py-2 bg-amber-500 hover:bg-amber-600 text-white rounded-md font-medium">
                    Save Changes
                </button>
            </div>
        </form>
    </section>
@endsection