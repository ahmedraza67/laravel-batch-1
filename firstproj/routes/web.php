<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [HomeController::class, 'index']);
Route::get('/post/{id}', [HomeController::class, 'show']);
Route::get('/form', [FormController::class, 'index']);
Route::post('/form/submit', [FormController::class, 'dataPrint']);



Route::get('/products', [ProductController::class, 'index']);
Route::get('/product', [ProductController::class, 'create']);

Route::post('/addproduct', [ProductController::class, 'store']);


Route::get('/post', [PostController::class, 'create']);
