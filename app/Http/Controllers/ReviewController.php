<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    // Store a new review
    public function store(Request $request, $product)
    {
        $request->validate([
            'stars' => 'required|integer|min:1|max:5',
            'description' => 'required|string|max:1000',
        ]);

        Review::create([
            'product_id' => $product,
            'user_id' => auth()->id(),
            'stars' => $request->stars,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Thank you for your review!');
    }

    // Update an existing review
    // public function update(Request $request, $id)
    // {
    //     $review = Review::findOrFail($id);

    //     // Ensure the authenticated user is the owner of the review
    //     if ($review->user_id !== auth()->user()->id) {
    //         return redirect()->back()->with('error', 'Unauthorized action.');
    //     }

    //     $request->validate([
    //         'stars' => 'required|integer|min:1|max:5',
    //         'description' => 'required|string|max:1000',
    //     ]);

    //     $review->update([
    //         'stars' => $request->stars,
    //         'description' => $request->description,
    //     ]);

    //     return redirect()->back()->with('success', 'Your review has been updated!');
    // }

    // Delete a review
    public function destroy($id)
    {
        $review = Review::findOrFail($id);

        // Ensure the authenticated user is the owner of the review
        if ($review->user_id !== auth()->id()) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }
        $review->delete();
        return redirect()->back()->with('success', 'Your review has been deleted!');
    }
}
