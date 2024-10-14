<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/order', function (){
    return view ('order');
});

Route::get('/ ', function (){
    return view ('homepage');
});

Route::resource('products.index', ProductController::class);
// Route::get('/', function () { 
// Route::get('/', [ProductController::class, 'index'])->name('products.index');
// Route::get('/order/create/{id}', [OrderController::class, 'create'])->name('order.create');
// Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
// });
