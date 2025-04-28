<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{

    public function index()
    {
        $items = Item::all();
        return view('items.index',compact('items'));
    }

  
    public function create()
    {
        
       return view ('items.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
        ]);

        $items = Item::create($request->all());
        
   
        return redirect()->route('items.index',compact('items'))->with('success', 'Student createdsuccessfully');
    }

    public function edit(Item $item){
        return view('items.edite',compact('item'));
        
    }
    // Update an existing item
    public function update(Request $request, Item $item)
    {
        $item->update($request->only(['name','price','category']));
        
    
            return redirect()->route('items.index')->with('success','Item update Successfully');

    }

    // Delete an item
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with('Item deleted successfully');        
    }
}