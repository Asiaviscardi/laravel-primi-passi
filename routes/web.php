<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $saluto = 'Hello World';
    return view('home', compact('saluto'));
});

Route::get('/about', function () {
    $salutoAbout = 'Hello About';
    return view('about', compact('salutoAbout'));
});
