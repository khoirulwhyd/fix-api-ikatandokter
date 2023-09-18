<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rumahsakit;
use Illuminate\Support\Facades\DB;

class DashboardDataController extends Controller
{
    public function rumahsakit() {
        $rumahsakits = Rumahsakit::paginate(10);
            //    dd($rumahsakits);
        return view('Dokter.Dashboard.rumahsakit', compact('rumahsakits'));
    }
    public function carirumahsakit(Request $request) {
        $cari = $request->cari;

        $rumahsakits = DB::table('rumahsakits')
            ->where('nama','like',"%".$cari."%");
            // ->paginate();

        return view('Dokter.Dashboard.rumahsakit', ['rumahsakits' => $rumahsakits]);
    }
    
}
