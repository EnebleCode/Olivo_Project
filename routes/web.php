<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Index');
})->name('home');

Route::get('/autenticacion', function () {
    return view('Autenticacion');
})->name('Login');

Route::get('/galeria', function () {
    return view('Galeria');
})->name('Galeria');

Route::get('/productos', function () {
    return view('Productos');
})->name('Productos');

Route::get('/proveedores', function () {
    return view('Proveedores');
})->name('Proveedores');

