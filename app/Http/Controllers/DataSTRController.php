<?php

namespace App\Http\Controllers;

use App\Models\DataSTR;
use App\Models\DataPribadi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Validator;
use Auth;

class DataSTRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth = Auth::user();
        $dataPribadi = DataPribadi::where('id_user', $auth->id)->first();
        $dataSTR = DataSTR::where('id_user', $auth->id)->first();
        return view('Dokter.STR.index', compact('auth', 'dataPribadi', 'dataSTR'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $auth = Auth::user();
        return view('Dokter.STR.create', compact('auth'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = $request->file('str')->getClientOriginalName();
        $name = trim($filename);

        $request->file('str')->storeAs('public/uploads/dokter/str', $name);
        $request['scan_str'] = $name;

        $validator = Validator::make($request->all(), [
            'id_user' => 'required|integer',
            'no_str' => 'required',
            'scan_str' => 'required'
        ]);

        if ($validator->fails()) {
            $path = 'public/uploads/dokter/str' . $request['scan_str'];
            if(file_exists($path)){
                unlink($path);
            }

            Alert::error('Error', 'Data STR Gagal Ditambahkan');
            return response()->json($validator->errors(), 400);
        }
        DataSTR::create($request->all());

        toast('Data STR Berhasil Ditambahkan', 'success');
        return redirect()->route('data-str.index');
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
        $auth = Auth::user();
        $dataPribadi = DataPribadi::where('id_user', $auth->id)->first();
        $dataSTR = DataSTR::where('id_user', $auth->id)->first();
        return view('Dokter.STR.edit', compact('auth', 'dataPribadi', 'dataSTR'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataSTR $dataSTR)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required|integer',
            'no_str' => 'required|string',
            'scan_str' => ''
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        // return response()->json([
        //     'data' => $request->all()
        // ]);
        $dataSTR->update($request->all());

        toast('Data STR Berhasil Diupdate', 'success');
        return redirect()->route('data-str.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $dataSTR = DataSTR::find($id);
        $dataSTR->delete();

        toast('Data Pribadi Berhasil Dihapus', 'success');
        return redirect()->route('data-str.index');
    }
}