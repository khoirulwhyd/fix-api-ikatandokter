<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPribadi extends Model
{
    use HasFactory;

    protected $table = 'data_pribadis';

    protected $fillable = [
        'npaidi',
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
        'ktp_kabupaten/kota',
        'ktp_kecamatan',
        'ktp_kelurahan',
        'ktp_rt',
        'ktp_rw',
        'ktp_kodepos',
        'ktp_alamat_lengkap',
        'no_teleponrumah',
        'no_hp',
        'no_hp2',
        'krsp_provinsi',
        'krsp_kabupaten/kota',
        'krsp_kecamatan',
        'krsp_kelurahan',
        'krsp_rt',
        'krsp_rw',
        'krsp_kodepos',
        'krsp_alamat_lengkap'
    ];

    public function dataProfesi()
    {
        return $this->hasMany(DataProfesi::class);
    }

    public function dataSIP()
    {
        return $this->hasMany(DataSIP::class);
    }
    
    public function dataSTR()
    {
        return $this->hasOne(DataSTR::class);
    }
}