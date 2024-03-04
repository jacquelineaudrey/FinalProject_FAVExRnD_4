<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'products');
Route::get('/','ProductController@index')->name('products');
Route::get('/cart','ProductController@cart')->name('cart');
Route::get('/add-to-cart/{product}','ProductController@addToCart')->name('add-cart');
Route::get('/remove/id','ProductController@removeFromCart')->name('remove');

Route::get('/login', 'LoginController@login');
Route::post('/login/auth', 'LoginController@loginauth')->name('logAuth');