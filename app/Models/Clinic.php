<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'address',
        'is_open',
    ];

    public function schedules()
    {
        return $this->hasMany(ClinicSchedule::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
