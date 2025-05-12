<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieListController extends Controller
{
    public function index()
    {
        $movies = include base_path('imdb-list-laravel/data/movies.php');
        return view('movielist', compact('movies'));
    }
}
