<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_schedule_id',
        'hour',
    ];

    public function clinic_schedule() {
        return $this->belongsTo(ClinicSchedule::class);
    }
}
