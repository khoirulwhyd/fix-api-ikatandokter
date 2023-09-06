<?php

namespace App\Http\Controllers;
use App\Models\Rumahsakit;

use Illuminate\Http\Request;

class rumahSakitController extends Controller
{
    // public function index() {
    //     $data = Rumahsakit::OrderBy('nama', 'asc')->get();
    //     return response->json([
    //         'status'=> true,
    //         'message'=> 'data ditemukan',
    //         'data' => $data
    //     ], 200);
    // }

    public function indexRumahSakit() {
        $rumahsakits = Rumahsakit::all();
        // dd($data);
        return response()->json([
            'status' => true,
            'message' => 'data ditemukan',
            'data' => $rumahsakits
        ], 200);
    }
}
