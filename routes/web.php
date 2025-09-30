<?php


use App\Http\Controllers\Admin\DriverController as AdminDriverController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('adminDashboard');
    // Drivers CRUD routes
    Route::resource('/admin/drivers',AdminDriverController::class);
 

});

Route::middleware(['auth', 'role:driver'])->group(function () {
    Route::get('/driver/dashboard', [DriverController::class, 'dashboard']);
});

Route::middleware(['auth', 'role:user'])->group(function () {});

Route::get('/', [UserController::class, 'index'])->name('home');
Route::view('/map','website.map.map')->name('map');
Route::get('/nearby-drivers', [DriverController::class, 'nearbyDrivers']);



require __DIR__ . '/auth.php';
