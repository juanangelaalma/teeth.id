<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Clinic;
use App\Models\ClinicSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorClinicController extends Controller
{
    public function index() {
        $user = Auth::user();
        $clinic = Clinic::with(['schedules', 'schedule_hours'])->where('user_id', $user->id)->first();
        $hasClinic = $clinic->exists();
        return view('doctor.clinic.index', [
            'hasClinic' => $hasClinic,
            'clinic' => $clinic,
        ]);
    }

    public function create_clinic_schedule(Request $request) {
        $request->validate([
            'day' => 'required|in:monday,tuesday,wednesday,thursday,friday,saturday,sunday',
            'hour' => 'required|date_format:H:i',
        ]);

        $user = Auth::user();
        $clinic = Clinic::with(['schedules', 'schedule_hours'])->where('user_id', $user->id)->first();

        $clinicSchedule = $clinic->schedules()->where('day', $request->day)->first();

        if($clinicSchedule) {
            $clinicSchedule->hours()->where('hour', $request->hour)->firstOrCreate([
                'hour' => $request->hour,
            ]);
        }else {
            $clinicSchedule = $clinic->schedules()->create([
                'day' => $request->day,
            ]);
            $clinicSchedule->hours()->create([
                'hour' => $request->hour,
            ]);
        }
        return back();
    }
}
