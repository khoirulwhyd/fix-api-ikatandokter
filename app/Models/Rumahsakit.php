<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumahsakit extends Model
{
    use HasFactory;
    
    protected $table = 'rumahsakits';
    
    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'no_telp',
        'layanan_pembayaran',
        'hari_pelayanan',
        'kecamatan',
        'tipe',
    ];
}