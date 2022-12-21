<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DoctorOrderController extends Controller
{
    public function index() {
        $orders = Order::with('customer')->where('status', 'pending')->orderBy('date', 'asc')->get()->groupBy('date');
        $today = Carbon::now()->format('Y-m-d');
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');
        $after_tomorrow = Carbon::tomorrow()->addDay()->format('Y-m-d');
        return view('doctor.orders.index', compact('orders', 'today', 'tomorrow', 'after_tomorrow'));
    }

    public function done(Order $order) {
        $order->status = 'done';
        $order->save();

        return back();
    }
}
