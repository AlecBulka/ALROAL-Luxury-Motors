<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Car;
use App\Models\Carmodel;
use App\Models\Carbrand;
use App\Models\User;
use App\Models\Role;
use App\Models\Billing;

class AdminController extends Controller
{
    public function viewCars()
    {
        $cars = Car::all();
        return view('admin.view-cars', [
            'cars' => $cars
        ]);
    }

    public function createCars()
    {
        return view('admin.add-car', [
            'brands' => $brands = Carbrand::all(),
            'models' => $models = Carmodel::all()
        ]);
    }

    public function storeCars(Request $request)
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
        ]);

        $validated['isSold'] = false;

        Car::create($validated);

        return redirect(route('admin-view-cars'));

    }

    public function editCars(Car $car)
    {
        return view('admin.edit-car', [
            'car' => $car,
            'brands' => $brands = Carbrand::all(),
            'models' => $models = Carmodel::all()
        ]);
    }

    public function updateCars(Request $request, Car $car)
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

        return redirect(route('admin-view-cars'));
    }

    public function destroyCars(Car $car)
    {
        $car->delete();

        return redirect(route('admin-view-cars'));
    }











    public function viewUsers()
    {
        $users = User::all();
        return view('admin.view-users', [
            'users' => $users
        ]);
    }

    public function createUsers()
    {
        return view('admin.add-user', [
            'roles' => $roles = Role::all()
        ]);
    }

    public function storeUsers(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'phoneNumber' => 'required|integer',
            'role_id' => 'required|integer',
            'address' => 'required|string',
            'city' => 'required|string',
            'province' => 'required|string',
            'postalCode' => 'required|string',
            'country' => 'required|string',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phoneNumber' => $request->phoneNumber,
            'role_id' => $request->role_id,
        ]);

        Billing::create([
            'address' => $request->address,
            'city' => $request->city,
            'province' => $request->province,
            'postalCode' => $request->postalCode,
            'country' => $request->country,
            'user_id' => $user->id
        ]);

        return redirect(route('admin-view-users'));

    }

    public function editUsers(User $user)
    {
        return view('admin.edit-user', [
            'user' => $user,
            'roles' => $roles = Role::all()
        ]);
    }

    public function updateUsers(Request $request, User $user)
    {
        //dd($request);
        $userValidated = $request->validate([
            'name' => 'string',
            'email' => 'email',
            'password' => 'string',
            'phoneNumber' => 'integer',
            'role_id' => 'integer',
        ]);

        $billingValidated = $request->validate([
            'address' => 'string',
            'city' => 'string',
            'province' => 'string',
            'postalCode' => 'string',
            'country' => 'string',
        ]);

        $user->update($userValidated);

        $user->billing->update($billingValidated);

        return redirect(route('admin-view-users'));
    }

    public function destroyUsers(User $user)
    {
        $user->delete();

        return redirect(route('admin-view-users'));
    }

}
