<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_id',
        'day',
    ];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }

    public function hours()
    {
        return $this->hasMany(ScheduleHour::class);
    }
}
