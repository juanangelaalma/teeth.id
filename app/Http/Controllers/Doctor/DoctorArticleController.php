<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DoctorArticleController extends Controller
{
    public function index() {
        $user = Auth::user();
        if ($user->isDoctor()) {
            $articles = Article::where('doctor_id', $user->doctor->id)->latest()->paginate(8);
            return view('doctor.articles.index', compact('articles'));
        }
    }

    public function create() {
        return view('doctor.articles.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $slug = SlugService::createSlug(Article::class, 'slug', $request->title);

        $doctor_id = Auth::user()->doctor->id;

        $filename = $slug . '.' . $request->image->extension();
        
        $path = Storage::putFileAs('articles', $request->image, $filename);

        Article::create([
            'title' => $request->title,
            'slug'  => $slug,
            'body'  => $request->body,
            'image' => "/storage/$path",
            'doctor_id' => $doctor_id,
        ]);

        return redirect()->route('doctor.articles.index')->with('success', 'Article created successfully');
    }
}
