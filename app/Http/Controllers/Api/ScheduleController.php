<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Clinic;
use App\Models\ClinicSchedule;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public $schedules;
    private function filterSchedule($clinic_id, $date)
    {
        $clinic = Clinic::find($clinic_id);
        $user = User::find($clinic->user_id);
        foreach ($this->schedules as $schedule) {
            $i = 0;
            foreach ($schedule->hours as $hour) {
                $order = Order::where(['provider_id' => $user->id, 'date' => $date, 'hour' => $hour->hour, 'status' => 'pending'])->first();
                if ($order) {
                    $schedule->hours->forget($i);
                }
                $i++;
            }
        }
    }
    public function getByDay($day, $clinic_id)
    {
        if ($day === 'today') {
            $today = strtolower(Carbon::now()->format('l'));
            $this->schedules = ClinicSchedule::with('hours')->where(['day' => $today, 'clinic_id' => $clinic_id])->get();
            $date = Carbon::now()->format('Y-m-d');
            $this->filterSchedule($clinic_id, $date);
            return response()->json($this->schedules);
        } else if ($day === 'tomorrow') {
            $tomorrow = strtolower(Carbon::tomorrow()->format('l'));
            $this->schedules = ClinicSchedule::with('hours')->where(['day' => $tomorrow, 'clinic_id' => $clinic_id])->get();
            $date = Carbon::tomorrow()->format('Y-m-d');
            $this->filterSchedule($clinic_id, $date);
            return response()->json($this->schedules);
        } else if ($day === 'after_tomorrow') {
            $afterTomorrow = strtolower(Carbon::tomorrow()->addDay(1)->format('l'));
            $this->schedules = ClinicSchedule::with('hours')->where(['day' => $afterTomorrow, 'clinic_id' => $clinic_id])->get();
            $date = Carbon::tomorrow()->addDay()->format('Y-m-d');
            $this->filterSchedule($clinic_id, $date);
            return response()->json($this->schedules);
        } else {
            return response()->json(['message' => 'Invalid day'], 400);
        }
    }
}
