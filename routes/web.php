<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/cart', function () {
    return '<h1 style="text-align:center;margin-top:100px;">🛒 Keranjang kamu masih kosong nih 😭</h1>';
});


Route::get('/bts-lightstick', function () {
    return view('bts');
});

Route::get('/blackpink-album', function () {
    return view('blackpink');
});

Route::get('/straykids-poster', function () {
    return view('straykids');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/shop', function () {
    return view('shop');
});

use App\Http\Controllers\CartController;

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
