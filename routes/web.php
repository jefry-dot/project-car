<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $person = [
        'name' => 'John Doe',
        'email' => 'n6OYI@example.com',
    ];

    return view('welcome', compact('person'));
});

Route::get('/about', function () {  
    return view('about');
});
