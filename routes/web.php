<?php
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/product', 'product');
Route::view('/news', 'news');
Route::view('/program', 'program');
Route::view('/about-us', 'about-us');
Route::view('/contact-us', 'contact-us');
