<?php

namespace Database\Seeders;

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
                'nama_lengkap' => 'Dokter',
                'no_telepon' => '081234567890',
                'email' => 'dokter@gmail.com',
                'password' => Hash::make('passsword'),
                'ulangi_password' => Hash::make('passsword')
            ]
        ]);
    }
}