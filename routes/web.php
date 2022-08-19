<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminRegistrationController;

require __DIR__.'/auth.php';

Route::middleware(['auth'])
    ->group(function(){
        Route::get('/home', function () {
            return view("home");
        })->name('home');
        
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

Route::middleware(['auth'])
    ->prefix('admin')
    ->group(function(){
        Route::get('/', [AdminRegistrationController::class, 'index'])->name('admin.index');
        Route::get('/register', [AdminRegistrationController::class, 'create'])->name('admin.create');
        Route::post('/register', [AdminRegistrationController::class, 'register'])->name('admin-register');
        Route::get('/logout', [AdminRegistrationController::class, 'destroy'])->name('admin.logout');

        Route::get('/categories', [CategoryController::class, 'index'])->name('category-index');
        Route::get('/categories/create-category', [CategoryController::class, 'create'])->name('create-category');
        Route::post('/categories/create-category', [CategoryController::class, 'store'])->name('store-category');
        Route::get('/categories/update-category/{category}', [CategoryController::class, 'edit'])->name('edit-category');
        Route::patch('/categories/update-category/{category}', [CategoryController::class, 'update'])->name('update-category');
        Route::delete('/categories/delete-category/{category}', [CategoryController::class, 'destroy'])->name('delete-category');
});