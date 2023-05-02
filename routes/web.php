<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;

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
})->name('home');

Route::get('/buy-cars', [CarController::class, 'index'])->name('buy-cars');

Route::get('/car/{car}', [CarController::class, 'show'])->name('car-details');

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
    return view('user.dashboard', [
        'user' => Auth::user()
    ]);
});

Route::get('/user/account', function () {
    return view('user.account', [
        'user' => Auth::user()
    ]);
});

Route::get('/user/saved-cars', function () {
    return view('user.saved-cars');
});


//Employee Routes
Route::get('/employee/view-cars', [EmployeeController::class, 'index'])->name('employee-view-cars');

Route::get('/employee/add-car', [EmployeeController::class, 'create'])->name('employee-add-cars');

Route::post('/employee/add-car', [EmployeeController::class, 'store'])->name('employee-store-cars');

Route::get('/employee/edit-car/{car}', [EmployeeController::class, 'edit'])->name('employee-edit-cars');

Route::put('/employee/edit-car/{car}', [EmployeeController::class, 'update'])->name('employee-update-cars');

Route::delete('/employee/delete-car/{car}', [EmployeeController::class, 'destroy'])->name('employee-delete-cars');




//Admin Routes
Route::get('/admin/view-cars', [AdminController::class, 'viewCars'])->name('admin-view-cars');

Route::get('/admin/add-car', [AdminController::class, 'createCars'])->name('admin-add-cars');

Route::post('/admin/add-car', [AdminController::class, 'storeCars'])->name('admin-store-cars');

Route::get('/admin/edit-car/{car}', [AdminController::class, 'editCars'])->name('admin-edit-cars');

Route::put('/admin/edit-car/{car}', [AdminController::class, 'updateCars'])->name('admin-update-cars');

Route::delete('/admin/delete-car/{car}', [AdminController::class, 'destroyCars'])->name('admin-delete-cars');





Route::get('/admin/view-users', [AdminController::class, 'viewUsers'])->name('admin-view-users');

Route::get('/admin/add-user', [AdminController::class, 'createUsers'])->name('admin-add-users');

Route::post('/admin/add-user', [AdminController::class, 'storeUsers'])->name('admin-store-users');

Route::get('/admin/edit-user/{user}', [AdminController::class, 'editUsers'])->name('admin-edit-users');

Route::put('/admin/edit-user/{user}', [AdminController::class, 'updateUsers'])->name('admin-update-users');

Route::delete('/admin/delete-user/{user}', [AdminController::class, 'destroyUsers'])->name('admin-delete-users');






/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

/*Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/
