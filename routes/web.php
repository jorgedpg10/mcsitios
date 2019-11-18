<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/prueba', function () {
    return view('pruebaBase64');
});

Route::get('/in', function () {
    return view('InformacionProducto');
});

Route::get('/st', function () {
    return view('soporte');
});

Route::get('/pp', function () {
    return view('politicaPrivacidad');
});

