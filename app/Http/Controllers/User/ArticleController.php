<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index() {
        $recommendation = Article::latest()->take(4)->get();
        $where = [];

        foreach ($recommendation as $article) {
            $where[] = $article->id;
        }

        $articles = Article::latest()->whereNotIn('id', $where)->get();
        return view('articles', compact('articles', 'recommendation'));
    }
}
