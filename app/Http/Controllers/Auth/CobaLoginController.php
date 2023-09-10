<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Session;
use Session;

class CobaLoginController extends Controller
{
    public function dashboard () {
        return view('Dokter.dashboardUser');
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        } else {
            return view('Auth.login');
        }
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
            return redirect('/login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login');
    }
    
}
