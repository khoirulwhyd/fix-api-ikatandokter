<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataProfesiController extends Controller
{
    public function index()
    {
        return view('Dokter.DataProfesi.index');
    }
    public function edit()
    {
        return view('Dokter.DataProfesi.edit');
    }
    public function create()
    {
        return view('Dokter.DataProfesi.create');
    }
}
