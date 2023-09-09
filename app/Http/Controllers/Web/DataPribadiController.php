<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataPribadiController extends Controller
{
    public function index()
    {
        return view('Dokter.DataPribadi.index');
    }

    public function create()
    {
        return view('Dokter.DataPribadi.create');
    }

    public function edit()
    {
        return view('Dokter.DataPribadi.edit');
    }
}
