<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

// Route to store the product after form submission
Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
