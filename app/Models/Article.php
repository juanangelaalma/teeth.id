<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ["title", 'body', "image", "slug", "doctor_id"];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    // for unique slug
    public function sluggable(): array
    {
        // create slug from title
        return ['slug' => ['source' => 'title']];
    }
}
