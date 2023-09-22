<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use Carbon\Carbon;
use App\Models\User;
use App\Models\DataPribadi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;


class DataPribadiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokter = Auth::user();
        $dataPribadi = DataPribadi::where('id_user', $dokter->id)->first();
        // return response()->json([
        //     'data1' => $dokter,
        //     'data' =>$dataPribadi
        // ]);

        return view('Dokter.DataPribadi.index', compact('dokter', 'dataPribadi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(DataPribadi $dataPribadi)
    {
        $data = Auth::user();
        // return response()->json([
        //     'data' => $data
        // ]);
        return view('Dokter.DataPribadi.create', compact('dataPribadi', 'data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request['tanggal_lahir'] = Carbon::parse($request['tanggal_lahir'])->toDateString();
        $filename = $request->file('foto')->getClientOriginalName();
        $name = trim($filename);

        $request->file('foto')->storeAs('public/uploads/dokter/foto-pribadi', $name);
        $request['foto_diri'] = $name;

        $filename2 = $request->file('photo_ktp')->getClientOriginalName();
        $name2 = trim($filename2);

        $request->file('photo_ktp')->storeAs('public/uploads/dokter/foto-ktp', $name2);
        $request['foto_ktp'] = $name2;

        $validator = Validator::make($request->all(), [
            'id_user' => 'required|string',
            'npaidi' => 'required|string',
            'identitas' => 'required|string',
            'no_identitas' => 'required|string',
            'nama_lengkap' => 'required|string',
            'foto_diri' => 'required',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'agama' => 'required|string',
            'nama_pasangan' => 'required|string',
            'ktp_provinsi' => 'required|string',
            'ktp_kabupaten_kota' => 'required|string',
            'ktp_kecamatan' => 'required|string',
            'ktp_kelurahan' => 'required|string',
            'ktp_rt' => 'required|string',
            'ktp_rw' => 'required|string',
            'ktp_kodepos' => 'required|string',
            'ktp_alamat_lengkap' => 'required|string',
            'foto_ktp' => 'required',
            'no_teleponrumah' => 'required|string|min:10|max:13',
            'no_hp' => 'required|string|min:10|max:13',
            'no_hp2' => '',
            'krsp_provinsi' => 'required|string',
            'krsp_kabupaten_kota' => 'required|string',
            'krsp_kecamatan' => 'required|string',
            'krsp_kelurahan' => 'required|string',
            'krsp_rt' => 'required|string',
            'krsp_rw' => 'required|string',
            'krsp_kodepos' => 'required|string',
            'krsp_alamat_lengkap' => 'required|string'
        ]);

        if ($validator->fails()) {
            $path = 'public/uploads/dokter/foto-pribadi' . $request['foto_diri'];
            if(file_exists($path)) {
                unlink($path);
            }

            $pathKTP = 'public/uploads/dokter/foto-ktp' . $request['foto_ktp'];
            if(file_exists($pathKTP)) {
                unlink($pathKTP);
            }

            Alert::error('Error', 'Data Pribadi Gagal Ditambahkan');
            return redirect()->back();
        }
        DataPribadi::create($request->all());
        
        toast('Data Pribadi Berhasil Ditambahkan', 'success');
        return redirect()->route('data-pribadi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataPribadi $dataPribadi)
    {
        $dataPribadi = DataPribadi::find($dataPribadi->id);
        return response()->json([
            'message' => 'Data Pribadi Ditemukan',
            'data' => $dataPribadi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $dokter = Auth::user();
        $dataPribadi = DataPribadi::where('id_user', $dokter->id)->first();
        // return response()->json([
        //     'data' => $dokter,
        //     'data2' => $dataPribadi
        // ]);
        return view('Dokter.DataPribadi.edit', compact('dokter', 'dataPribadi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataPribadi $dataPribadi)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required|string',
            'npaidi' => 'required|string',
            'identitas' => 'required|string',
            'no_identitas' => 'required|string',
            'nama_lengkap' => 'required|string',
            'foto_diri' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'agama' => 'required|string',
            'nama_pasangan' => 'required|string',
            'ktp_provinsi' => 'required|string',
            'ktp_kabupaten_kota' => 'required|string',
            'ktp_kecamatan' => 'required|string',
            'ktp_kelurahan' => 'required|string',
            'ktp_rt' => 'required|string',
            'ktp_rw' => 'required|string',
            'ktp_kodepos' => 'required|string',
            'ktp_alamat_lengkap' => 'required|string',
            'foto_ktp' => 'required|string',
            'no_teleponrumah' => 'required|string|min:10|max:13',
            'no_hp' => 'required|string|min:10|max:13',
            'no_hp2' => '',
            'krsp_provinsi' => 'required|string',
            'krsp_kabupaten_kota' => 'required|string',
            'krsp_kecamatan' => 'required|string',
            'krsp_kelurahan' => 'required|string',
            'krsp_rt' => 'required|string',
            'krsp_rw' => 'required|string',
            'krsp_kodepos' => 'required|string',
            'krsp_alamat_lengkap' => 'required|string'
        ]);

        // return response()->json([
        //     'data' => $request->all()
        // ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        
        $dataPribadi->update($request->all());
        
        toast('Data Pribadi Berhasil Diupdate', 'success');
        return redirect()->route('data-pribadi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $dataPribadi = DataPribadi::find($id);
        $dataPribadi->delete();

        toast('Data Pribadi Berhasil Dihapus', 'success');
        return redirect()->route('data-pribadi.index');
    }
}