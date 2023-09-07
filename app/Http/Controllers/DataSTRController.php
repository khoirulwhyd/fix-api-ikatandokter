<?php

namespace App\Http\Controllers;

use App\Models\DataSTR;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Validator;

class DataSTRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(DataSTR::all()->isEmpty()) {
            return response()->json([
                'message' => 'Data STR Tidak Ditemukan'
            ]);
        }

        return response()->json([
            'message' => 'Data STR Ditemukan',
            'data' => DataSTR::all()
        ]);
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
        $validator = Validator::make($request->all(), [
            'id_pribadi' => 'required|integer',
            'no_str' => 'required|string',
            'scan_str' => 'required|string'
        ]);

        if($validator->fails()) {
            return response()->json([
                'message' => 'Data STR Gagal Ditambahkan',
                'data' => $validator->errors()
            ]);
        }
        DataSTR::create($request->all());

        return response()->json([
            'message' => 'Data STR Berhasil Ditambahkan',
            'data' => $request->all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DataSTR $dataSTR)
    {
        $dataSTR = DataSTR::find($dataSTR->id);
        return response()->json([
            'message' => 'Data STR Ditemukan',
            'data' => $dataSTR
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataSTR $dataSTR)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataSTR $dataSTR)
    {
        $validator = Validator::make($request->all(), [
            'id_pribadi' => 'required|integer',
            'no_str' => 'required|string',
            'scan_str' => 'required|string'
        ]);

        if($validator->fails()) {
            return response()->json([
                'message' => 'Data STR Gagal Diubah',
                'data' => $validator->errors()
            ]);
        }

        $dataSTR->update($request->all());

        return response()->json([
            'message' => 'Data STR Berhasil Diubah',
            'data' => $dataSTR
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $dataSTR = DataSTR::find($id);
        $dataSTR->delete();

        return response()->json([
            'message' => 'Data STR Berhasil Dihapus',
            'data' => $dataSTR
        ]);
    }
}