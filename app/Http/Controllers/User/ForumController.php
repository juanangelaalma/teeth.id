<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ForumController extends Controller
{
    public function index() {
        // set time language
        Carbon::setLocale('in');

        $questions = Forum::with(['user', 'doctor'])->latest()->get();
        
        return view('forum.index', compact('questions'));
    }

    public function read() {
        return view('forum.read');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $slug = SlugService::createSlug(Forum::class, 'slug', $request->title);
        
        Forum::create([
            'title' => $request->title,
            'slug' => $slug,
            'body' => $request->body,
            'topic' => $request->topic,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('user.forum.index')->with('success', 'Forum berhasil ditambahkan');
    }
}
