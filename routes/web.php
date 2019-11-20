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


Route::get('/{pais}/informacion/{token}','InformacionController@index');

Route::get('/st', function () {
    return view('soporte');
});

Route::get('/{pais}/politica-de-privacidad/{token}','PoliticaController@index');

Route::get('/pp', function () {
    return view('politicaPrivacidad');
});

