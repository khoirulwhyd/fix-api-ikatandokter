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
        'scan_sip'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}