<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Carmodel;
use App\Models\Carbrand;

class EmployeeController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('employee.view-cars', [
            'cars' => $cars
        ]);
    }

    public function create()
    {
        return view('employee.add-car', [
            'brands' => $brands = Carbrand::all(),
            'models' => $models = Carmodel::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|string|max:45',
            'horsepower'=>'required|integer',
            'torque'=>'required|integer',
            'consumption'=>'required|numeric',
            'topSpeed'=>'required|integer',
            'acceleration'=>'required|numeric',
            'engine'=>'required|string|max:45',
            'wheels'=>'required|string|max:45',
            'tires'=>'required|string|max:45',
            'driveTrain'=>'required|string|max:45',
            'gearbox'=>'required|string|max:45',
            'exterior'=>'required|string|max:45',
            'interior'=>'required|string|max:45',
            'kilometers'=>'required|integer',
            'price'=>'required|numeric',
            'carmodel_id'=>'required|integer',
            'carbrand_id'=>'required|integer',
            'year'=>'required|integer',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:5120',
        ]);

        $imageName = date('Y-m-d').'-'.$request->image->getClientOriginalName();

        $request->image->move(public_path('img/cars'), $imageName);

        $validated['isSold'] = false;

        $validated['image'] = $imageName;

        Car::create($validated);

        return redirect(route('employee-view-cars'));

    }

    public function edit(Car $car)
    {
        return view('employee.edit-car', [
            'car' => $car,
            'brands' => $brands = Carbrand::all(),
            'models' => $models = Carmodel::all()
        ]);
    }

    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'name'=>'string|max:45',
            'horsepower'=>'integer',
            'torque'=>'integer',
            'consumption'=>'numeric',
            'topSpeed'=>'integer',
            'acceleration'=>'numeric',
            'engine'=>'string|max:45',
            'wheels'=>'string|max:45',
            'tires'=>'string|max:45',
            'driveTrain'=>'string|max:45',
            'gearbox'=>'string|max:45',
            'exterior'=>'string|max:45',
            'interior'=>'string|max:45',
            'kilometers'=>'integer',
            'price'=>'numeric',
            'carmodel_id'=>'integer',
            'carbrand_id'=>'integer',
            'year'=>'integer',
        ]);

        $car->update($validated);

        return redirect(route('employee-view-cars'));
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return redirect(route('employee-view-cars'));
    }
}
