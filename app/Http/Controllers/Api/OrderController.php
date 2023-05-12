<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
Use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            return $order;
        }

        $validated = $request->validate([
            'status' => 'required|string',
            'totalCost' => 'required|numeric'
        ]);
        $validated['orderNumber'] = $request->orderNumber;
        $validated['user_id'] = $request->user_id;
        $validated['car_id'] = $request->car_id;
        $order = Order::create($validated);
        return $order;
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
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
            return $order;
        }

        $validated = $request->validate([
            'status' => 'required|string',
        ]);

        $order->update($validated);
        return $order;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
    }
}
