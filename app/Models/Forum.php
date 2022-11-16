<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = ['title', 'slug', 'body', 'topic', 'answer', 'doctor_id', 'user_id'];

    public function isAnswered() {
        return $this->answer != "";
    }

    // for unique slug
    public function sluggable(): array
    {
        // create slug from title
        return ['slug' => ['source' => 'title']];
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }
}
