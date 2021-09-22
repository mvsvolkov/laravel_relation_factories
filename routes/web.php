<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $articles = Article::with('author')->get();
    return view('welcome', compact('articles'));
});
