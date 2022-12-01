<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use Illuminate\Http\Request;

class AdminDocumentController extends Controller
{
    public function index()
    {
        $requestVerifications = Certification::with('doctor', 'user')->where('status', 'pending')->get();
        return view('admin.documents.index', compact('requestVerifications'));
    }   

    public function reject(Certification $certification)
    {
        $certification->update([
            'status' => 'rejected'
        ]);
        return redirect()->back();
    }

    public function approve(Certification $certification)
    {
        $certification->update([
            'status' => 'accepted'
        ]);
        return redirect()->back();
    }
}
