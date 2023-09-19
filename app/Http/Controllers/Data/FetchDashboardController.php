<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rumahsakit;

class FetchDashboardController extends Controller
{
    public function dashboard() {
        $rumahsakits = Rumahsakit::count();
        return view('Dokter.dashboardUser', compact('rumahsakits'));
    }
}
