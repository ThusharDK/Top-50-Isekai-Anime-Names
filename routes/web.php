<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieListController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieListController;

Route::get('/', [MovieListController::class, 'index'])->name('movie.list');
Route::get('/movielist', [MovieListController::class, 'index'])->name('movie.list');
