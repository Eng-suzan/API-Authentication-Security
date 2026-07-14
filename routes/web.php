<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/payment', [PaymentController::class, 'index'])->name('payment');

Route::post('/payment', [PaymentController::class, 'process'])->name('payment.process');
