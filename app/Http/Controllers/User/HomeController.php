<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Feedback;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $recommendation = Article::latest()->take(4)->get();
        return view('home', compact('recommendation'));
    }
}
