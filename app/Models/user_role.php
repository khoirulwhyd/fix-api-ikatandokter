<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_role extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'role_id'];

    // public function User() {
    //     return $this->hasMany(User::class, 'user_role');
    // }
}
