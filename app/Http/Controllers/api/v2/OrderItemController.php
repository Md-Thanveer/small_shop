<?php

namespace App\Http\Controllers\api\v2;

use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderItems = OrderItem::all();
        return response()->json(['data' => $orderItems], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'order_id' => 'required|integer',
            'product_id' => 'required|integer',
            'qty' => 'required|integer',
            'price' => 'required|numeric',
            'amount' => 'required|numeric',
            'discount' => 'required|numeric',
        ]);

        $orderItem = OrderItem::create($validatedData);

        return response()->json(['data' => $orderItem], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderItem $orderItem)
    {
        return response()->json(['data' => $orderItem], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderItem $orderItem)
    {
        $validatedData = $request->validate([
            'order_id' => 'integer',
            'product_id' => 'integer',
            'qty' => 'integer',
            'price' => 'numeric',
            'amount' => 'numeric',
            'discount' => 'numeric',
        ]);

        $orderItem->update($validatedData);

        return response()->json(['data' => $orderItem], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderItem $orderItem)
    {
        $orderItem->delete();

        return response()->json(['message' => 'Order item deleted successfully'], 200);
    }
}
