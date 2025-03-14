<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view("admin.dashboard");
    }
    public function product()
    {
        return view("admin.product", ["products" => Product::all()]);
    }

    public function orders()
    {
        return view("admin.orders");
    }
    public function users()
    {
        return view("admin.users", ["users" => User::all()]);
    }

    public function addProduct()
    {
        return view("admin.add-product", ["products" => Product::all()]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:products,slug|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'file' => 'required|image|mimes:jpg,jpeg,png,gif', // Image validation
        ]);

        // Handle the image upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('product_images', 'public');
        }

        $product = Product::create([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'description' => $request->description,
            'price' => $request->price,
            'file' => $filePath,
        ]);

        // Check if the product was created
        if ($product) {
            return redirect()->route('admin.add.product')->with('success', 'Product added successfully.');
        } else {
            return back()->with(['error' => 'There was an issue saving the product. Please try again.']);
        }
    }
}
