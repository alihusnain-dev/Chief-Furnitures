<?php

use App\Http\Controllers\MarketController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

// User Dashboard Routes

Route::get('/', function () {
    return view('welcome', ['externalImageUrl' => 'https://chieffurnitures.rf.gd/ceo.png']);
})->name('home');

Route::get('products', [ProductController::class, 'index'])->name('products');
// Product Detail
Route::get('details/{slug}', [ProductController::class, 'details'])->name('product.detail');
Route::post('/products/{product}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::post('/products/{id}/update', [ReviewController::class, 'update'])->name('reviews.update');
Route::get('/products/{id}/destroy', [ReviewController::class, 'destroy'])->name('reviews.destroy');
// Marketplace
Route::get('/marketplace', [MarketController::class, 'index'])->name('marketplace');

// Static Pages

Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::get('about', function () {
    return view('about');
})->name('about');



Route::get('cart/{id}/', [ProductController::class, 'cart'])->name('cart.add');
Route::get('/products/{user}/cart/', [ProductController::class, 'cartShow'])->name('cart');
Route::delete('/cart/{product}/', [ProductController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/update/{cartId}', [ProductController::class, 'updateCartQuantity']);


// Settings for the users
Route::prefix('settings')->name('setting.')->group(function () {
    // Market Place Links 
    Route::get('market/create', [MarketController::class, 'create'])->name('market.create');
    Route::post('market/', [MarketController::class, 'store'])->name('market.post');
    Route::get('market/{id}/edit', [MarketController::class, 'edit'])->name('market.edit');
    Route::put('market/{id}', [MarketController::class, 'update'])->name('market.update');
    Route::delete('market/{id}', [MarketController::class, 'destroy'])->name('market.destroy');
    // User Profile Settings 
    Route::get('user/{id}/profile', [SettingController::class, 'profile'])->name('user.profile');
    Route::put('user/{id}/profile', [SettingController::class, 'update'])->name('user.update');
});

// authentication Routes  

Route::view('login', 'auth.login')->name('login');

Route::view('signup', 'auth.signup')->name('signup');

Route::post('loginto', [AuthController::class, 'login'])->name('loginto');

Route::post('signupto', [AuthController::class, 'signup'])->name('signupas');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// Admin Dashboard Routes 

Route::get('admin/Dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('admin/Product', [AdminController::class, 'product'])->name('admin.product');
Route::get('admin/Order', [AdminController::class, 'orders'])->name('admin.orders');
Route::get('admin/Users', [AdminController::class, 'users'])->name('admin.users');

Route::get('admin/Product/add', [AdminController::class, 'addProduct'])->name('admin.add.product');
Route::post('admin/Product/post', [AdminController::class, 'store'])->name('admin.product.post');

Route::view('try', 'admin.try');
