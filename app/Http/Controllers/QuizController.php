<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuizController extends Controller
{
    public function generateQuestion($category){





        // COMMENTO CHIAMATA API

        // // recupero la chiave API dal file services.php
        // $apiKey = config('services.openai.key');

        // // richiesta API per ottenere una domanda
        // $response = Http::withHeaders([

        //     // autorizzazione con la chiave API per accederci
        //     'Authorization' => "Bearer $apiKey",

        //     // richiesta in formato JSON
        //     'Content-Type' => 'application/json',

        // ])->post('https://api.openai.com/v1/chat/completions', [

        //     'model' => 'gpt-3.5-turbo', //modello openai gratuito 

        //     //messaggi da usare come contesto
        //     'messages' => [
        //         ['role' => 'system', 'content' => 'Sei un generatore di quiz. Rispondi sempre in JSON.'],
        //         ['role' => 'user', 'content' => "Genera una domanda a risposta multipla sulla categoria $category con 4 opzioni. Formatta come JSON: {\"question\": \"...\", \"options\": [\"A\", \"B\", \"C\", \"D\"], \"answer\": \"...\"}"],
        //     ],
        //     'temperature' => 0.7, // controllo della creatività del modello
        // ]);

        // $apiResponse = $response->json();

        // // verifica che la risposta sia valida
        // if (isset($apiResponse['choices'][0]['message']['content'])) {
        //     $quizData = json_decode($apiResponse['choices'][0]['message']['content'], true);

        //     // verifica se il parsing JSON ha avuto successo
        //     if (!is_array($quizData) || !isset($quizData['question']) || !isset($quizData['options']) || !isset($quizData['answer'])) {
        //         return back()->with('error', 'Errore nella generazione della domanda');
        //     }

        //     // Mappa i nomi delle categorie ai file Blade corretti
        //     $categoryViews = [
        //         'geografia' => 'geography',
        //         'spettacolo' => 'entertainment',
        //         'storia' => 'history',
        //         'letteratura' => 'literature',
        //         'scienze' => 'science',
        //         'hobby' => 'hobby',
        //     ];

        //     // Verifica che la categoria sia valida
        //     if (!isset($categoryViews[$category])) {
        //         return back()->with('error', 'Categoria non valida');
        //     }

        //     // Mostra la vista con la domanda
        //     return view($categoryViews[$category], [
        //         'question' => $quizData['question'],
        //         'options' => $quizData['options'],
        //         'correctAnswer' => $quizData['answer'],
        //     ]);
        // }
        // // Errore nel recupero della domanda
        // return back()->with('error', 'Errore nella generazione della domanda');

        // Mappa categorie -> viste Blade
        $categoryViews = [
            'geografia' => 'category.geography',
            'spettacolo' => 'category.entertainment',
            'storia' => 'category.history',
            'letteratura' => 'category.literature',
            'scienze' => 'category.science',
            'hobby' => 'category.hobby',
        ];

        if (!isset($categoryViews[$category])) {
            return back()->with('error', 'Categoria non valida');
        }
        $questions = [
            'geografia' => [
                "question" => "Qual è la capitale della Francia?",
                "options" => ["Madrid", "Parigi", "Roma", "Berlino"],
                "answer" => "Parigi"
            ],
            'spettacolo' => [
                "question" => "Chi ha diretto il film 'Inception'?",
                "options" => ["Steven Spielberg", "Christopher Nolan", "Quentin Tarantino", "James Cameron"],
                "answer" => "Christopher Nolan"
            ],
            'storia' => [
                "question" => "In che anno è caduto il Muro di Berlino?",
                "options" => ["1985", "1989", "1991", "1995"],
                "answer" => "1989"
            ],
            'letteratura' => [
                "question" => "Chi ha scritto 'I Promessi Sposi'?",
                "options" => ["Alessandro Manzoni", "Dante Alighieri", "Giacomo Leopardi", "Giovanni Verga"],
                "answer" => "Alessandro Manzoni"
            ],
            'scienze' => [
                "question" => "Qual è la formula chimica dell'acqua?",
                "options" => ["H2O", "CO2", "O2", "CH4"],
                "answer" => "H2O"
            ],
            'hobby' => [
                "question" => "Quale di questi è un gioco da tavolo?",
                "options" => ["Monopoly", "Call of Duty", "Minecraft", "Fortnite"],
                "answer" => "Monopoly"
            ],
        ];

        // Recuperiamo la domanda per la categoria scelta
        $quizData = $questions[$category];

        // Passiamo i dati alla vista
        return view($categoryViews[$category], [
            'question' => $quizData['question'],
            'options' => $quizData['options'],
            'correctAnswer' => $quizData['answer'],
        ]);

        
    }

    public function checkAnswer(Request $request)
    {
        $userAnswer = $request->input('answer');
        $correctAnswer = $request->input('correctAnswer');

        if (strcasecmp($userAnswer, $correctAnswer) === 0) {
            return response()->json(['correct' => true, 'message' => 'Risposta corretta! ']);
        } else {
            return response()->json(['correct' => false, 'message' => 'Risposta sbagliata ']);
        }
    }
    
}
