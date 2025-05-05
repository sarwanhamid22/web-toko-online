<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/produk', 'product-index')->name('product.index');


Route::get('/produk/{slug}', function ($slug) {
    return view('product-show', ['slug' => $slug]);
})->name('produk.show');

Route::get('/keranjang', function () {
    return view('cart');
})->name('cart');


Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::view('/checkout-selesai', 'checkout-success')->name('checkout.success');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');


Route::view('/akun', 'account')->name('account');

Route::view('/login', 'login')->name('login');


Route::get('/lacak-pesanan', function () {
    return view('order-track');
})->name('orderTrack');
