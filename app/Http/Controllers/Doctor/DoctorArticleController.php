<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Services\ImageService;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Image;

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
            'image' => 'required|image|mimes:jpeg,png,jpg,svg',
        ]);

        $image = $request->file('image');

        // create unique slug
        $slug = SlugService::createSlug(Article::class, 'slug', $request->title);
        $pathname = '/storage/articles/';
        $filename = $slug . '.' . $request->image->extension();

        // compress the image
        $image_compressed = ImageService::compressImage($image, 600, 450, $pathname);

        $image_compressed->save(public_path($pathname . $filename));

        $doctor_id = Auth::user()->doctor->id;

        Article::create([
            'title' => $request->title,
            'slug'  => $slug,
            'body'  => str_replace('../../', '/', $request->body),
            'image' => $pathname . $filename,
            'doctor_id' => $doctor_id,
        ]);

        return redirect()->route('doctor.articles.index')->with('success', 'Artikel berhasil ditambahkan');
    }

    public function edit(Article $article) {
        return view('doctor.articles.edit', compact('article'));
    }

    public function update(Article $article) {
        dd($article);
    }

    public function destroy(Article $article) {
        $article->delete();
        return redirect()->route('doctor.articles.index')->with('success', 'Artikel berhasil dihapus');
    }
}
