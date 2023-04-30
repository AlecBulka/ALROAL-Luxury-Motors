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

//Login, Register, Forgot Pasword
require __DIR__.'/auth.php';


//Main Routes
Route::get('/', function () {
    return view('home');
});

Route::get('/buy-cars', function () {
    return view('buy-cars');
});

Route::get('/car-details', function () {
    return view('car-details');
});

Route::get('/sell-cars', function () {
    return view('sell-cars');
});

Route::get('/tunning', function () {
    return view('tunning');
});

Route::get('/contact', function () {
    return view('contact');
});


// User Routes
Route::get('/user/dashboard', function () {
    return view('user/dashboard');
});

Route::get('/user/account', function () {
    return view('user/view');
});

Route::get('/user/saved-cars', function () {
    return view('user/saved-cars');
});


//Employee Routes
Route::get('/employee/view-cars', function () {
    return view('employee/view-cars');
});

Route::get('/employee/add-car', function () {
    return view('employee/employee-dashboard-add-car');
});

Route::get('/employee/edit-car', function () {
    return view('employee/employee-dashboard-edit-car');
});


//Admin Routes
Route::get('/admin/view-cars', function () {
    return view('admin/view-cars');
});

Route::get('/admin/add-car', function () {
    return view('admin/admin-dashboard-add-car');
});

Route::get('/admin/edit-car', function () {
    return view('admin/admin-dashboard-edit-car');
});

Route::get('/admin/view-users', function () {
    return view('admin/view-users');
});

Route::get('/admin/add-user', function () {
    return view('admin/add-user');
});

Route::get('/admin/edit-user', function () {
    return view('admin/edit-user');
});






/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

/*Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/
