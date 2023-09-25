<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klinik extends Model
{
    use HasFactory;
    protected $table = 'kliniks';

    protected $fillable = [
        'id',
        'nama_dokter',
        'alamat_praktik',
        'kecamatan'
    ];
}
