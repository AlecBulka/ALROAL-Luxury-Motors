<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|string|max:45',
            'horsepower'=>'required|string|max:45',
            'torque'=>'required|string|max:45',
            'consumption'=>'required|numeric',
            'topSpeed'=>'required|integer',
            'acceleration'=>'required|numeric',
            'motor'=>'required|string|max:45',
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
        ]);

        Car::create($validated);

        return redirect(route());

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'name'=>'string|max:45',
            'horsepower'=>'string|max:45',
            'torque'=>'string|max:45',
            'consumption'=>'numeric',
            'topSpeed'=>'integer',
            'acceleration'=>'numeric',
            'motor'=>'string|max:45',
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

        return redirect(route());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect(route());
    }
}
