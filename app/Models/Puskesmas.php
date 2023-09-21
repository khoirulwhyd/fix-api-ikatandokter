<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puskesmas extends Model
{
    use HasFactory;
    protected $table = 'puskesmas';

    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'no_telp',
        'jenis_perawatan',
        'email',
        // 'kecamatan'
    ];
}
