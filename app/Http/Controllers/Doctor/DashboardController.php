<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private function countDataIsNull($data) {
        $isnull = 0;
        foreach ($data->getAttributes() as $a) {
            if (is_null($a)) {
                $isnull++;
          } 
        }
        return $isnull;
    }
    public function index() {
        $user = Auth::user();
        $doctor = User::with(['doctor', 'clinic'])->find($user->id);
        $countOfNullDoctorData = $this->countDataIsNull($doctor->doctor);
        $countOfAllDoctorData = count($doctor->doctor->getAttributes());

        $countOfNullClinicData = $this->countDataIsNull($doctor->clinic);
        $countOfAllClinicData = count($doctor->clinic->getAttributes());

        $countAll = $countOfAllClinicData + $countOfAllDoctorData;
        $countAllNull = $countOfNullClinicData + $countOfNullDoctorData;

        $result = $countAllNull / $countAll;
        $percent = floor($result * 100);
        
        return view('doctor.dashboard', ['progress' => 100 - $percent]);
    }
}
