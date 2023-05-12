<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Saved;
use App\Models\Order;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('buy-cars', [
            'cars' => $cars
        ]);
    }

    public function show(Car $car)
    {
        return view('car-details', [
            'car' => $car,
            'saved' => Saved::where('car_id', $car->id)->where('user_id', auth()->id())->get()
        ]);
    }




    public function carFinance(Car $car) {
        return view('car-buy-page-finance', [
            'car' => $car
        ]);
    }

    public function carFinancePost(Request $request, Car $car) {
        $orderNumber = 'ARALM-' . Str::random(6);

        Http::post('https://alroalluxurymotors.alecbulka.com/api/orders', [
            'orderNumber' => $orderNumber,
            'status' => $request->status,
            'totalCost' => $request->totalCost,
            'finance' => $request->finance,
            'monthsFinanced' => $request->monthsFinanced,
            'downPayment' => $request->downPayment,
            'monthlyCost' => $request->monthlyCost,
            'user_id' => Auth::user()->id,
            'car_id' => $car->id
        ]);
        return redirect(route('car-payment', $orderNumber));
    }




    public function carCash(Car $car) {
        return view('car-buy-page-cash', [
            'car' => $car
        ]);
    }

    public function carCashPost(Request $request, Car $car) {
        $orderNumber = 'ARALM-' . Str::random(6);

        Http::post('https://alroalluxurymotors.alecbulka.com/api/orders', [
            'orderNumber' => $orderNumber,
            'status' => $request->status,
            'totalCost' => $request->totalCost,
            'user_id' => Auth::user()->id,
            'car_id' => $car->id
        ]);
        return redirect(route('car-payment', $orderNumber));
    }




    public function carPayment(string $orderNumber) {
        $order = Order::where('orderNumber', $orderNumber)->first();

        return view('car-payment', [
            'car' => Car::where('id', $order->car_id)->first(),
            'order' => $order
        ]);
    }

    public function carPaymentPost(Request $request, Order $order) {
        Http::put('https://alroalluxurymotors.alecbulka.com/api/orders/' . $order->orderNumber, [
            'status' => $request->status
        ]);

        return redirect(route('purchase-successful', $order));
    }




    public function purchaseSuccessful(Order $order) {
        return view('purchase-successful', [
            'order' => $order
        ]);
    }
}
