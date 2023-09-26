<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Dokter extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'npaidi' => '123456789012',
                'nik' => '1234567890123456',
                'nama_lengkap' => 'Sholikin',
                'no_telepon' => '081234567890',
                'email' => 'sholikinmuhammad1941720140@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('passsword'),
                'ulangi_password' => Hash::make('passsword'),
                'role' => 'dokter',
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'npaidi' => '123456789021',
                'nik' => '1234567890123488',
                'nama_lengkap' => 'Micin',
                'no_telepon' => '081234567811',
                'email' => 'sholikinmuhammad140201@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('passsword'),
                'ulangi_password' => Hash::make('passsword'),
                'role' => 'dokter',
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'npaidi' => '123452189021',
                'nik' => '1234567832123488',
                'nama_lengkap' => 'Muhammad Khoirul Wahyudin',
                'no_telepon' => '081234562211',
                'email' => 'gamingkenzo7@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('passsword'),
                'ulangi_password' => Hash::make('passsword'),
                'role' => 'dokter',
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'npaidi' => '223452189021',
                'nik' => '1232367832123488',
                'nama_lengkap' => 'Ahmad Fauzi',
                'no_telepon' => '081234562761',
                'email' => 'khoirulwahyudin17@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('passsword'),
                'ulangi_password' => Hash::make('passsword'),
                'role' => 'dokter',
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'npaidi' => '223459089021',
                'nik' => '1232367832125088',
                'nama_lengkap' => 'Dimas Aditya',
                'no_telepon' => '081234539761',
                'email' => 'wahyudinirul6@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('passsword'),
                'ulangi_password' => Hash::make('passsword'),
                'role' => 'dokter',
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}