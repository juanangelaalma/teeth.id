<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function cities() {
        $ciites = \Indonesia::allCities();
        return response()->json($ciites);
    }

    public function searchCities() {
        $search = request()->get('q');
        $cities = \Indonesia::search($search)->allCities();
        return response()->json($cities);
    }
}
