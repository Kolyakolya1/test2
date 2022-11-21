<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::getListFromRedis();

        return view('blog.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('blog.show', compact('article'));
    }
}
