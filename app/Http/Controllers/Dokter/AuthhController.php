<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\UserVerify;
use Hash;
use Illuminate\Support\Str;
use Mail;
use RealRashid\SweetAlert\Facades\Alert;

class AuthhController extends Controller
{
    public function index()
    {
        return view('auth2.login');
    }
    public function registration()
    {
        return view('auth2.register');
    }

    public function verifPage()
    {
        return view('auth2.verifikasiEmail');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'nik' => 'required|string|min:16|max:16',
            'password' => 'required|string|min:6|max:50'
        ]);

        $credentials = $request->only('nik', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully loggedin');
        }
        //gagal login
        return redirect("login")->withErrors('Oppes! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {
        $request->validate([
            'npaidi' => 'required|string|max:12',
            'nik' => 'required|string|min:16|max:16',
            'nama_lengkap' => 'required|string|min:3|max:50',
            'no_telepon' => 'required|string|min:10|max:13',
            'email' => 'required|email',
            'password' => 'required_with:ulangi_password|same:ulangi_password|min:6|max:50',
            // 'ulangi_password' => 'required|string|min:6|max:50'
            'ulangi_password' => 'required|string|min:6|max:50'

        ]);

        $data = $request->post();
        $createUser = $this->create($data);

        $token = Str::random(64);

        UserVerify::create([
            'user_id' => $createUser->id,
            'token' => $token
        ]);

        Mail::send('emails.emailVerificationEmail', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Email Verification Mail');
        });

        // return redirect("verifEmail")->withSuccess('Great! You have Successfully loggedin');
        return redirect()->route('verifEmail')->with('message');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('Dokter.dashboardUser')->withSuccess('Anda Berhasil Login');
        }
        return redirect("login")->withErrors('Opps! You do not have access');
    }

    public function create(array $data)
    {
        return User::create([
            'npaidi' => $data['npaidi'],
            'nik' => $data['nik'],
            'nama_lengkap' => $data['nama_lengkap'],
            'no_telepon' => $data['no_telepon'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'ulangi_password' => Hash::make($data['ulangi_password'])
        ]);
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login')->withSuccess('Anda berhasil logout');
    }

    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();

        $message = 'Sorry your email cannot be identified.';

        if (!is_null($verifyUser)) {
            $user = $verifyUser->user;

            if (!$user->email_verified_at) {
                $verifyUser->user->email_verified_at = 1;
                $verifyUser->user->save();
                Alert::success('Email sudah di verifikasi');
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }

        return redirect()->route('login')->with('message', $message);
    }
}
