<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


Route::get('/articles', [ArticleController::class, 'Articles'])->name('articles');
Route::get('/', [PublicController::class, 'Home'])->name('home');