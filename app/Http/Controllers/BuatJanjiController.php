<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuatJanjiController extends Controller
{
    public function index()
    {
        $cities = \Indonesia::allCities();
        $doctors = User::with('clinic')->whereHas('clinic', function ($query) {
            $query->where('is_open', true);
        })->whereHas('doctor', function ($query) {
            $query->whereHas('verification_requests', function ($query) {
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

    public function pilih_jadwal($user_id)
    {
        $today = strtolower(Carbon::now()->format('l'));
        $tomorrow = strtolower(Carbon::tomorrow()->format('l'));
        $afterTomorrow = strtolower(Carbon::tomorrow()->addDay(1)->format('l'));

        $user = User::with(['clinic', 'doctor', 'schedules' => function ($query) use ($today, $tomorrow, $afterTomorrow) {
            $query->where('day', $today)->orWhere('day', $tomorrow)->orWhere('day', $afterTomorrow);
        }])->find($user_id);

        $city = \Indonesia::findCity($user->clinic->city_id);

        return view('buat_janji.pilih_jadwal', compact('user', 'city', 'today', 'tomorrow', 'afterTomorrow'));
    }

    public function ringkasan_pesanan(Request $request)
    {
        $currentDates = [
            'today' => Carbon::now()->format('Y-m-d'),
            'tomorrow' => Carbon::tomorrow()->format('Y-m-d'),
            'after_tomorrow' => Carbon::tomorrow()->addDay()->format('Y-m-d'),
        ];
        $selectedDate = $currentDates[$request->date];
        $user = User::with(['clinic', 'doctor'])->find($request->user_id);
        $hour = $request->hour;
        $day = Carbon::parse($selectedDate)->format('l');
        return view('buat_janji.ringkasan_pesanan', compact('user', 'selectedDate', 'hour', 'day'));
    }

    public function search(Request $request)
    {
        $location = $request->input('location');
        $name = $request->input('name');

        $doctors = null;

        if ($location && $name) {
            $doctors = User::with('clinic')->whereHas('doctor', function ($query) {
                $query->whereHas('verification_requests', function ($query) {
                    $query->where('status', 'accepted');
                });
            })->whereHas('clinic', function ($query) use ($location) {
                $query->where('city_id', $location);
            })->where('name', 'LIKE', '%' . $name . '%')->get();
        } else if ($location) {
            $doctors = User::with('clinic')->whereHas('doctor', function ($query) {
                $query->whereHas('verification_requests', function ($query) {
                    $query->where('status', 'accepted');
                });
            })->whereHas('clinic', function ($query) use ($location) {
                $query->where('city_id', $location);
            })->get();
        } else if ($name) {
            $doctors = User::with('clinic')->whereHas('doctor', function ($query) {
                $query->whereHas('verification_requests', function ($query) {
                    $query->where('status', 'accepted');
                });
            })->where('name', 'LIKE', '%' . $name . '%')->get();
        }

        if (!$location && !$name) {
            return redirect()->route('buat_janji.index');
        }

        $cities = \Indonesia::allCities();

        return view('buat_janji.index', [
            'cities' => $cities,
            'doctors' => $doctors,
            'searchTitle' => 'Dokter Pilihan',
            'searchDescription' => "menampilkan <strong>" . $doctors->count() . ($name ? "</strong> untuk nama <strong>$name</strong>" : '') . ' di <strong>' . ($location ? \Indonesia::findCity($location)->name : ' Semua Lokasi') . '</strong>'
        ]);
    }

    public function post_pilih_jadwal(Request $request, $user_id) {
        $request->validate([
            'date' => 'required|in:today,tomorrow,after_tomorrow',
            'hour' => 'required',
        ]);
        return redirect()->route('buat_janji.ringkasan_pesanan', ['user_id' => $user_id, 'date' => $request->date, 'hour' => $request->hour]);
    }
}
