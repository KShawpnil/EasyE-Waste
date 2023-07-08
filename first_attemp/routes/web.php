<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FormController;
use App\Models\Form;

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


Route::resource('qfd',ProductController::class);

Route::get('/create', [FormController::class, 'index']);

Route::post('/create', [FormController::class, 'create']);

// Route::get('/form', function () {
//     $form = Form::all();
//     echo "<pre>";
//     print_r($form->toArray());
// });

// Route::get('/form', [Form2Controller::class, 'index']);

// Route::post('/form', [Form2Controller::class, 'store']);

// Route::post('/create', function () {
//     $form = new Form();
//     $form->product_name = request('product_name');
//     $form->product_type = request('product_type');
//     $form->product_quantity = request('product_quantity');
//     $form->endproduct = request('endproduct');
//     $form->save();
// });