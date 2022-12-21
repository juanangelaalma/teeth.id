<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function index() {
        $user = Auth::user();
        $orders = Order::with('provider')->where('customer_id', $user->id)->get();
        // with function looping
        return view('pesanan.index', compact('orders'));
    }

    public function cetak_invoice(Order $order) {
        return view('pesanan.cetak_invoice', compact('order'));
    }
}
