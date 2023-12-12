<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $movies = Movie::all();
        return view('homepage',compact('movies'));
        
    }
    public function american() {
        $americanMovies = Movie::where('nationality','american')->get();
        return view('onlyamerican',compact('americanMovies'));

    }
    public function top() {
        $movies = Movie::orderBy('vote','desc')->get();
        return view('topfilm',compact('movies'));

    }
}
