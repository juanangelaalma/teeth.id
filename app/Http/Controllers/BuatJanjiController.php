<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuatJanjiController extends Controller
{
    public function index() {
        return view('buat_janji.index');
    }

    public function pilih_jadwal() {
        return view('buat_janji.pilih_jadwal');
    }
}
