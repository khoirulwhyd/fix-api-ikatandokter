<?php

namespace App\Http\Controllers;
use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function indexUser() {
        $data = User::with('role')->where('name','asc')->get();
        // dd($data);
        return response()->json([
            'status' => true,
            'message' => 'data ditemukan',
            'data' => $data
        ], 200);
    }

    public function registerUser(Request $request) {
        $dataUser = new User();
        $rules = [
            'npa_idi' => 'required',
            'nik' => 'required|unique:users',
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'proses validasi gagal',
                'data' => $validator->errors()
            ], 401);
        }

        $dataUser->npa_idi = $request->npa_idi;
        $dataUser->nik = $request->nik;
        $dataUser->name = $request->name;
        $dataUser->phone_number = $request->phone_number;
        $dataUser->email = $request->email;
        $dataUser->password = Hash::make($request->password);

        $dataUser->save();
        $role = role::join("user_role", "user_role.role_id", "=", "roles.id")
            ->join("users", "users.id", "=", "user_role.user_id")
            ->where('user_id', $dataUser->id)
            ->pluck('roles.role_name')->toArray();
        if(empty($role)) {
            $role = ["*"];
        }

        return response()->json([
            'status' => true,
            'message' => 'registrasi berhasil'
        ], 200);
    }

    public function loginUser(Request $request) {
        $rules = [
            'nik' => 'required',
            // 'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'proses login gagal',
                'data' => $validator->errors()
            ], 401);
        }

        if(!Auth::attempt($request->only(['nik', 'password']))) {
            return response()->json([
                'status' => false,
                'message' => 'data yang anda masukkan tidak terdaftar',
            ], 401);
        }

        $dataUser = User::where('nik', $request->nik)->first();

        $role = role::join("user_role", "user_role.role_id", "=", "roles.id")
            ->join("users", "users.id", "=", "user_role.user_id")
            ->where('user_id', $dataUser->id)
            ->pluck('roles.role_name')->toArray();
        if(empty($role)) {
            $role = ["*"];
        }
        // dd($role);

        return response()->json([

            'status' => true,
            'message' => 'login Berhasil',
            'token' => $dataUser->createToken('acces_token', $role)->plainTextToken
        ]);
    }
}
