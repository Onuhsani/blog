<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminRegistrationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view("home");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/admin/addblogpost', function(){
    return view('addpost');
});

Route::get('/admin/viewblogpost', function(){
    return view('viewpost');
});

Route::get('/admin', function(){
    return view('admin.dashboard');
});


Route::get('/admin/register', [AdminRegistrationController::class, 'create'])->name('admin.create');
Route::post('/admin/register', [AdminRegistrationController::class, 'register'])->name('admin-register');
Route::get('/admin/logout', [AdminRegistrationController::class, 'destroy'])->name('admin.logout');

Route::get('/admin/categories', [CategoryController::class, 'index'])->name('category-index');
Route::get('/admin/categories/create-category', [CategoryController::class, 'create'])->name('create-category');
Route::post('/admin/categories/create-category', [CategoryController::class, 'store'])->name('store-category');
Route::get('/admin/categories/update-category/{category}', [CategoryController::class, 'edit'])->name('edit-category');
Route::patch('/admin/categories/update-category/{category}', [CategoryController::class, 'update'])->name('update-category');
Route::delete('/admin/categories/delete-category/{category}', [CategoryController::class, 'destroy'])->name('delete-category');


require __DIR__.'/auth.php';