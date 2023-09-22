<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPribadi extends Model
{
    use HasFactory;

    protected $table = 'data_pribadis';

    protected $fillable = [
        'id_user',
        'npaidi',
        'identitas',
        'no_identitas',
        'nama_lengkap',
        'foto_diri',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'kewarganegaraan',
        'agama',
        'nama_pasangan',
        'ktp_provinsi',
        'ktp_kabupaten_kota',
        'ktp_kecamatan',
        'ktp_kelurahan',
        'ktp_rt',
        'ktp_rw',
        'ktp_kodepos',
        'ktp_alamat_lengkap',
        'foto_ktp',
        'no_teleponrumah',
        'no_hp',
        'no_hp2',
        'krsp_provinsi',
        'krsp_kabupaten_kota',
        'krsp_kecamatan',
        'krsp_kelurahan',
        'krsp_rt',
        'krsp_rw',
        'krsp_kodepos',
        'krsp_alamat_lengkap'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function dataProfesi()
    {
        return $this->hasOne(DataProfesi::class);
    }

    public function dataSTR()
    {
        return $this->hasOne(DataSTR::class);
    }

    public function dataSIP()
    {
        return $this->hasOne(DataSIP::class);
    }
}