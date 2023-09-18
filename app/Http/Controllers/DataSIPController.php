<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\DataSIP;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Auth;

class DataSIPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dokter.SIP.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(DataSIP $datasip)
    {
        $auth = Auth::user();
        return view('Dokter.SIP.create', $datasip, compact('datasip', 'auth'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_pribadi' => 'required|integer',
            'no_sip' => 'required|string',
            'scan_sip' => 'required|string'
        ]);

        if($validator->fails()) {
            return response()->json([
                'message' => 'Data SIP Gagal Ditambahkan',
                'data' => $validator->errors()
            ]);
        }
        DataSIP::create($request->all());

        return response()->json([
            'message' => 'Data SIP Berhasil Ditambahkan',
            'data' => $request->all()
        ]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataSIP $dataSIP)
    {
        $validator = Validator::make($request->all(), [
            'id_pribadi' => 'required|integer',
            'no_sip' => 'required|string',
            'scan_sip' => 'required|string'
        ]);

        if($validator->fails()) {
            return response()->json([
                'message' => 'Data SIP Gagal Diupdate',
                'data' => $validator->errors()
            ]);
        }

        $dataSIP->update($request->all());

        return response()->json([
            'message' => 'Data SIP Berhasil Diupdate',
            'data' => $dataSIP
        ]);
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