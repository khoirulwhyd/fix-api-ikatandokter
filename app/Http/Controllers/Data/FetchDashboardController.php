<?php

namespace App\Http\Controllers\Data;

use App\Charts\PersebaranDokterSpesialisChart;
use App\Http\Controllers\Controller;
use App\Models\Puskesmas;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rumahsakit;
use App\Models\DataProfesi;

class FetchDashboardController extends Controller
{
    public function dashboard(PersebaranDokterSpesialisChart $chart) {
        $rumahsakits = Rumahsakit::count();
        $puskesmass = Puskesmas::count();
        $profesis = DataProfesi::count();
        return view('Dokter.dashboardUser',['chart' => $chart->build()], compact('rumahsakits', 'puskesmass'));
    }
    // public function persebaranDokter (PersebaranDokterSpesialisChart $chart) {
    //     return view('Dokter.dashboardUser', ['chart' => $chart->build()]);
    // }
}
