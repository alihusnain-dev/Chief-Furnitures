@extends('admin.admin')
@section('title', 'Admin - Add Product')
@section('content')
    <div class="flex items-center py-4 overflow-x-auto whitespace-nowrap ">
        <a href="{{route('admin.dashboard')}}" class="dark:text-gray-600 text-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">dark:
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
        </a>

        <span class="mx-5 text-gray-600 dark:text-gray-900">
            /
        </span>

        <a href="javascript:void(0)" class="dark:text-gray-600 text-gray-200 hover:underline">
            Admin
        </a>

        <span class="mx-5 text-gray-500 dark:text-gray-900">
            /
        </span>

        <a href="{{route('admin.dashboard')}}" class="dark:text-gray-600 text-gray-200 hover:underline">
            Dashboard
        </a>

        <span class="mx-5 text-gray-500 dark:text-gray-900">
            /
        </span>

        <a href="{{route('admin.product')}}" class="dark:text-gray-800 text-gray-200 hover:underline">
            Products
        </a>

        <span class="mx-5 text-gray-500 dark:text-gray-900">
            /
        </span>

        <a href="{{route('admin.product')}}" class="dark:text-gray-800 text-gray-200 hover:underline">
            Add Products
        </a>
    </div>
    <hr class="border-gray-400">
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
    <div class="max-w-xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-8">
        <h1 class="text-3xl font-semibold text-gray-700 mb-6">Add New Product</h1>
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
        <form action="{{ route('admin.product.post') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-lg font-medium text-gray-600">Product Name</label>
                <input type="text" name="name" id="name" class="mt-1 p-3 w-full border border-gray-300 rounded-lg outline-none focus:border-gray-400">
                @error("name")
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="slug" class="block text-lg font-medium text-gray-600">Product Slug</label>
                <input type="text" name="slug" id="slug" class="mt-1 p-3 w-full border border-gray-300 rounded-lg outline-none focus:border-gray-400">
                @error("slug")
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block text-lg font-medium text-gray-600">Product Description</label>
                <textarea name="description" id="description" rows="4" class="resize-none mt-1 p-3 w-full border border-gray-300 rounded-lg outline-none focus:border-gray-400"></textarea>
                @error("description")
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="price" class="block text-lg font-medium text-gray-600">Product Price</label>
                <input type="number" name="price" id="price" class="mt-1 p-3 w-full border border-gray-300 rounded-lg outline-none focus:border-gray-400">
                @error("price")
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="file" class="block text-lg font-medium text-gray-800">Product Image</label>
                <div class="drop-area border-2 border-dashed border-gray-400 hover:border-gray-600" id="drop-area">
                    <p class="text-gray-500">Drag and Drop Image Here or Click to Select</p>
                    <input type="file" name="file" id="file" style="display: none;" accept="image/*">
                    @error("file")
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div id="image-preview">
                    <p class="text-gray-600">Image Preview:</p>
                    <img id="preview-image" src="" alt="Image Preview" class="mt-2 mx-auto rounded-lg shadow-md">
                </div>
            </div>

            <button type="submit" class="w-full mt-4 py-3 px-6 bg-slate-500 hover:bg-slate-600 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">Add Product</button>
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