<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderProductController extends Controller
{
    public function index()
    {
        $orders = Order::with('product')->get();
        return response()->json($orders);
    }
    
}
