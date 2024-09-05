<?php

use App\Http\Controllers\CheckoutController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/auth',[UserController::class,'auth']);
Route::get('/user',[UserController::class,'user']);
Route::get('/keranjang',[UserController::class,'keranjang']);
Route::get('/products',[UserController::class,'products']);
Route::get('/checkout', [UserController::class, 'checkoutForm'])->name('checkout.index');
Route::post('/checkout', [UserController::class, 'checkoutSuccess'])->name('checkout.store');
Route::get('/orders', [UserController::class, 'orders'])->name('checkout.orders');
Route::get('/checkout/{id}', [CheckoutController::class, 'show'])->name('checkout.user');
Route::post('/checkout/{id}', [CheckoutController::class, 'store'])->name('checkout.store');
// Route::get('/confirm', [UserController::class, 'confirm']);
Route::post('/confirm', [UserController::class, 'confirm']);



