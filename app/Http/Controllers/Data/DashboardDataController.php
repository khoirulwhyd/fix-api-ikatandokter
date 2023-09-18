<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rumahsakit;

class DashboardDataController extends Controller
{
    public function rumahsakit() {
        $rumahsakits = Rumahsakit::all();
        //        dd($rumahsakits);
        return view('Dokter.Dashboard.rumahsakit', compact('rumahsakits'));
    }
    
}
