<?php

namespace App\Http\Controllers;

use App\Models\DataProfesi;
use App\Models\DataPribadi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Validator;
use Auth;

class DataProfesiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPribadi = DataPribadi::where('id_user', Auth::user()->id)->first();
        $dataProfesi = DataProfesi::where('id_pribadi', $dataPribadi->id)->first();
        // return response()->json([
        //     'data' => $dataPribadi,
        //     'data2' => $dataProfesi
        // ]);
        return view('Dokter.DataProfesi.index', compact('dataPribadi', 'dataProfesi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataPribadi = DataPribadi::where('id_user', Auth::user()->id)->first();
        // return response()->json([
        //     'data' => $dataPribadi
        // ]);
        return view('Dokter.DataProfesi.create', compact('dataPribadi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_pribadi' => 'required|integer',
            'dokter' => 'required|string',
            'spesialis' => '',
            'sub_spesialis' => '',
            'akademis' => 'required|string'
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Data Profesi Gagal Ditambahkan',
                'data' => $validator->errors()
            ]);
        }
        DataProfesi::create($request->all());
        
        return response()->json([
            'message' => 'Data Profesi Berhasil Ditambahkan',
            'data' => $request->all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DataProfesi $dataProfesi)
    {
        $dataProfesi = DataProfesi::find($dataProfesi->id);
        return response()->json([
            'message' => 'Data Profesi Ditemukan',
            'data' => $dataProfesi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataProfesi $dataProfesi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataProfesi $dataProfesi)
    {
        $validator = Validator::make($request->all(), [
            'id_pribadi' => 'required|integer',
            'dokter' => 'required|string',
            'spesialis' => '',
            'sub_spesialis' => '',
            'akademis' => 'required|string'
        ]);

        if($validator->fails()) {
            return response()->json([
                'message' => 'Data Profesi Gagal Diupdate',
                'data' => $validator->errors()
            ]);
        }

        $dataProfesi->update($request->all());

        return response()->json([
            'message' => 'Data Profesi Berhasil Diupdate',
            'data' => $dataProfesi
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $dataProfesi = DataProfesi::find($id);
        $dataProfesi->delete();

        return response()->json([
            'message' => 'Data Profesi Berhasil Dihapus',
            'data' => $dataProfesi
        ]);
    }
}