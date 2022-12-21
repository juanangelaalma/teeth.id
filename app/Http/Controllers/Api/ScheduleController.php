<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ClinicSchedule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function getByDay($day)
    {
        if ($day === 'today') {
            $today = strtolower(Carbon::now()->format('l'));
            $schedule = ClinicSchedule::with('hours')->where('day', $today)->get();
            return response()->json($schedule);
        } else if ($day === 'tomorrow') {
            $tomorrow = strtolower(Carbon::tomorrow()->format('l'));
            $schedule = ClinicSchedule::with('hours')->where('day', $tomorrow)->get();
            return response()->json($schedule);
        } else if ($day === 'after_tomorrow') {
            $afterTomorrow = strtolower(Carbon::tomorrow()->addDay(1)->format('l'));
            $schedule = ClinicSchedule::with('hours')->where('day', $afterTomorrow)->get();
            return response()->json($schedule);
        } else {
            return response()->json(['message' => 'Invalid day'], 400);
        }
    }
}
