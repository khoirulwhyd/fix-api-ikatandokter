<?php

namespace App\Http\Controllers\Data;

use App\Models\User;
use App\Models\Klinik;
use App\Models\Puskesmas;
use App\Models\Rumahsakit;
use App\Models\DataPribadi;
use App\Models\DataProfesi;
use Illuminate\Http\Request;
use App\Charts\PerbandinganDokter;
use App\Http\Controllers\Controller;
use App\Charts\PersebaranDokterSpesialisChart;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;

class FetchDashboardController extends Controller
{
    public function dashboard(PerbandinganDokter $perbandingan, PersebaranDokterSpesialisChart $persebaran) {
        $rumahsakits = Rumahsakit::count();
        $puskesmass = Puskesmas::count();
        $kliniks = Klinik::count();
        $profesis = DataProfesi::count();
        $data = DataPribadi::all();
        // return response()->json([
        //     'data' => $data
        // ]);
        return view('Dokter.dashboardUser',
        ['perbandingan' => $perbandingan->build()], 
        ['persebaran' => $persebaran->build()],
        compact('rumahsakits', 'puskesmass', 'kliniks', 'data'));
    }
}