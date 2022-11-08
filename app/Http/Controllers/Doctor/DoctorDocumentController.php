<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorDocumentController extends Controller
{
    public function index() {
        $certificates = Certification::where('doctor_id', Auth::user()->doctor->id)->orderBy('created_at', 'desc')->get();
        return view('doctor.documents', compact('certificates'));
    }

    public function create(Request $request) {
        $request->validate([
            'cv' => 'required|file|mimes:pdf',
            'str' => 'required|file|mimes:pdf',
            'sip' => 'required|file|mimes:pdf',
        ]);

        $user = Auth::user();
        $userName = str_replace(' ', '-', $user->name);
        $cvName = time() . '-CV-' . $userName . '.' . $request->file('cv')->extension();
        $strName = time() . '-STR-' . $userName . '.' . $request->file('str')->extension();
        $sipName = time() . '-SIP-' . $userName . '.' . $request->file('sip')->extension();

        $request->file('cv')->storeAs('documents', $cvName);
        $request->file('str')->storeAs('documents', $strName);
        $request->file('sip')->storeAs('documents', $sipName);

        Certification::create([
            'doctor_id' => $user->doctor->id,
            'cv' => $cvName,
            'str' => $strName,
            'sip' => $sipName,
            'status' => 'pending',
        ]);

        return redirect()->route('doctor.documents.index');
    }
}
