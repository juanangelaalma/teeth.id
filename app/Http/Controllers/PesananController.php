<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index() {
        return view('pesanan.index');
    }

    public function cetak_invoice() {
        return view('pesanan.cetak_invoice');
    }
}
