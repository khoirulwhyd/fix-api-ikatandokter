<?php

namespace App\Http\Controllers\Auth;

use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Auth.register');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'npaidi' => 'required|string|max:12',  
            'nik' => 'required|string|min:16|max:16',
            'nama_lengkap' => 'required|string|min:3|max:50',
            'no_telepon' => 'required|string|min:10|max:13',
            'email' => 'required|email',
            'password' => 'required_with:ulangi_password|same:ulangi_password|min:6|max:50',
            'ulangi_password' => 'required|string|min:6|max:50'
        ]);

        $user = User::create([
            'npaidi' => $request->npaidi,
            'nik' => $request->nik,
            'nama_lengkap' => $request->nama_lengkap,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'ulangi_password' => Hash::make($request->ulangi_password)
        ]);

        if($validator->fails()) {
            return redirect()->route('register.index')->withErrors($validator)->withInput();
        }

        $user->save();
        return redirect()->route('login.index')->withSucces('success', 'Registrasi Berhasil');
    }
}