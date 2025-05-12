<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieListController;

Route::get('/', [MovieListController::class, 'index'])->name('movie.list');
