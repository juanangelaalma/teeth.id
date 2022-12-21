<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuatJanjiController extends Controller
{
    public function index() {
        $cities = \Indonesia::allCities();
        $doctors = User::with('clinic')->whereHas('doctor', function($query) {
            $query->whereHas('verification_requests', function($query) {
                $query->where('status', 'accepted');
            });
        })->get();

        return view('buat_janji.index', [
            'cities' => $cities,
            'doctors' => $doctors,
            'searchTitle' => 'Dokter Pilihan',
            'searchDescription' => 'Kami memiliki banyak dokter yang siap membantu <strong>Anda</strong>'
        ]);
    }

    public function pilih_jadwal() {
        return view('buat_janji.pilih_jadwal');
    }

    public function ringkasan_pesanan() {
        return view('buat_janji.ringkasan_pesanan');
    }

    public function search(Request $request) {
        $location = $request->input('location');
        $name = $request->input('name');
    }
}
