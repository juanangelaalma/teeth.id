<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;
    use \Znck\Eloquent\Traits\BelongsToThrough;

    protected $fillable = [
        'doctor_id',
        'cv',
        'str',
        'sip',
        'status',
    ];

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

    public function user() {
        return $this->belongsToThrough(User::class, Doctor::class);
    }
}
