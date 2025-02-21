<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuizController extends Controller
{
    public function generateQuestion($category){

        // recupero la chiave API dal file services.php
        $apiKey = config('services.openai.key');

        // richiesta API per ottenere una domanda
        $response = Http::withHeaders([

            // autorizzazione con la chiave API per accederci
            'Authorization' => "Bearer $apiKey",

            // richiesta in formato JSON
            'Content-Type' => 'application/json',

        ])->post('https://api.openai.com/v1/chat/completions', [

            'model' => 'gpt-3.5-turbo', //modello openai gratuito 

            //messaggi da usare come contesto
            'messages' => [
                ['role' => 'system', 'content' => 'Sei un generatore di quiz.'],
                ['role' => 'user', 'content' => "Genera una domanda di $category con 4 risposte, una sola corretta."],
            ],
            'temperature' => 0.7, // controllo della creatività del modello
        ]);

        // restituisce la risposta dell'API
        return response()->json($response->json());
    }
    
}
