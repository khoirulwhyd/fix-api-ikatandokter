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
            ]
        ]);
    }
}