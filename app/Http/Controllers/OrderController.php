<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::all();
        return view('orders.index',compact('orders'));
    }

  
    public function create()
{
    $orders = Order::all(); // Fetch all orders from the database
    return view('orders.create', compact('orders')); // Pass orders to the view
}


  
    public function store(Request $request)
    {
        $request->validate([
            'ordername' => 'required',
            'customerno' => 'required',
            'quantity' => 'required|integer',
            'amount' => 'required',
            'status' => 'required',
        ]);

        Order::create($request->all());
        
   
        return redirect()->route('orders.index')->with('success', 'Items is order successfully');
    }

    public function edit(Order $order){
        return view('orders.edite',compact('order'));
        
    }

    public function update(Request $request, Order $order)
    {
        $order->update($request->only(['ordername','customerno','quantity','amount']));
        
    
            return redirect()->route('orders.index')->with('success','Order Successfully');

    }

    // Delete an item
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('Order deleted successfully');        
    }
}