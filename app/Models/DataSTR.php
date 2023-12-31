<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSTR extends Model
{
    use HasFactory;

    protected $table = 'data_str_s';

    protected $fillable = [
        'id_user',
        'no_str',
        'scan_str'
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

    public function dataSIP()
    {
        return $this->belongsTo(DataSIP::class);
    }
}