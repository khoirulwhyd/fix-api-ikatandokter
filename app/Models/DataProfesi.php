<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\DataPribadi;

class DataProfesi extends Model
{
    use HasFactory;

    protected $table = 'data_profesis';

    protected $fillable = [
        'id_user',
        'dokter',
        'spesialis',
        'sub_spesialis',
        'akademis'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}