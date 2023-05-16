<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
Use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\OrderResource;
use App\Http\Resources\OrderCollection;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'status' => 'Success',
            'data' => new OrderCollection(Order::all())
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->has('finance')) {
            $validated = $request->validate([
                'status' => 'required|string',
                'totalCost' => 'required|numeric',
                'finance' => 'required|boolean',
                'monthsFinanced' => 'required|integer',
                'downPayment' => 'required|numeric',
                'monthlyCost' => 'required|numeric',
            ]);
            $validated['orderNumber'] = $request->orderNumber;
            $validated['user_id'] = $request->user_id;
            $validated['car_id'] = $request->car_id;
            $order = Order::create($validated);

            return response()->json([
                'status' => 'Success',
                'message' => 'Order Created',
                'data' => new OrderResource($order)
            ], 201);
        }

        $validated = $request->validate([
            'status' => 'required|string',
            'totalCost' => 'required|numeric'
        ]);
        $validated['orderNumber'] = $request->orderNumber;
        $validated['user_id'] = $request->user_id;
        $validated['car_id'] = $request->car_id;
        $order = Order::create($validated);

        return response()->json([
            'status' => 'Success',
            'message' => 'Order Created',
            'data' => new OrderResource($order)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return response()->json([
            'status' => 'Success',
            'data' => new OrderResource($order)
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        if ($order->finance == true) {
            $validated = $request->validate([
                'status' => 'required|string',
            ]);

            $order->update($validated);

            return response()->json([
                'status' => 'Success',
                'message' => 'Order Updated',
                'data' => new OrderResource($order)
            ], 200);
        }

        $validated = $request->validate([
            'status' => 'required|string',
        ]);

        $order->update($validated);

        return response()->json([
            'status' => 'Success',
            'message' => 'Order Updated',
            'data' => new OrderResource($order)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'Order Deleted'
        ], 200);
    }
}
