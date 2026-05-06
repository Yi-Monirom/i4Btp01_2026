<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaymentMethod;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/payment/{orderId}', [PaymentMethod::class, 'createQR']);
