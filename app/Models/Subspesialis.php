<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subspesialis extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'pilihan_id'
    ];
}
