<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use App\Models\Klinik;
use App\Models\Puskesmas;
use Illuminate\Http\Request;
use App\Models\Rumahsakit;
use App\Models\DataPribadi;
use Illuminate\Support\Facades\DB;
use Auth;

class DashboardDataController extends Controller
{
    public function fotoNav() {
        $user = Auth::user();
        $data = DataPribadi::where('id_user', $user->id)->first();

        if($foto = $data->foto_diri) {
            $imageURL = asset('storage/uploads/dokter/foto-pribadi/' . $foto);
            return response()->file($imageURL);
        } else {
            $imageURL = asset('Assets/emptystate.png');
            return response()->file($imageURL);
        }
        return response()->json([
            'data' => $imageURL
        ]);
    }

    public function rumahsakit() {
        $rumahsakits = Rumahsakit::all();

        return view('Dokter.Dashboard.rumahsakit', compact('rumahsakits'));
    }

    public function carirumahsakit(Request $request) {
        $search = $request->input('search');

        $rumahsakits = Rumahsakit::where('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('alamat', 'LIKE', '%' . $search . '%')
            ->orWhere('layanan_pembayaran', 'LIKE', '%' . $search . '%')
            ->orWhere('kecamatan', 'LIKE', '%' . $search . '%')
            ->get();

        return view('Dokter.Dashboard.rumahsakit', compact('rumahsakits'));
    }

    public function puskesmas() {
        $puskesmass = Puskesmas::all();
        return view('Dokter.Dashboard.puskesmas', compact('puskesmass'));
        // return response()->json([
        //     $puskesmass
        // ]);
    }
    public function caripuskesmas(Request $request)
    {
        $search = $request->input('search');

        $puskesmass = Puskesmas::where('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('alamat', 'LIKE', '%' . $search . '%')
            ->orWhere('jenis_perawatan', 'LIKE', '%' . $search . '%')
            ->orWhere('kecamatan', 'LIKE', '%' . $search . '%')
            ->get();

        return view('Dokter.Dashboard.puskesmas', compact('puskesmass'));
    }

    public function klinik()
    {
        $kliniks = Klinik::all();
        return view('Dokter.Dashboard.klinik', compact('kliniks'));
        // return response()->json([
        //     $puskesmass
        // ]);
    }

    public function cariklinik(Request $request)
    {
        $search = $request->input('search');

        $kliniks = Klinik::where('nama_dokter', 'LIKE', '%' . $search . '%')
            ->orWhere('alamat_praktik', 'LIKE', '%' . $search . '%')
            ->orWhere('kecamatan', 'LIKE', '%' . $search . '%')
            ->get();

        return view('Dokter.Dashboard.klinik', compact('kliniks'));
    }
}