<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use App\Models\DataSIP;
use App\Models\DataPribadi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class DataSIPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokter = Auth::user();
        $dataPribadi = DataPribadi::where('id_user', $dokter->id)->first();
        //get sip
        $datasip = DataSIP::where('id_user', $dokter->id)->get();
        //dd($datasip);
        // $data = [];
       
        // dd($data);
        return view('Dokter.SIP.index', compact('dokter', 'datasip', 'dataPribadi'));
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
        $filename = $request->file('sip')->getClientOriginalName();
        $name = trim($filename);

        $request->file('sip')->storeAs('public/uploads/dokter/sip', $name);
        $request['scan_sip'] = $name;


        $request['mulai_berlaku'] = Carbon::parse($request['mulai_berlaku'])->toDateString();
        $request['akhir_berlaku'] = Carbon::parse($request['akhir_berlaku'])->toDateString();


        
        $validator = Validator::make($request->all(), [
            'id_user' => 'required|integer',
            'no_sip' => 'required|string',
            'jenis_sarana' => 'required|string',
            'nama_sarana' => 'required|string',
            'hari_pelayanan' => 'required|string',
            'waktu_pelayanan' => 'required|string',
            'provinsi' => 'required|string',
            'kab_kota' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'rt' => 'required|string',
            'rw' => 'required|string',
            'kode_pos' => 'required|string',
            'alamat_lengkap' => 'required|string',
            'mulai_berlaku' => 'required|string',
            'akhir_berlaku' => 'required|string',
            'scan_sip' => 'required'
        ]);

        if ($validator->fails()) {
            $path = 'public/uploads/dokter/sip' . $request['scan_sip'];
            if (file_exists($path)) {
                unlink($path);
            }

            Alert::error('Error', 'Data STR Gagal Ditambahkan');
            return response()->json($validator->errors(), 400);
        }

        DataSIP::create($request->all());

        toast('Data SIP Berhasil Ditambahkan', 'success');
        return redirect()->route('data-sip.index' );

        // return response()->json([
        //     'message' => 'Data SIP Berhasil Ditambahkan',
        //     'data' => $request->all()
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DataSIP $dataSIP)
    {
        $datasip = DataSIP::find($dataSIP->id);
        return response()->json([
            'message' => 'Data SIP Ditemukan',
            'data' => $datasip
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataSIP $datasip, string $id)
    {
        // $dokter = Auth::user();
        // $dataPribadi = DataPribadi::where('id_user', $dokter->id)->first();
        // $dataSIP = DataSIP::where('id_user', $dokter->id)->first();
        // return view('Dokter.SIP.edit', compact('dataSIP', 'dataPribadi'));
        $auth = Auth::user();
        $datasip = DataSIP::select('*')
            ->where('id', $id)
            ->get();

        return view('Dokter.SIP.edit', $datasip, compact('datasip','auth'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataSIP $datasip, string $id)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required|integer',
            'no_sip' => 'required|string',
            'jenis_sarana' => 'required|string',
            'nama_sarana' => 'required|string',
            'hari_pelayanan' => 'required|string',
            'waktu_pelayanan' => 'required|string',
            'provinsi' => 'required|string',
            'kab_kota' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'rt' => 'required|string',
            'rw' => 'required|string',
            'kode_pos' => 'required|string',
            'alamat_lengkap' => 'required|string',
            'mulai_berlaku' => 'required|string',
            'akhir_berlaku' => 'required|string',
            'scan_sip' => ''
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $datasip = DataSIP::find($id);
        $datasip->update($request->all());

        // return redirect()->route('data-sip.index')->with('success', 'Data SIP Berhasil Diupdate');
        toast('Data SIP Berhasil Diupdate', 'success');
        return redirect()->route('data-sip.index', $datasip);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $datasip = DataSIP::find($id);
        $datasip->delete();
        toast('Data SIP Berhasil Dihapus', 'success');
        return back();

        // return reponse()->json([
        //     'message' => 'Data SIP Berhasil Dihapus',
        //     'data' => $dataSIP
        // ]);
        
    }
}