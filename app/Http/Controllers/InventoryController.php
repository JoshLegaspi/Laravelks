<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    // Display the inventory list
    public function index()
    {
        $items = Item::all();  // Fetch all items from the database
        return view('inventory.index', compact('items'));  // Pass items to the view
    }

    // Show the form to add a new item
    public function create()
    {
        return view('inventory.create');
    }

    // Store the new item
    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'item_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
        ]);

        // Create a new item and store it in the database
        Item::create([
            'name' => $validated['item_name'],
            'quantity' => $validated['quantity'],
            'price' => $validated['price'],
            'category' => $validated['category'],
        ]);

        // Redirect to the inventory list with a success message
        return redirect()->route('inventory.index')->with('success', 'Item added successfully!');
    }
}
