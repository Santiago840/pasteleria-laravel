<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/categoria', function () {
    return Inertia::render('Categoria/Categoria');
})->middleware(['verified', 'auth'])->name('categoria');

Route::get('/agregarCategoria', function(){
    return Inertia::render('Categoria/AgregarCategoria');
})->middleware(['auth', 'verified'])->name('agregarCategoria');

Route::get('/editarCategoria', function(){
    return Inertia::render('Categoria/EditarCategoria');
})->middleware(['auth', 'verified'])->name('editarCategoria');

Route::resource('/categorias', CategoriaController::class)
    ->only(['index', 'store', 'update', 'destroy'])
    ->middleware(['verified', 'auth']);

