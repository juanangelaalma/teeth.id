<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

    public function isAccepted() {
        return $this->status === 'accepted';
    }

    public function isPending() {
        return $this->status === 'pending';
    }

    public function isRejected() {
        return $this->status === 'rejected';
    }
}
