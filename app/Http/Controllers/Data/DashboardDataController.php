<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use App\Models\Puskesmas;
use Illuminate\Http\Request;
use App\Models\Rumahsakit;
use Illuminate\Support\Facades\DB;

class DashboardDataController extends Controller
{
    public function rumahsakit() {
        $rumahsakits = Rumahsakit::all();

        return view('Dokter.Dashboard.rumahsakit', compact('rumahsakits'));
    }

    public function carirumahsakit(Request $request) {
        $search = $request->input('search');

        $rumahsakits = Rumahsakit::where('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('alamat', 'LIKE', '%' . $search . '%')
            ->orWhere('layanan_pembayaran', 'LIKE', '%' . $search . '%')
            ->orWhere('kecamatan', 'LIKE', '%' . $search . '%')
            ->get();

        return view('Dokter.Dashboard.rumahsakit', compact('rumahsakits'));
    }

    public function puskesmas() {
        $puskesmass = Puskesmas::all();
        return view('Dokter.Dashboard.puskesmas', compact('puskesmass'));
        // return response()->json([
        //     $puskesmass
        // ]);
    }
    public function caripuskesmas(Request $request)
    {
        $search = $request->input('search');

        $puskesmass = Puskesmas::where('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('alamat', 'LIKE', '%' . $search . '%')
            ->orWhere('jenis_perawatan', 'LIKE', '%' . $search . '%')
            ->orWhere('kecamatan', 'LIKE', '%' . $search . '%')
            ->get();

        return view('Dokter.Dashboard.puskesmas', compact('puskesmass'));
    }
}