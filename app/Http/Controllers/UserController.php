<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function dashboard(Request $request) {
        return view('user.dashboard', [
            'user' => $user = $request->user()
        ]);
    }

    public function account(Request $request) {
        return view('user.account', [
            'user' => $user = $request->user()
        ]);
    }

    public function updatePersonalDetails(Request $request) {
        $validated = $request->validate([
            'name' => 'string',
            'email' => 'email',
            'phoneNumber' => 'integer'
        ]);

        $request->user()->update($validated);

        return redirect(route('user-account'));
    }

    public function updateBillingDetails(Request $request) {
        $validated = $request->validate([
            'address' => 'required|string',
            'city' => 'required|string',
            'province' => 'required|string',
            'postalCode' => 'required|string',
            'country' => 'required|string',
        ]);

        $request->user()->billing()->update($validated);

        return redirect(route('user-account'));
    }

    public function updatePassword(Request $request) {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return redirect(route('user-account'));
    }

    public function destroy(User $user)
    {
        Auth::logout();

        $user->delete();

        return redirect(route('home'));
    }
}
