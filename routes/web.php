<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StripeController;



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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/placeorder',[OrderController::class,'index'])->name('placeorder');
Route::post('/placeorder',[OrderController::class,'orderinsert']);
Route::get('/checkout', [App\Http\Controllers\StripeController::class,'index'])->name('checkout');
Route::get('/checkout', [App\Http\Controllers\StripeController::class,'details'])->name('checkout');
Route::post('/session', [App\Http\Controllers\StripeController::class,'session'])->name('session');
Route::get('/success', [App\Http\Controllers\StripeController::class,'success'])->name('success');
// Route::get('/checkout',[App\Http\Controllers\StripeController::class,'session']);
Route::get('/qfd',[OrderController::class,'qfd'])->name('qfd');
Route::post('/qfd',[OrderController::class,'insertqfd'])->name('qfd');
