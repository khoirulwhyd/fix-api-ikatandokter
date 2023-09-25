<?php

namespace App\Http\Controllers\Data;

use App\Charts\PerbandinganDokter;
use App\Charts\PersebaranDokterSpesialisChart;
use App\Http\Controllers\Controller;
use App\Models\Puskesmas;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rumahsakit;
use App\Models\DataProfesi;

class FetchDashboardController extends Controller
{
    public function dashboard(PerbandinganDokter $perbandingan) {
        $rumahsakits = Rumahsakit::count();
        $puskesmass = Puskesmas::count();
        $profesis = DataProfesi::count();
        return view('Dokter.dashboardUser',['perbandingan' => $perbandingan->build()], compact('rumahsakits', 'puskesmass'));
    }
    // public function perbandingan(PerbandinganDokter $perbandingan) {
    //     return view('Dokter.dashboardUser', ['perbandingan' => $perbandingan->build()]);
    // }
}
