<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class persetujuanController extends Controller
{
    public function index ()
    {
        return view ('Admin.MasterData.Persetujuan.index');
    }
    public function edit ()
    {
        return view ('Admin.MasterData.Persetujuan.edit');
    }
}
