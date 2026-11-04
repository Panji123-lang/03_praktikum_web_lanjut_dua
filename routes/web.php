<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::view('/', 'home');
Route::view('/product', 'product');
Route::get('/news', [PostController::class, 'index']);
Route::view('/program', 'program');
Route::view('/about-us', 'about-us');
Route::view('/contact-us', 'contact-us');

