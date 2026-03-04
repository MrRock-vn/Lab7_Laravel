<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'list']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

// {n} là tham số động trên URL
Route::get('/bang-cuu-chuong/{n}', [HomeController::class, 'multiplication']);
