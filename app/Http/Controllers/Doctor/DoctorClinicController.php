<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorClinicController extends Controller
{
    public function index() {
        return view('doctor.clinic.index');
    }

    public function create_clinic_schedule(Request $request) {
        $request->validate([
            'day' => 'required|in:monday,tuesday,wednesday,thursday,friday,saturday,sunday',
            'hour' => 'required|date_format:H:i',
        ]);

        dd($request->all());
    }
}
