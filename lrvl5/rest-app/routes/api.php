<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;

//Route::post('register', [RegisterController::class, 'register']);

Route::post('products', [ProductController::class, 'addProduct'])->name('products.addProduct1');
Route::get('products/add', [ProductController::class, 'addProductGet'])->name('products.addProduct');
Route::get('products', [ProductController::class, 'showAll'])->name('products.readProducts');
Route::get('products/{id}', [ProductController::class, 'showById'])->name('products.showById');
Route::post('products/{id}', [ProductController::class, 'updateProduct'])->name('products.updateProduct');
Route::delete('products/{id}', [ProductController::class, 'deleteById'])->name('products.deleteById');

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:api');
