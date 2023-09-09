<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class STRController extends Controller
{
    public function index ()
    {
        return view('Dokter.STR.index');
    }
    public function create ()
    {
        return view('Dokter.STR.create');
    }
    public function edit ()
    {
        return view('Dokter.STR.edit');
    }
}
