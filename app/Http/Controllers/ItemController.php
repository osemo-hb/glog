<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() // Fetches from item table on db and passes all items on to the index view 
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function create() // Shows the form for adding items using create view 
    {
        return view('items.create');
    }

    public function store(Request $request) // Handles form submission and storing new items to db
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'quantity' => 'required|integer',
            'unit' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $path = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        Item::create([
            'title' => $request->title,
            'category' => $request->category,
            'quantity' => $request->quantity,
            'unit' => $request->unit,
            'image' => $path,
        ]);

        return redirect('/items');
    }

    public function edit($id) // Form for editing inventory items
    {
        $item = Item::findOrFail($id);
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, $id) // Update an item by id
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'quantity' => 'required|integer',
            'unit' => 'required',
            'image' => 'nullable|image',
        ]);

        $item = Item::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($item->image) {
                \Storage::delete('public/' . $item->image);
            }
            $path = $request->file('image')->store('images', 'public');
        } else {
            $path = $item->image;
        }

        $item->update([
            'title' => $request->title,
            'category' => $request->category,
            'quantity' => $request->quantity,
            'unit' => $request->unit,
            'image' => $path,
        ]);

        return redirect('/items');
    }

    public function showByCategory($category)
    {
        $items = Item::where('category', $category)->get();
        return view('items.category', compact('items', 'category'));
    }
    
    public function destroy($id) // To remove items
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect('/items');
    }
}
