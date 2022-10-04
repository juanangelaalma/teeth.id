<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorDocumentController extends Controller
{
    public function index() {
        return view('doctor.documents');
    }

    public function create(Request $request) {

    }
}
