<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    use \Znck\Eloquent\Traits\BelongsToThrough;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function verification_requests() {
        return $this->hasMany(Certification::class);
    }

    public function isBlocked() {
        return $this->status === 'blocked';
    }

    public function isActive() {
        return $this->status === 'active';
    }

    public function articles() {
        return $this->hasMany(Article::class);
    }

    public function forums() {
        return $this->hasMany(Forum::class);
    }

    // public function clinic() {
    //     return $this->hasOneThrough(Clinic::class, User::class);
    // }
}
