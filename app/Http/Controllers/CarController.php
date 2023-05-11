<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Saved;
use App\Models\Order;
use Illuminate\Support\Facades\Http;

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

    public function carCash(Car $car) {
        return view('car-buy-page-cash', [
            'car' => $car
        ]);
    }

    public function carFinancePaymentGet(Car $car) {
        return view('car-finance-payment', [
            'car' => $car
        ]);
    }

    public function carFinancePaymentPost(Request $request, Car $car) {

        return redirect(route('car-finance-payment-get', $car));
    }

    public function carCashPaymentGet(Car $car) {
        return view('car-cash-payment', [
            'car' => $car,
            'order' => Order::where('user_id', Auth::user()->id())->where('car_id', $car->id)->get()
        ]);
    }

    public function carCashPaymentPost(Request $request, Car $car) {
        $order = Http::asForm()->post('https://alroalluxurymotors.alecbulka.com/api/orders', [
            'status' => $request->status,
            'totalCost' => $request->totalCost,
        ]);
        return redirect(route('car-finance-payment-get', $car));
    }
}
