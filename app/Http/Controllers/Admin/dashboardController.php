<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataPribadi;
use App\Models\DataProfesi;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function admin()
    {
        $data = DataPribadi::all();
        $profesi = DataProfesi::all();
        return view('Admin.adminDashboard', compact('data','profesi'));
    }
}
