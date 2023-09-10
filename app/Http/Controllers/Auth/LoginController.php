<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Support\Facades\Validator'
// use Validator;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function dashboard()
    // {
    //     return view('Dokter.dashboardUser');
    // }
    public function index()
    {
        if (Auth::check()) {
            return redirect('dashboardUser');
        } else {
            return view('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required|string|min:16|max:16',
            'password' => 'required|string|min:6|max:50'
        ]);

        if(Auth::attempt([
            'nik' => $request->get('nik'),
            'password' => $request->get('password')
        ])) {

            $request->session()->regenerate();
            return redirect()->intended('/dashboardUser');
            // return view('Dokter.dashboardUser');
        };

        return back()->withErrors([
            'message' => 'NIK atau password salah'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}