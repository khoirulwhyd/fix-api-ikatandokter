<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Session;
use Session;
use RealRashid\SweetAlert\Facades\Alert;

class CobaLoginController extends Controller
{
    public function dashboard () {
        // return response()->json([
        //     'message' => 'Anda Berhasil Login',
        //     'user' => Auth::user()
        // ]);
        return view('Dokter.dashboardUser');
    }
    
    public function index()
    {
        return view('Auth.login');
    }

    public function login()
    {
        if (Auth::check() && Auth::user()->role == 'dokter') {
            return view('Dokter.dashboardUser');
        } else if(Auth::check() && Auth::user()->role == 'admin') {
            return view('Admin.adminDashboard');    
        } else if(Auth::check() && Auth::user()->role == 'user') {
            return view('Auth.login')->with('error', 'anda harus di verifikasi oleh admin terlebih dahulu');
        } 
        // {
        //     return view('Auth.login')->with('error', 'nik atau password salah');
        // }
    }

    public function actionlogin(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required|string|min:16|max:16',
            'password' => 'required|string|min:6|max:50'
        ]);

        $data = [
            'nik' => $request->input('nik'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('dashboard');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login')->withError('Nik atau password');
        }
        
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login');
    }
    
}