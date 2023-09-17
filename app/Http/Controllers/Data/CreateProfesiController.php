<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pilihan;
use App\Models\Spesialis;
use App\Models\Subspesialis;
use Validator;
use Auth;
use App\Models\DataProfesi;

class CreateProfesiController extends Controller
{
    //
    public function index(DataProfesi $dataProfesi)
    {
        $auth = Auth::user();
        $data["pilihans"] = Pilihan::get(["name", "id"]);
        return view('Dokter.DataProfesi.creates', $data, compact('dataProfesi', 'auth'));
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

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'dokter' => 'required|string',
            'spesialis' => '',
            'sub_spesialis' => '',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 401);
        }
        DataProfesi::create($request->all());

        toast('Data profesi berhasil ditambahkan', 'success');
        return redirect()->route('data-profesi');
        // return response()->json([
        //     'message' => 'Data Profesi Berhasil Ditambahkan',
        //     'data' => $request->all()
        // ]);
    }

}
