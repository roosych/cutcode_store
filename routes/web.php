<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

//Route::get('/', function() {
//    //logger()->channel('telegram')->debug('');
//    return view('index');
//});

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

Route::get('/', HomeController::class)->name('index');

Route::controller(AuthController::class)->group(function(){

    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');

    // страница ввода емейла auth.forgot-password
    Route::get('/forgot-password', 'passwordRequest')
        ->middleware('guest')
        ->name('passwordRequest');

    // обработчик отправки письма на странице auth.forgot-password
    Route::post('/forgot-password', 'forgotPassword')
        ->middleware('guest')
        ->name('forgotPassword');

    //страница после клика по ссылке в письме
    Route::get('/reset-password/{token}', 'passwordReset')
        ->middleware('guest')
        ->name('password.reset');

    //установка нового пароля
    Route::post('/reset-password', 'passwordUpdate')
        ->middleware('guest')
        ->name('passwordUpdate');

    Route::get('/auth/socialite/github', 'github')
        ->name('socialite.github');

    Route::get('/auth/socialite/github/callback', 'githubCallback')
        ->name('githubCallback');


    Route::delete('/logout', 'logout')->name('logout');

    Route::post('/login', 'signIn')->name('signIn');
    Route::post('/register', 'signUp')->name('signUp');


});

