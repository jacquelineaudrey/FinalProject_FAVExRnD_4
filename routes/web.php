<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::view('/', 'products');
Route::get('/','ProductController@index')->name('products');
Route::get('/cart','ProductController@cart')->name('cart');
Route::get('/add-to-cart/{product}','ProductController@addToCart')->name('add-cart');
Route::get('/remove/id','ProductController@removeFromCart')->name('remove');

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login/auth', 'LoginController@loginauth')->name('logAuth');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
