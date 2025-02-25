<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});


// rotta per generare una domanda in base alla categoria selezionata
Route::get('/quiz/{category}', [QuizController::class, 'generateQuestion']);




Route::get('/categoria/sport', [CategoryController::class, 'sport'])->name('categoria.sport');
Route::get('/categoria/musica', [CategoryController::class, 'musica'])->name('categoria.musica');
