<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/coba', function () {
    return view('coba');
});

Route::get('/gempa', function () {
    return view('gempa');
}); 

Route::get('/beranda', [BerandaControkker::class, 'index'])   
 -> name ('beranda');