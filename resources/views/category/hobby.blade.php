@extends('layouts.app')

@section('content')
    <body class="hobby-bgcolor vh-100">
        <main class="vh-100">
            <div class="container vh-100 ">
                <div class="row align-content-center h-100">
                    <div class="col-12 mb-4 position-relative">
                        <div class="text-center position-absolute container-logo">
                            <a href="/">
                                <img class="logo-category" src="{{URL::asset('/img/trivia.jpeg')}}" alt="">
                            </a>
                        </div>
                        <h1 class="category-name title-font text-center text-uppercase mb-3">Hobby </h1>
                        <div class="text-center"><i class="fa-solid fa-basketball"></i></div>
                    </div>
                    <div class="col-12 my-4">
                        <h2 class="question-text text-center mb-5">{{ $question }}</h2>
                    </div>
                    <form id="quiz-form">
                        @csrf 
                    
                        <input type="hidden" id="correctAnswer" value="{{ $correctAnswer }}"> 
                        <div class="row align-content-center ">
                            @foreach ($options as $option)
                                <div class="col-6 mt-2 ">
                                    <div class=" button-answer">
                                        <a href="#" class="answer-link" data-answer="{{ $option }}">{{ $option }}</a><br>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    
                    </form>
                </div>
                
                
            </div>
            
        </main>
    </body>
@endsection