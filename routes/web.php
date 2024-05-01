<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main_Controller;

// Main Landing Page
Route::get('/', [Main_Controller::class, 'index'])->name(name:'index');

// About Page
Route::get('/about', [Main_Controller::class, 'about'])->name(name:'about');

// FAQ
Route::get('/faq', [Main_Controller::class, 'faq'])->name(name:'faq');

// Page not found
Route::get('/pagenotfound', [Main_Controller::class, 'pagenotfound'])->name(name:'pagenotfound');

// Login
Route::get('/login', [Main_Controller::class, 'login'])->name(name:'login');
Route::post('/login', [Main_Controller::class, 'loginPost'])->name(name:'login.post');


// Register
Route::get('/register', [Main_Controller::class, 'register'])->name(name:'register');
Route::post('/register', [Main_Controller::class, 'registerPost'])->name(name:'register.post');