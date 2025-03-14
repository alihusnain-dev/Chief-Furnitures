@extends('layouts.setting_layout')
@section('title', 'Add Product')
@section('content')
    <style>
        .drop-area {
            /* border: 2px dashed #3490dc; */
            padding: 30px;
            text-align: center;
            cursor: pointer;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .drop-area:hover {
            background-color: #f1f5f9;
        }

        #image-preview {
            margin-top: 20px;
            display: none;
            text-align: center;
        }

        #image-preview img {
            max-width: 300px;
            max-height: 300px;
        }
    </style>
    <div class="absolute top-[30px] lg:top-[80px] left-0 w-full flex px-5 md:px-10 lg:px-20 mt-20">
        <a onclick="window.history.back()"
            class="py-2 px-3 hover:text-slate-700 rounded md:text-xl font-medium text-slate-900 cursor-pointer">
            <i class="fa-solid fa-chevron-left text-2xl"></i>
        </a>
    </div>
    <div class="w-full text-center mb-20 mt-24 md:mt-40 ">
        <h2 class="text-2xl md:text-4xl lg:text-[50px] font-bold inline-block px-3">Add Market Place</h2>
        <div class="flex justify-center mx-auto mt-3">
            <span class="inline-block w-40 h-1 bg-amber-500 rounded-full"></span>
            <span class="inline-block w-5 h-1 mx-1 bg-amber-500 rounded-full"></span>
            <span class="inline-block w-1 h-1 bg-amber-500 rounded-full"></span>
        </div>

        <p class="max-w-2xl mx-auto mt-6 text-center text-gray-500">
            Chief Furnitures is an easy-to-use online Furniture Marketplace where users can sell their old furniture.
            Whether you're upgrading or decluttering, list your pre-owned furniture and connect with buyers looking for
            affordable, quality pieces. Join Chief Furnitures today and give your furniture a second life!
        </p>
    </div>
    <div class="md:w-2/3 mx-auto p-3 md:p-4 lg-p-6 bg-white rounded-lg shadow-lg mt-8">
        <h1 class="text-3xl font-semibold text-gray-700 mb-6">Add Marketplace Product</h1>
        <div class="my-10">
            @if (session('success'))
                <div class="bg-green-100 text-green-600 font-medium tracking-wide p-4 rounded-md mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-100 text-red-600 font-medium tracking-wide p-4 rounded-md mb-4">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <form action="{{ route('setting.market.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <p class="text-xl font-semibold text-slate-700">Product Details</p>
            <hr class="mb-5">
            <div class="mb-4 md:mx-2">
                <label for="name" class="block text-lg font-medium text-gray-600">Product Name <span
                        class="text-red-500">*</span></label>
                <input type="text" name="name" id="name"
                    class="mt-1 p-3 w-full border border-gray-300 rounded-lg outline-none focus:border-gray-400"
                    placeholder="Wooden Center Table Set | 4 X 4">
                @error("name")
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-4 md:mx-2">
                <label for="type" class="block text-lg font-medium text-gray-600">Product Type <span
                        class="text-red-500">*</span></label>
                <select name="type" id="type"
                    class="mt-1 p-3 w-full border border-gray-300 rounded-lg outline-none focus:border-gray-400 bg-white appearance-none">
                    <option value="none" disabled selected class="py-4 text-lg hover:bg-slate-400 text-slate-700">Select
                        Type</option>

                    <!-- Bedroom Furniture -->
                    <optgroup label="Bedroom Furniture" class="font-semibold text-gray-700">
                        <option value="Bed">Bed</option>
                        <option value="Wardrobe">Wardrobe</option>
                        <option value="Mirror Frame">Mirror Frame</option>
                    </optgroup>

                    <!-- Living Room Furniture -->
                    <optgroup label="Living Room Furniture" class="font-semibold text-gray-700">
                        <option value="Sofa">Sofa</option>
                        <option value="Chair">Chair</option>
                        <option value="Table">Table</option>
                        <option value="Wall Decor">Wall Decor</option>
                    </optgroup>

                    <!-- Office Furniture -->
                    <optgroup label="Office Furniture" class="font-semibold text-gray-700">
                        <option value="Executive Furniture">Executive Furniture</option>
                        <option value="Cabinet">Cabinet</option>
                        <option value="Rack">Rack</option>
                    </optgroup>

                    <!-- Home Fixtures -->
                    <optgroup label="Home Fixtures" class="font-semibold text-gray-700">
                        <option value="Door">Door</option>
                    </optgroup>

                    <!-- Miscellaneous -->
                    <optgroup label="Miscellaneous" class="font-semibold text-gray-700">
                        <option value="Other">Other</option>
                    </optgroup>
                </select>

                @error("type")
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-4 md:mx-2">
                <label for="description" class="block text-lg font-medium text-gray-600">Product Description <span
                        class="text-red-500">*</span></label>
                <textarea name="description" id="description" rows="4"
                    class="resize-none mt-1 p-3 w-full border border-gray-300 rounded-lg outline-none focus:border-gray-400"
                    placeholder="Write about the Product in detail here..."></textarea>
                @error("description")
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-4 md:mx-2">
                <label for="price" class="block text-lg font-medium text-gray-600">Product Price <span
                        class="text-red-500">*</span></label>
                <input type="number" name="price" id="price"
                    class="mt-1 p-3 w-full border border-gray-300 rounded-lg outline-none focus:border-gray-400 appearance-none"
                    placeholder="12345">
                <small class="ml-2 text-slate-400">5% will be charged on each Product</small>
                @error("price")
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-4 md:mx-2">
                <label for="file" class="block text-lg font-medium text-gray-600">Product Image <span
                        class="text-red-500">*</span></label>
                <div class="drop-area border-2 border-dashed border-gray-400 hover:border-gray-600" id="drop-area">
                    <p class="text-gray-500">Drag and Drop Image Here or Click to Select</p>
                    <input type="file" name="file" id="file" style="display: none;" accept="image/*">
                    @error("file")
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div id="image-preview">
                    <p class="text-gray-600">Image Preview </p>
                    <img id="preview-image" src="" alt="Image Preview" class="mt-2 mx-auto rounded-lg shadow-md">
                </div>
            </div>
            <div class="mb-4 md:mx-2">
                <label for="size" class="block text-lg font-medium text-gray-600">Product Size (optional)</label>
                <input type="text" name="size" id="size"
                    class="mt-1 p-3 w-full border border-gray-300 rounded-lg outline-none focus:border-gray-400"
                    placeholder="5Foot x 5.5Foot">
                @error("size")
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-4 md:mx-2">
                <label for="quantity" class="block text-lg font-medium text-gray-600">Product Quantity <span
                        class="text-red-500">*</span></label>
                <input type="text" name="quantity" id="quantity"
                    class="mt-1 p-3 w-full border border-gray-300 rounded-lg outline-none focus:border-gray-400"
                    placeholder="2">
                @error("quantity")
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <p class="text-xl font-semibold text-slate-700 mt-10">Other Details</p>
            <hr class="mb-5">
            <div class="mb-4 md:mx-2">
                <label for="seller" class="block text-lg font-medium text-gray-600">Seller Name <span
                        class="text-red-500">*</span></label>
                <input type="text" name="seller" id="seller" value="{{auth()->user()->name}}"
                    class="mt-1 p-3 w-full border border-gray-300 rounded-lg outline-none focus:border-gray-400" readonly>
                @error("seller")
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-4 md:mx-2">
                <label for="price" class="block text-lg font-medium text-gray-600">Pick Address <span
                        class="text-red-500">*</span></label>
                <input type="text" name="address" id="address"
                    class="mt-1 p-3 w-full border border-gray-300 rounded-lg outline-none focus:border-gray-400"
                    placeholder="Plot-123, lahore / Google Map Link" value="{{auth()->user()->address}}">
                @error("address")
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-4 md:mx-2">
                <label for="mobile" class="block text-lg font-medium text-gray-600">Mobile No <span
                        class="text-red-500">*</span></label>
                <input type="text" name="mobile" id="mobile"
                    class="mt-1 p-3 w-full border border-gray-300 rounded-lg outline-none focus:border-gray-400"
                    placeholder="0300000000" value="{{auth()->user()->phone}}" readonly>
                @error("phone")
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-4 md:mx-2">
                <label for="secondary" class="block text-lg font-medium text-gray-600">Secondary Mobile</label>
                <input type="text" name="secondary" id="secondary"
                    class="mt-1 p-3 w-full border border-gray-300 rounded-lg outline-none focus:border-gray-400"
                    placeholder="0300000000">
                @error("phone")
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-4 md:mx-2">
                <label for="city" class="block text-lg font-medium text-gray-600">City <span
                        class="text-red-500">*</span></label>
                <select name="city" id="city"
                    class="mt-1 p-3 w-full border border-gray-300 rounded-lg outline-none focus:border-gray-400 bg-white appearance-none">
                    <option value="Lahore">Lahore</option>

                </select>

                @error("type")
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>

            <button type="submit"
                class="w-full mt-4 py-3 px-6 bg-slate-600 hover:bg-slate-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">Add
                Product</button>
        </form>
    </div>

    <script>
        const dropArea = document.getElementById('drop-area');
        const fileInput = document.getElementById('file');
        const imagePreview = document.getElementById('image-preview');
        const previewImage = document.getElementById('preview-image');

        dropArea.addEventListener('click', () => {
            fileInput.click();
        });

        dropArea.addEventListener('dragover', (event) => {
            event.preventDefault();
            dropArea.classList.add('bg-gray-100');
        });

        dropArea.addEventListener('dragleave', () => {
            dropArea.classList.remove('bg-gray-100');
        });

        dropArea.addEventListener('drop', (event) => {
            event.preventDefault();
            const file = event.dataTransfer.files[0];
            handleFileSelect(file);
        });

        fileInput.addEventListener('change', () => {
            const file = fileInput.files[0];
            handleFileSelect(file);
        });

        function handleFileSelect(file) {
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                    imagePreview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection