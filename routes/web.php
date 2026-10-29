<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/category', 'category');
Route::view('/journalist', 'journalist');
Route::view('/admin', 'admin');