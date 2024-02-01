<?php

namespace App\Http\Controllers;
use App\Models\Film;
use App\Models\Company;
use Illuminate\Http\Request;

class FilmController extends Controller
{


    public function index()
    {
        $films = Film::with('homepage', 'company','<>', '')->orderByDesc('popularity')->get();
        return response()->json(['films' => $films]);
    }
    
    public function showInterface()
    {
        $films = Film::where('homepage', '<>', '')->orderByDesc('popularity')->get();
        return view('interface', ['films' => $films]);
    }
}
