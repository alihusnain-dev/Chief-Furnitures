<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;
use Illuminate\Support\Facades\Auth;

class MarketController extends Controller
{
    public function index()
    {
        $markets = Market::orderBy("created_at", "desc")->get();
        return view("market_place", compact("markets"));
    }
    public function create()
    {
        return view('add_marketplace');
    }
    public function store(Request $request, $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        // Create a new market item associated with the logged-in user
        $market = new Market();
        $market->name = $request->input('name');
        $market->price = $request->input('price');
        $market->description = $request->input('description');
        $market->user_id = $user; // Associate with the logged-in user
        $market->save();

        return redirect()->route('setting.market.create')->with('success', 'Product listed successfully!');
    }

    public function edit($id)
    {
        $market = Market::findOrFail($id);
        return view('market.edit', compact('market'));
    }

    public function update(Request $request, $id)
    {
        $market = Market::findOrFail($id);

        $market->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('setting.market.edit', ['id' => $market->id])->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $market = Market::findOrFail($id);
        $market->delete();

        return redirect()->route('setting.market.create')->with('success', 'Product deleted successfully!');
    }
}
