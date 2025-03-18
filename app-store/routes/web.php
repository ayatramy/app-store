<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;

//Dashboard routes
//product controller
Route::get('products',[ProductController::class,'index']);
Route::get('products/create',[ProductController::class,'create']);
Route::post('products/store',[ProductController::class,'store']);
Route::get('products/delete/{id}',[ProductController::class,'destroy']);
Route::get('products/edit/{id}',[ProductController::class,'edit']);
Route::patch('products/update/{id}',[ProductController::class,'update']);

//category controller
Route::get('categories',[CategoryController::class,'index']);
Route::get('categories/create',[CategoryController::class,'create']);
Route::post('categories/store',[CategoryController::class,'store']);
Route::get('categories/delete/{id}',[CategoryController::class,'destroy']);
Route::get('categories/edit/{id}',[CategoryController::class,'edit']);
Route::patch('categories/update/{id}',[CategoryController::class,'update']);


// Frontend page routes
Route::get('/', [FrontController::class,'index']);

// Route::get('/', [ProductController::class, 'index']);
Route::get('/filter', [ProductController::class, 'filter'])->name('products.filter');

