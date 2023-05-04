<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;
use App\Models\Saved;

class SavedController extends Controller
{

    public function index()
    {
        return view('user.saved-cars', [
            'cars' => Car::all()
        ]);
    }

    public function save(Request $request, Car $car) {
        $validated = ['car_id' => $car->id];
        $request->user()->saveds()->create($validated);
        return redirect(route('car-details', $car));
    }

    public function removeSave(Request $request, Car $car) {
        $validated = ['car_id' => $car->id];
        $request->user()->saveds()->where('car_id', $car->id)->delete();
        return redirect(route('car-details', $car));
    }
}
