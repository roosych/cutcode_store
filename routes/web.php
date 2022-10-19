<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function(){
//   return logger()->channel('telegram')->debug('salam');
//});

Route::get('/', function() {
    return view('index');
});

Route::get('/catalog', function () {
    return view('catalog.index');
});

Route::get('/product/1', function () {
    return view('products.item');
});

Route::get('/cart', function () {
    return view('cart.index');
});

Route::get('/checkout', function () {
    return view('cart.checkout');
});

Route::get('/orders', function () {
    return view('orders.index');
});

Route::get('/orders/1', function () {
    return view('orders.item');
});

Route::get('/account', function () {
    return view('account.index');
});

Route::get('/search', function () {
    return view('search');
});
