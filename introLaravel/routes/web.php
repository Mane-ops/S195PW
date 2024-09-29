<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','welcome');

Route::view('/Formulario','formulario')->name('formulario');
Route::view('/inicio','inicio')->name('inicio');
Route::view('/ConsultaClientes','consultaClientes')->name('consultaClientes');
