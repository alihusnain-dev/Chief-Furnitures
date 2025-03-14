<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    function index()
    {
        $products = Product::paginate(12);
        return view("products", compact("products"));
    }
    function details($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view("detail-product", compact("product"));
    }
    public function cart($id)
    {
        // Check if the product is already in the user's cart
        $existingCart = Cart::where('user_id', auth()->id())
            ->where('product_id', $id)
            ->first();

        if ($existingCart) {
            $existingCart->quantity += 1;
            $existingCart->save();
            return redirect()->back()->with("successCart", "Product Updated in Cart");
        } else {
            // If product doesn't exist, create a new cart entry
            $cart = new Cart();
            $cart->user_id = auth()->id();
            $cart->product_id = $id;
            $cart->quantity = 1; // Initial quantity
            $cart->save();

            return redirect()->back()->with("successCart", "Product Added to Cart");
        }
    }
    public function cartShow($user)
    {
        $carts = Cart::where('user_id', $user)->with('product')->get();

        // Calculate total price by summing the product price * quantity for each item
        $totalPrice = $carts->sum(function ($cart) {
            return $cart->product->price * $cart->quantity;
        });

        // Pass the $totalPrice to the view
        return view('cart', compact('carts', 'totalPrice'));
    }


    public function removeFromCart($productId)
    {
        $product = Cart::where('user_id', auth()->id())->where('id', $productId)->first();
        if ($product) {
            $product->delete();
            return redirect()->back()->with('successCart', 'Product Removed from Cart!');
        }
        return redirect()->route('cart')->with('errorCart', 'Product not Found!');
    }
    // ProductController.php

    // In ProductController.php

    public function updateCartQuantity(Request $request, $cartId)
    {
        // Validate quantity
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        // Find the cart item for the authenticated user
        $cartItem = Cart::where('id', $cartId)
            ->where('user_id', auth()->id())
            ->first();

        if (!$cartItem) {
            return response()->json([
                'success' => false,
                'message' => 'Cart item not found.'
            ], 404);
        }

        // Update quantity
        $cartItem->quantity = $validated['quantity'];
        $cartItem->save();

        // Calculate updated prices
        $productPrice = $cartItem->product->price * $cartItem->quantity;
        $totalPrice = $this->calculateTotalPrice();

        return response()->json([
            'success' => true,
            'productPrice' => $productPrice,
            'totalPrice' => $totalPrice
        ]);
    }

    private function calculateTotalPrice()
    {
        return Cart::where('user_id', auth()->id())
            ->with('product')
            ->get()
            ->sum(function ($cart) {
                return $cart->product->price * $cart->quantity;
            });
    }
}
