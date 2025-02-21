<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('welcome');
});


// rotta per generare una domanda in base alla categoria selezionata
Route::get('/quiz/{category}', [QuizController::class, 'generateQuestion']);
