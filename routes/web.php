<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;

Route::view('/', 'products');
Route::get('/','ProductController@index')->name('products');
Route::get('/cart','ProductController@cart')->name('cart');
Route::get('/add-to-cart/{product}','ProductController@addToCart')->name('add-cart');
Route::get('/remove/id','ProductController@removeFromCart')->name('remove');

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login/auth', 'LoginController@loginauth')->name('logAuth');

Route::get('/register', [RegisterController::class, 'register'])->name('register');

//Buat masukkin data ke database
Route::get('/admin', [AdminController::class, 'admin']);
Route::post('/create-admin', [AdminController::class, 'createAdmin']);

//Buat read data yang ada di database
Route::get('/read-admin', [AdminController::class, 'readAdmin']);


Route::get('/edit-admin/{id}', [AdminController::class, 'editAdmin']);
Route::patch('update-admin/{id}', [AdminController::class, 'updateAdmin']);


Route::delete('/delete-admin/{id}', [AdminController::class, 'deleteAdmin']);
