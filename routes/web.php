<?php

use App\Http\Controllers\Admin\Account\PasswordController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Employee\EmployeeMainController;
use App\Http\Controllers\Manager\ManagerMainCtroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Supplier\SupplierMainController;
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

// User
Route::get('/', function () {
    return view('client.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Admin
Route::prefix('/admin')->middleware(['auth','role:admin'])->group(function(){
    Route::get('/',[MainController::class,'dashboard']);
    Route::get('/dashboard',[MainController::class,'dashboard'])->name('admin.dashboard');
    // profile
    
    Route::get('/profile', [ProfileController::class, 'adminEdit'])->name('admin.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'adminUpdate'])->name('admin.profile.update');
    Route::delete('/profile', [ProfileController::class, 'adminDestroy'])->name('admin.profile.destroy');
    // password
    Route::put('/password', [PasswordController::class, 'adminUpdatePassword'])->name('admin.password.update');



});

// Manager
Route::middleware(['auth','role:manager'])->group(function(){
    Route::get('manager/dashboard',[ManagerMainCtroller::class,'dashboard'])->name('manager.dashboard');
});
// Employee
Route::middleware(['auth','role:employee'])->group(function(){
    Route::get('employee/dashboard',[EmployeeMainController::class,'dashboard'])->name('employee.dashboard');
});

Route::middleware(['auth','role:supplier'])->group(function(){
    Route::get('supplier/dashboard',[SupplierMainController::class,'dashboard'])->name('supplier.dashboard');
});
