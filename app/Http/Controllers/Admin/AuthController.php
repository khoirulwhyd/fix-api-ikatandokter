<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    public function admin()
    {
        return view('Admin.adminDashboard');
    }
    public function loginAdmin() {
        return view('Admin.Auth.login');
    }
    public function actionLoginAdmin(Request $request) {
        $this->validate($request, [
            'nik' => 'required|string|min:16|max:16',
            'password' => 'required|string|min:6|max:50'
        ]);

        $data = [
            'nik' => $request->input('nik'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('admin');
        } else {
            Session::flash('error', 'Nik atau Password Salah');
            return redirect('/login-admin')->withError('Nik atau password');
        }
    }

    public function logoutAdmin() {
        Auth::logout();
        return redirect('/login-admin');
    }
}
