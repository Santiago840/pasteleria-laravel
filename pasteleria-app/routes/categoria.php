<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/categoria', function () {
    return Inertia::render('Categoria/Categoria');
})->middleware(['verified', 'auth'])->name('categoria');

Route::resource('/categorias', CategoriaController::class)
    ->only(['index', 'store', 'update', 'destroy'])
    ->middleware(['verified', 'auth']);

    