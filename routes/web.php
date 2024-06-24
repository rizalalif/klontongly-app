<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('pages.dashboard', ['title' => 'Dashboard']);
// });
// Route::get('/', [UserController::class, 'toDashboard'])->name('dashboard');
Route::get('/login', [UserController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'login'])->name('act-login');
Route::get('/register', [UserController::class, 'register'])->middleware('guest');
Route::post('/register', [UserController::class, 'create']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('isAdmin:1');

// Route::get('/shop', );
Route::get('/checkout', function () {
    return view('pages.checkout', ['title' => 'Checkout Page']);
});
Route::get('/', [ProductController::class, 'getCategories']);
Route::get('/product', [ProductController::class, 'index'])->name('shop')->middleware('auth');
Route::get('/product/{category:slug}', [ProductController::class, 'productByCategory'])->middleware('auth');
