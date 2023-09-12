<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\DataPribadi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DataPribadiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = User::find($user->id);
        return view('Dokter.DataPribadi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dokter.DataPribadi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'npaidi' => 'required|integer',
            'no_identitas' => 'required|string',
            'nama_lengkap' => 'required|string',
            'foto_diri' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'agama' => 'required|string',
            'nama_pasangan' => 'required|string',
            'ktp_provinsi' => 'required|string',
            'ktp_kabupaten/kota' => 'required|string',
            'ktp_kecamatan' => 'required|string',
            'ktp_kelurahan' => 'required|string',
            'ktp_rt' => 'required|string',
            'ktp_rw' => 'required|string',
            'ktp_kodepos' => 'required|string',
            'ktp_alamat_lengkap' => 'required|string',
            'no_teleponrumah' => 'required|string|min:10|max:13',
            'no_hp' => 'required|string|min:10|max:13',
            'no_hp2' => '',
            'krsp_provinsi' => 'required|string',
            'krsp_kabupaten/kota' => 'required|string',
            'krsp_kecamatan' => 'required|string',
            'krsp_kelurahan' => 'required|string',
            'krsp_rt' => 'required|string',
            'krsp_rw' => 'required|string',
            'krsp_kodepos' => 'required|string',
            'krsp_alamat_lengkap' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        DataPribadi::create($request->all());

        return response()->json([
            'message' => 'Data Pribadi Berhasil Ditambahkan',
            'data' => $request->all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DataPribadi $dataPribadi)
    {
        $dataPribadi = DataPribadi::find($dataPribadi->id);
        return response()->json([
            'message' => 'Data Pribadi Ditemukan',
            'data' => $dataPribadi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataPribadi $dataPribadi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataPribadi $dataPribadi)
    {
        $validator = Validator::make($request->all(), [
            'npaidi' => 'required|integer',
            'no_identitas' => 'required|string',
            'nama_lengkap' => 'required|string',
            'foto_diri' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'agama' => 'required|string',
            'nama_pasangan' => 'required|string',
            'ktp_provinsi' => 'required|string',
            'ktp_kabupaten/kota' => 'required|string',
            'ktp_kecamatan' => 'required|string',
            'ktp_kelurahan' => 'required|string',
            'ktp_rt' => 'required|string',
            'ktp_rw' => 'required|string',
            'ktp_kodepos' => 'required|string',
            'ktp_alamat_lengkap' => 'required|string',
            'no_teleponrumah' => 'required|string|min:10|max:13',
            'no_hp' => 'required|string|min:10|max:13',
            'no_hp2' => '',
            'krsp_provinsi' => 'required|string',
            'krsp_kabupaten/kota' => 'required|string',
            'krsp_kecamatan' => 'required|string',
            'krsp_kelurahan' => 'required|string',
            'krsp_rt' => 'required|string',
            'krsp_rw' => 'required|string',
            'krsp_kodepos' => 'required|string',
            'krsp_alamat_lengkap' => 'required|string'
        ]);

        if($validator->fails()) {
            return response()->json([
                'message' => 'Data Pribadi Gagal Diupdate',
                'data' => $validator->errors()
            ]);
        }
        
        $dataPribadi->update($request->all());
        
        return response()->json([
            'message' => 'Data Pribadi Berhasil Diupdate',
            'data' => $dataPribadi
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $dataPribadi = DataPribadi::find($id);
        $dataPribadi->delete();

        return response()->json([
            'message' => 'Data Pribadi Berhasil Dihapus',
            'data' => $dataPribadi
        ]);
    }
}