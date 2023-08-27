<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\QFDController;
use App\Http\Controllers\QFDResultsController;
use App\Http\Controllers\PreviousController;
use App\Http\Controllers\TrackController;



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
Route::post('/notification', [App\Http\Controllers\NotificationController::class,'notification']);
Route::get('/placeorder',[OrderController::class,'index'])->name('placeorder');
Route::post('/placeorder',[OrderController::class,'orderinsert']);
Route::get('/checkout', [App\Http\Controllers\StripeController::class,'index'])->name('checkout');
Route::get('/checkout', [App\Http\Controllers\StripeController::class,'details'])->name('checkout');
Route::post('/session', [App\Http\Controllers\StripeController::class,'session'])->name('session');
Route::get('/success', [App\Http\Controllers\StripeController::class,'success'])->name('success');
Route::get('/qfd',[QFDController::class,'index'])->name('qfd');
Route::post('/qfd',[QFDController::class,'insertqfd']);
Route::get('/qfdresults',[QFDResultsController::class,'index'])->name('qfdresults');
Route::get('/qfdresults',[QFDResultsController::class,'fetch'])->name('qfdresults');
Route::post('/qfdresults',[QFDResultsController::class,'insert'])->name('qfdresults');
Route::get('/previousorder',[PreviousController::class,'index'])->name('previousorder');
Route::get('/trackorder',[TrackController::class,'index'])->name('trackorder');

