<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    public function geography(){

        return view('categories.geography');
    }

    public function entertainment(){

        return view('categories.entertainment');
    }

    public function history(){

        return view('categories.history');
    }

    public function literature(){

        return view('categories.literature');
    }

    public function science(){

        return view('categories.science');
    }

    public function hobby(){

        return view('categories.hobby');
    }
}
