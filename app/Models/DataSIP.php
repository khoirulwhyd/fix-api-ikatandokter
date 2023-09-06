<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSIP extends Model
{
    use HasFactory;

    protected $table = 'data_sip_s';

    protected $fillable = [
        'id_pribadi',
        'no_sip',
        'scan_sip'
    ];

    public function dataPribadi()
    {
        return $this->belongsTo(DataPribadi::class, 'id_pribadi', 'id');
    }
}