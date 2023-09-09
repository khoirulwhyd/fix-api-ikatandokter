<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class anggotaController extends Controller
{
    public function index ()
    {
        return view ('Admin.MasterData.Anggota.index');
    }
}
