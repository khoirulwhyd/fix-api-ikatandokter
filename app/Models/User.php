<?php

namespace App\Models;

use App\Models\user_role;
use App\Models\role;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // add role
    const ROLE_USER = 'user';
    const ROLE_DOKTER = 'dokter';
    const ROLE_ADMIN  = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'npaidi',
        'nik',
        'nama_lengkap',
        'no_telepon',
        'email',
        'password',
        'ulangi_password',
        'lupa_password',
        'role',
        'email_verified_at',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'lupa_password',
        'remember_token'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'lupa_password' => 'hashed'
    ];
    
    public function data_pribadi()
    {
        return $this->hasOne(DataPribadi::class, 'id_pribadi', 'id');
    }

    public function data_profesi()
    {
        return $this->hasOne(DataProfesi::class, 'id_profesi', 'id');
    }
    
    public function data_sip()
    {
        return $this->hasOne(DataSIP::class, 'id_sip', 'id');
    }

    public function data_str()
    {
        return $this->hasOne(DataSTR::class, 'id_str', 'id');
    }
}