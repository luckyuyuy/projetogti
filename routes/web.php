<?php

use App\Models\User;
use iLLuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/criar-conta', function () {
    return view('criar-conta');
}); 
Route::post('/salvar-conta', function (request $request) {
    //dd($request);
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->save();

    return "usuarip salvo com sucesso";
})->name('salvar-conta');

Route::get('/soma/{num1}/{num2}', function ($num1, $num2) {
    return 'soma atual é: '.$num1 + $num2; 
});
