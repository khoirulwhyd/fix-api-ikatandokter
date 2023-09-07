<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = [
        'role_name',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_role');
    }
}