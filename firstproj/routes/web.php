<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [HomeController::class, 'index']);
Route::get('/post/{id}', [HomeController::class, 'show']);
Route::get('/form', [FormController::class, 'index']);
Route::post('/form/submit', [FormController::class, 'dataPrint']);
