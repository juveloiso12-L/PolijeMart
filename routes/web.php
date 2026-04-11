<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware('admin')->group(function (){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.admin');
    Route::get('/inventory', [AdminController::class, 'inventory'])->name('admin.inventory');
    Route::get('/inventory/addData', [AdminController::class, 'addData'])->name('admin.addData');
    Route::post('/inventory/addData/storeData', [AdminController::class, 'storeData'])->name('admin.storeData');
});

Route::middleware('user')->group(function (){
    Route::get('/customer', [UserController::class, 'index'])->name('customer.index');
});

require __DIR__.'/auth.php';
