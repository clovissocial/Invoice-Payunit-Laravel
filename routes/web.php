<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController; 
use App\Http\Controllers\PaymentController; 
use App\Http\Controllers\PayInvoiceController; 


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

Route::get('/', [PagesController::class, 'index']);
Route::post('/makePayment', [PayInvoiceController::class, 'donatePayment'])->name('total_amount');


Route::resource('/invoice', PostsController::class);
Route::resource('/payment', PaymentController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

