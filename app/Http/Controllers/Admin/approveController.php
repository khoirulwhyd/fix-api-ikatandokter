<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class approveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('role', 'user')->get();
        return view('Admin.MasterData.Persetujuan.index', compact('user'));
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
        //
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
        $user = User::select('*')
            ->where('id', $id)
            ->get();
        return view('Admin.MasterData.Persetujuan.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        // $user = User::where('id', $request->id)
        //     ->update([
        //         'nama_lengkap' => $request->nama_lengkap,
        //         'nik' => $request->nik,
        //         'npaidi' => $request->npaidi,
        //         'no_telepon' => $request->no_telepon,
        //         'email' => $request->email,
        //         'role' => $request->role,
        //     ]);
        // $user = User::find($id);
        //     // $user->save();
        // // return redirect()->route('persetujuan.index');
        // return redirect()->route('persetujuan.index')
        //     ->with('success', 'Data user berhasil diubah.');

        $request->validate([
            'nama_lengkap' => 'required|string|min:3|max:50',
            'nik' => 'required|string|min:16|max:16',
            'npaidi' => 'required|string|max:12',
            'no_telepon' => 'required|string|min:10|max:13',
            'email' => 'required|email',
            'role' => 'required',
        ]);
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('persetujuan.index')
            ->with('success', 'Data user berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::find($id);
        
        // $title = 'Delete User!';
        // $text = "Apakah anda yakin ingin menghapus user ini?";
        // confirmDelete($title, $text);
        
        $user->delete();
        return redirect()->route('persetujuan.index')
            ->with('success', 'Data user berhasil di hapus');
    }
}
