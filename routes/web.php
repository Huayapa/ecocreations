<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});
Route::get('productos', function () {
    return view('productos');
});
