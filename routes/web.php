<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
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

// Route admin
Route::group(['middleware' =>  'isAdmin'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/product/add', [AdminController::class, 'addProduct'])->name('product.add');
    Route::put('/product/update', [AdminController::class, 'update'])->name('product.update');
    Route::delete('/product/{id}', [AdminController::class, 'delete'])->name('product.delete');
    Route::post('/admin/logout', [UserController::class, 'logoutAdmin'])->name('admin.logout');
    // Route::delete('/product/{id}', [UserController::class, 'logoutAdmin'])->name('product.delete');
});


// Route customer
Route::group(['middleware' => 'auth'], function () {
    Route::get('product/checkout', function () {
        return view('pages.checkout', ['title' => 'Checkout Page']);
    })->name('product.checkout');
    Route::get('/product', [ProductController::class, 'index'])->name('shop');
    Route::get('/product/{category:slug}', [ProductController::class, 'productByCategory']);
    Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('/payment', [OrderController::class, 'checkouted'])->name('payment');
    // Route::get('/payment/{code}', [OrderController::class, 'payment'])->name('on-payment');
    Route::patch('/payment/{order:trans_code}', [OrderController::class, 'ordered'])->name('ordered');
    Route::get('/payment/success', [OrderController::class, 'order_success'])->name('success-payment');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});


// Route guests
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [UserController::class, 'register']);
    Route::post('/register', [UserController::class, 'create']);
    Route::get('/login', [UserController::class, 'index'])->name('login');
    Route::post('/login', [UserController::class, 'login'])->name('act-login');
    Route::get('/admin', [UserController::class, 'index'])->name('admin.login');
    Route::post('/admin', [UserController::class, 'loginAdmin'])->name('admin.auth');
});



Route::get('/', [ProductController::class, 'getCategories']);
Route::get('/blank', function () {
    return view('pages.blank', ['title' => 'Blank Page']);
});
