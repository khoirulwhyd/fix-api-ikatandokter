<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
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
}