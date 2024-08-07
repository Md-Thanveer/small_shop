<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Order;
use App\Models\Cart;
use App\Models\OrderHistory;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        $customer_id = $user->id;

        $orders = Order::where('customer_id',$customer_id)
                ->orderBy('id','asc')
                ->get();
        return view('frontend/order',compact('orders'));
    }

    public function show($id)
    {
        $user = Auth::user();

        $customer_id
    }
}
