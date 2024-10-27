<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/product', function () {
    return view('product_detail');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

