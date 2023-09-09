<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function login() {
        return view('Auth.login');
    }

    public function register() {
        return view('Auth.register');
    }

    public function lupa_password() {
        return view('Auth.lupapassword');
    }
    public function Dashboard()
    {
        return view('Dokter.dashboardUser');
    }
    public function DataPribadi() {
        return view('Dokter.DataPribadi.index');
    }
}
