<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class BuatJanjiController extends Controller
{
    public function index() {
        $cities = \Indonesia::allCities();
        return view('buat_janji.index', compact('cities'));
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
