<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Item;

class DashboardController extends Controller
{
    public function index(){
        $totalCustomers = Customer::count();
        $totalOrders = Order::count();
        $totalItems = Item::count();
        return view('dashboard', compact('totalCustomers','totalOrders','totalItems'));
    }
}