<?php

namespace App\Http\Controllers\Data;

use App\Charts\PerbandinganDokter;
use App\Charts\PersebaranDokterSpesialisChart;
use App\Http\Controllers\Controller;
use App\Models\Klinik;
use App\Models\Puskesmas;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rumahsakit;
use App\Models\DataProfesi;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;

class FetchDashboardController extends Controller
{
    public function dashboard(PerbandinganDokter $perbandingan, PersebaranDokterSpesialisChart $persebaran) {
        $rumahsakits = Rumahsakit::count();
        $puskesmass = Puskesmas::count();
        $kliniks = Klinik::count();
        $profesis = DataProfesi::count();
        return view('Dokter.dashboardUser',['perbandingan' => $perbandingan->build()], ['persebaran' => $persebaran->build()], compact('rumahsakits', 'puskesmass', 'kliniks'));
    }
    // public function perbandingan(PerbandinganDokter $perbandingan) {
    //     return view('Dokter.dashboardUser', ['perbandingan' => $perbandingan->build()]);
    // }
}