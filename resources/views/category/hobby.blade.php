@extends('layouts.app')

@section('content')
    <body class="hobby-bgcolor vh-100">
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="title-font text-center">Hobby</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">{{ $question }}</h2>
                    </div>
                </div>
                <form id="quiz-form">
                    @csrf 
                
                    <input type="hidden" id="correctAnswer" value="{{ $correctAnswer }}"> 
                    <div class="row">
                        @foreach ($options as $option)
                            <div class="col-6 mt-2 ">
                                <div class="button-category button-answer">
                                    <a href="#" class="answer-link" data-answer="{{ $option }}">{{ $option }}</a><br>
                                </div>
                            </div>
                        @endforeach

                    </div>
                
                    <div id="result-message"></div> {{-- Qui verrà mostrato il messaggio di esito --}}
                </form>
                
            </div>
        </main>
    </body>
@endsection