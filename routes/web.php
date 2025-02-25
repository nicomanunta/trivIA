<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('welcome');
});


// rotta per generare una domanda in base alla categoria selezionata
Route::get('/categoria/{category}', [QuizController::class, 'generateQuestion'])->name('categoria.show');




// Rotta per verificare la risposta selezionata
Route::post('/verifica-risposta', [QuizController::class, 'checkAnswer'])->name('quiz.verifica');

