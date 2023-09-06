<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class role extends Model
{
    use HasFactory;
    protected $fillable = ['role_name'];
    
    public function User() {
        return $this->belongsToMany(User::class);
    }
}
