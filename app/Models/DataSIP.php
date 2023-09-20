<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSIP extends Model
{
    use HasFactory;

    protected $table = 'data_sip_s';
    protected $fillable = [
        'id_user',
        'no_sip',
        'jenis_sarana',
        'nama_sarana',
        'hari_pelayanan',
        'waktu_pelayanan',
        'provinsi',
        'kab_kota',
        'kecamatan',
        'kelurahan',
        'rt',
        'rw',
        'kode_pos',
        'alamat_lengkap',
        'mulai_berlaku',
        'akhir_berlaku',
        'scan_sip'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function dataPribadi()
    {
        return $this->belongsTo(DataPribadi::class);
    }

    public function dataProfesi()
    {
        return $this->belongsTo(DataProfesi::class);
    }

    public function dataSTR()
    {
        return $this->belongsTo(DataSTR::class);
    }
}