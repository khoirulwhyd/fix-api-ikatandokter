<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SIPController extends Controller
{
    public function index ()
    {
        return view('Dokter.SIP.index');
    }
    public function create ()
    {
        return view('Dokter.SIP.create');
    }
    public function edit ()
    {
        return view('Dokter.SIP.edit');
    }
}
