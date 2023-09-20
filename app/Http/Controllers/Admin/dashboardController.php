<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataPribadi;
use App\Models\DataProfesi;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function admin()
    {
        $dokter = User::where('role','Dokter')->count();
        // return response()->json([
        //    $dokter 
        // ]);
        $data = DataPribadi::all();
        $profesi = DataProfesi::all();
        return view('Admin.adminDashboard', compact('data','profesi', 'dokter'));
    }
}
