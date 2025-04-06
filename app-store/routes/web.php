<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductcategoryController;
use Illuminate\Support\Facades\Auth;

//Dashboard routes

// Route::prefix('admin')->group(function () {
//     Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
//     Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
// });
// Route::middleware(['auth'])->prefix('admin')->group(function () {
//     Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
//     Route::post('products/store', [ProductController::class, 'store'])->name('products.store');

// });


Route::prefix('admin')->group(function() {

    //product controller
    Route::get('products', [ProductController::class, 'index'])->name('products.index');
    Route::post('products/store', [ProductController::class, 'store'])->name('product_store');
    Route::get('admin/products/create', [ProductController::class, 'create'])->name('products.create');
    // Route::post('admin/products/create', [ProductController::class, 'create'])->name('products.create');
    // Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('products/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
    // Route::patch('products/update/{id}', [ProductController::class, 'update'])->name('product_update');
    Route::patch('products/update/{id}', [ProductController::class, 'update'])->name('product_update');

    //category controller
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('categories/store', [CategoryController::class, 'store'])->name('category_store');
    Route::get('categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::get('categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::patch('categories/update/{id}', [CategoryController::class, 'update'])->name('category_update');

});

// Route::prefix('admin')->group(function(){

//     // Route::post('/products', [ProductController::class, 'store'])->name('products.store');

//     Route::get('/admin/products', [ProductController::class, 'index']);
//     Route::get('/admin/products/create', [ProductController::class, 'create'])->name('product_create');
//     Route::post('admin/products/store', [ProductController::class, 'store'])->name('product.store');
//     Route::get('admin/products/delete/{id}', [ProductController::class, 'destroy'])->name('product_destroy');
//     Route::get('admin/products/edit/{id}', [ProductController::class, 'edit'])->name('product_edit');
//     Route::patch('admin/products/update/{id}', [ProductController::class, 'update'])->name('product_update');

//     //category controller
//     Route::get('categories', [CategoryController::class, 'index']);
//     Route::get('categories/create', [CategoryController::class, 'create']);
//     Route::post('categories/store', [CategoryController::class, 'store']);
//     Route::get('categories/delete/{id}', [CategoryController::class, 'destroy']);
//     Route::get('categories/edit/{id}', [CategoryController::class, 'edit']);
//     Route::patch('categories/update/{id}', [CategoryController::class, 'update']);

// });


// Frontend page routes
Route::get('/', [FrontController::class,'index']);

// Route::get('/', [ProductController::class, 'index']);
Route::get('/filter', [ProductController::class, 'filter'])->name('products.filter');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('product_category',[ProductcategoryController::class,'index']);
// Route::get('product_category', function () {
//     return view('product_category'); // يشير إلى ملف العرض mypage.blade.php
// });
