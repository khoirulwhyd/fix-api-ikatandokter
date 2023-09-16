<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use App\Models\DataSIP;
use App\Models\DataPribadi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DataSIPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokter = Auth::user();
        $dataPribadi = DataPribadi::where('id_user', $dokter->id)->first();
        $dataSIP = DataSIP::where('id_user', $dokter->id)->first();
        // return response()->json([
        //     'data1' => $dokter,
        //     'data' => $dataSIP
        // ]);
        return view('Dokter.SIP.index', compact('dokter', 'dataPribadi', 'dataSIP'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(DataSIP $dataSIP)
    {
        $dokter = Auth::user();
        $dataPribadi = DataPribadi::where('id_user', $dokter->id)->first();
        // return response()->json([
        //     'data1' => $dokter,
        //     'data' => $dataPribadi
        // ]);
        return view('Dokter.SIP.create', compact('dataPribadi', 'dataSIP'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required|integer',
            'no_sip' => 'required|string',
            'scan_sip' => ''
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        DataSIP::create($request->all());

        return redirect()->route('data-sip.index')->with('success', 'Data SIP Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataSIP $dataSIP)
    {
        $dataSIP = DataSIP::find($dataSIP->id);
        return response()->json([
            'message' => 'Data SIP Ditemukan',
            'data' => $dataSIP
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataSIP $dataSIP)
    {
        $dokter = Auth::user();
        $dataPribadi = DataPribadi::where('id_user', $dokter->id)->first();
        $dataSIP = DataSIP::where('id_user', $dokter->id)->first();
        return view('Dokter.SIP.edit', compact('dataSIP', 'dataPribadi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataSIP $dataSIP)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required|integer',
            'no_sip' => 'required|string',
            'scan_sip' => ''
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $dataSIP->update($request->all());

        return redirect()->route('data-sip.index')->with('success', 'Data SIP Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $dataSIP = DataSIP::find($id);
        $dataSIP->delete();

        return reponse()->json([
            'message' => 'Data SIP Berhasil Dihapus',
            'data' => $dataSIP
        ]);
    }
}