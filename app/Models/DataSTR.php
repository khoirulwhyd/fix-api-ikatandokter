<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSTR extends Model
{
    use HasFactory;

    protected $table = 'data_str_s';

    protected $fillable = [
        'id_pribadi',
        'no_str',
        'scan_str'
    ];

    public function dataPribadi()
    {
        return $this->belongsTo(DataPribadi::class, 'id_pribadi', 'id');
    }
}