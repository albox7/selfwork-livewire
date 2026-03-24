<?php

namespace App\Http\Controllers;

use App\Models\Article;



class ArticleController extends Controller
{
    public function Articles()
    {
        $articles = Article::latest()->get();
        return view('articles', ['articles' => $articles]);
    }
}
