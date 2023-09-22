<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pilihan;
use App\Models\Spesialis;
use App\Models\Subspesialis;


class PilihanProfesiController extends Controller
{
    public function index()
    {
        $data['pilihans'] = Pilihan::get(["name", "id"]);
        return view('Dokter.DataProfesi.testajax', $data);
    }
    //
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
}
