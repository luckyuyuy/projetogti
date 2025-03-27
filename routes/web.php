<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/criar-conta', function () {
    return view('criar-conta');
});
Route::get('/soma/{num1}/{num2}', function ($num1, $num2) {
    return 'soma atual é: '.$num1 + $num2; 
});
