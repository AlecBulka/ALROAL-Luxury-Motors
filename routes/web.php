<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/buy-cars', function () {
    return view('buy-cars');
});

Route::get('/sell-cars', function () {
    return view('sell-cars');
});

Route::get('/view-users', function () {
    return view('admin/view-users');
});

Route::get('/admin-dashboard-add-car', function () {
    return view('admin-dashboard-add-car');
});

Route::get('/tunning', function () {
    return view('tunning');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/user-dashboard', function () {
    return view('user/dashboard');
});

Route::get('/user-view', function () {
    return view('user/view');
});

Route::get('/car-details', function () {
    return view('car-details');
});

Route::get('/saved-cars', function () {
    return view('user/saved-cars');
});

Route::get('/add-user', function () {
    return view('admin/add-user');
});

Route::get('/edit-user', function () {
    return view('admin/edit-user');
});

Route::get('/admin-dashboard-add-car', function () {
    return view('admin/admin-dashboard-add-car');
});

Route::get('/admin-dashboard-edit-car', function () {
    return view('admin/admin-dashboard-edit-car');
});

Route::get('/employee-dashboard-add-car', function () {
    return view('employee/employee-dashboard-add-car');
});

require __DIR__.'/auth.php';
