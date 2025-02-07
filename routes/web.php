<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\SignupController;

Route::get('/', [HomeController::class,'index'])->name('home');



Route::view('/about', 'about')->name('about');

Route::get('/signup', [SignupController::class,'create']);

