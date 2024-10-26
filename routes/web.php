<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuCliente;
use App\Http\Controllers\Login;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MenuCliente::class, 'index'])->name('inicio');
Route::get('/productos', [MenuCliente::class, 'productos'])->name('productos');
Route::get('/nosotros', [MenuCliente::class, 'nosotros'])->name('nosotros');
Route::get('/contacto', [MenuCliente::class, 'contacto'])->name('contacto');
Route::get('/login', [MenuCliente::class, 'login'])->name('login');



Route::post('/admin/inicio', [Login::class, 'inicio'])->name('loginAdmin');
