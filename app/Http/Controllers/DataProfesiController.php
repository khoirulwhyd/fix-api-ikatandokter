<?php

namespace App\Http\Controllers;

use App\Models\DataProfesi;

//modell dropdown
use App\Models\Pilihan;
use App\Models\Spesialis;
use App\Models\Subspesialis;
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
        $dokter = Auth::user();
        $dataProfesi = DataProfesi::where('id_user', $dokter->id)->get();
        
        // return response()->json([
        //     'data' => $dokter,
        //     'data2' => $dataProfesi
        // ]);
        // return response()->json([
        //     'data' => $dokter,
        //     'data2' => $dataProfesi
        // ]);
        return view('Dokter.DataProfesi.index', compact('dokter', 'dataProfesi'));        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(DataProfesi $dataProfesi)
    {
        $auth = Auth::user();
        $data["pilihans"] = Pilihan::get(["name", "id"]);
        $data["spesialis"] = Spesialis::get(["name", "id"]);
        $data["subspesialis"] = Subspesialis::get(["name", "id"]);

        return view('Dokter.DataProfesi.create', $data, compact('dataProfesi', 'auth'));
    }
    public function fetchSpesialis(Request $request)
    {
        $data['spesialis'] = Spesialis::where("pilihan_id", $request->pilihan_id)
            ->get(["name", "id"]);

        return response()->json($data);
    }
    public function fetchSubspesialis(Request $request)
    {
        $data['subspesialis'] = Subspesialis::where("spesialis_id", $request->spesialis_id)
            ->get(["name", "id"]);

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'dokter' => 'required|string',
            'spesialis' => '',
            'sub_spesialis' => '', 
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 401);
        }
        DataProfesi::create($request->all());
        
        toast('Data profesi berhasil ditambahkan', 'success');
        return redirect()->route('data-profesi.index');
        // return response()->json([
        //     'message' => 'Data Profesi Berhasil Ditambahkan',
        //     'data' => $request->all()
        // ]);
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
    public function edit(string $id)
    {
        $auth = Auth::user();
        $dataProfesi = DataProfesi::select('*')
            ->where('id', $id)
            ->get();
        $data["pilihans"] = Pilihan::get(["name", "id"]);
        $data["spesialis"] = Spesialis::get(["name", "id"]);
        $data["subspesialis"] = Subspesialis::get(["name", "id"]);

        return view('Dokter.DataProfesi.edit', $data, compact('dataProfesi', 'auth'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataProfesi $dataProfes, string $id )
    {
        $validator = Validator::make($request->all(), [
            'dokter' => 'required|string',
            'spesialis' => '',
            'sub_spesialis' => ''
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 401);
        }
        $dataProfesi = DataProfesi::find($id);
        $dataProfesi->update($request->all());

        toast('Data Pribadi Berhasil Diupdate', 'success');
        return redirect()->route('data-profesi.index', $dataProfesi);
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